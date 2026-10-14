<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;
use App\Models\VisitorPageview;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class TrackVisitor
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only track successful GET web requests
        if ($request->isMethod('GET') && !$request->ajax()) {
            $path = $request->path();

            // Skip admin, setup, assets and debug routes
            if (
                str_starts_with($path, 'admin') ||
                str_starts_with($path, 'setup') ||
                str_starts_with($path, '_ignition') ||
                str_starts_with($path, 'assets') ||
                str_ends_with($path, '.ico') ||
                str_ends_with($path, '.png') ||
                str_ends_with($path, '.jpg') ||
                str_ends_with($path, '.jpeg') ||
                str_ends_with($path, '.svg') ||
                str_ends_with($path, '.css') ||
                str_ends_with($path, '.js')
            ) {
                return $response;
            }

            try {
                if (Schema::hasTable('visitors') && Schema::hasTable('visitor_pageviews')) {
                    $ip = $request->ip() ?? '127.0.0.1';
                    $userAgent = $request->userAgent() ?? '';
                    $device = $this->detectDevice($userAgent);
                    $browser = $this->detectBrowser($userAgent);
                    $os = $this->detectOS($userAgent);
                    $url = $request->fullUrl();
                    $referer = $request->headers->get('referer');

                    $sessionKey = 'visited_nimad_session';
                    $isNewSession = !$request->session()->has($sessionKey);
                    if ($isNewSession) {
                        $request->session()->put($sessionKey, time());
                    }

                    $visitor = Visitor::where('ip_address', $ip)->first();

                    if (!$visitor) {
                        $loc = $this->resolveLocation($request, $ip);
                        $visitor = Visitor::create([
                            'ip_address' => $ip,
                            'city' => $loc['city'] ?? null,
                            'region' => $loc['region'] ?? null,
                            'country' => $loc['country'] ?? null,
                            'country_code' => $loc['country_code'] ?? null,
                            'device' => $device,
                            'browser' => $browser,
                            'os' => $os,
                            'user_agent' => substr($userAgent, 0, 500),
                            'total_visits' => 1,
                            'total_pageviews' => 1,
                            'first_visited_at' => now(),
                            'last_visited_at' => now(),
                        ]);
                    } else {
                        // If location was not previously populated, attempt to resolve
                        if (empty($visitor->country)) {
                            $loc = $this->resolveLocation($request, $ip);
                            $visitor->city = $loc['city'] ?? $visitor->city;
                            $visitor->region = $loc['region'] ?? $visitor->region;
                            $visitor->country = $loc['country'] ?? $visitor->country;
                            $visitor->country_code = $loc['country_code'] ?? $visitor->country_code;
                        }

                        $visitor->total_pageviews += 1;
                        if ($isNewSession) {
                            $visitor->total_visits += 1;
                        }
                        $visitor->last_visited_at = now();
                        $visitor->save();
                    }

                    // Record the specific page viewed
                    VisitorPageview::create([
                        'visitor_id' => $visitor->id,
                        'ip_address' => $ip,
                        'page_url' => $url,
                        'page_title' => $this->pageTitleFromUrl($request->path()),
                        'referer' => $referer ? substr($referer, 0, 255) : null,
                    ]);
                }
            } catch (\Throwable $e) {
                // Silently ignore if DB is not yet created or connected
            }
        }

        return $response;
    }

    private function resolveLocation(Request $request, string $ip): array
    {
        // 1. Cloudflare geolocation headers
        $cfCity = $request->header('CF-IPCity');
        $cfCountry = $request->header('CF-IPCountry');
        $cfRegion = $request->header('CF-Region');

        if ($cfCity || $cfCountry) {
            return [
                'city' => $cfCity ?: 'Unknown City',
                'region' => $cfRegion ?: null,
                'country' => $cfCountry ?: 'Unknown Country',
                'country_code' => $cfCountry ?: 'IN',
            ];
        }

        // 2. Localhost / Private network IPs
        if (
            in_array($ip, ['127.0.0.1', '::1']) ||
            str_starts_with($ip, '192.168.') ||
            str_starts_with($ip, '10.') ||
            str_starts_with($ip, '172.16.')
        ) {
            return [
                'city' => 'Localhost / Dev',
                'region' => 'Development',
                'country' => 'Local Network',
                'country_code' => 'LOC',
            ];
        }

        // 3. Fast non-blocking cached IP lookup (cached for 30 days)
        try {
            return Cache::remember("visitor_loc_{$ip}", 60 * 60 * 24 * 30, function () use ($ip) {
                $response = Http::timeout(1.5)->get("http://ip-api.com/json/{$ip}?fields=status,country,countryCode,regionName,city");
                if ($response->successful()) {
                    $data = $response->json();
                    if (($data['status'] ?? '') === 'success') {
                        return [
                            'city' => $data['city'] ?? null,
                            'region' => $data['regionName'] ?? null,
                            'country' => $data['country'] ?? null,
                            'country_code' => $data['countryCode'] ?? null,
                        ];
                    }
                }
                return [
                    'city' => 'Unknown',
                    'region' => null,
                    'country' => 'Unknown',
                    'country_code' => null,
                ];
            });
        } catch (\Throwable $e) {
            return [
                'city' => null,
                'region' => null,
                'country' => null,
                'country_code' => null,
            ];
        }
    }

    private function detectDevice(string $ua): string
    {
        if (preg_match('/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i', $ua)) {
            return 'Tablet';
        }
        if (preg_match('/(mobile|ipod|iphone|android|blackberry|iemobile)/i', $ua)) {
            return 'Mobile';
        }
        return 'Desktop';
    }

    private function detectBrowser(string $ua): string
    {
        if (str_contains($ua, 'Edg/')) return 'Edge';
        if (str_contains($ua, 'Chrome/')) return 'Chrome';
        if (str_contains($ua, 'Safari/') && !str_contains($ua, 'Chrome/')) return 'Safari';
        if (str_contains($ua, 'Firefox/')) return 'Firefox';
        if (str_contains($ua, 'MSIE') || str_contains($ua, 'Trident/')) return 'Internet Explorer';
        return 'Other';
    }

    private function detectOS(string $ua): string
    {
        if (str_contains($ua, 'Windows')) return 'Windows';
        if (str_contains($ua, 'Macintosh') || str_contains($ua, 'Mac OS')) return 'macOS';
        if (str_contains($ua, 'Android')) return 'Android';
        if (str_contains($ua, 'iPhone') || str_contains($ua, 'iPad')) return 'iOS';
        if (str_contains($ua, 'Linux')) return 'Linux';
        return 'Other';
    }

    private function pageTitleFromUrl(string $path): string
    {
        if ($path === '' || $path === '/') return 'Home';
        return ucwords(str_replace(['-', '/'], [' ', ' > '], trim($path, '/')));
    }
}
