<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\SetupDatabaseController;
use App\Models\Blog;

/*
|--------------------------------------------------------------------------
| One-Click Server Database Setup & Migrations
|--------------------------------------------------------------------------
*/
Route::get('/setup-database', [SetupDatabaseController::class, 'setup'])->name('setup.database');

/*
|--------------------------------------------------------------------------
| Dynamic Sitemap.xml (SEO, LLM & Search Engines)
|--------------------------------------------------------------------------
*/
Route::get('/sitemap.xml', function () {
    $blogs = [];
    try {
        if (\Illuminate\Support\Facades\Schema::hasTable('blogs')) {
            $blogs = Blog::where('is_published', true)->get();
        }
    } catch (\Throwable $e) {}

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    $staticRoutes = [
        ['loc' => url('/'), 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => route('services'), 'priority' => '0.9', 'changefreq' => 'weekly'],
        ['loc' => route('services.custom-software'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('services.web-application'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('services.website-design'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('services.mobile-app'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('services.crm-erp'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('services.ai-integration'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('services.saas-product'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('services.api-development'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('services.application-modernization'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('services.website-maintenance'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('solutions'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('industries'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('portfolio'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('about'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => route('blog'), 'priority' => '0.9', 'changefreq' => 'daily'],
        ['loc' => route('contact'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('start-a-project'), 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['loc' => route('privacy-policy'), 'priority' => '0.3', 'changefreq' => 'yearly'],
        ['loc' => route('terms-of-service'), 'priority' => '0.3', 'changefreq' => 'yearly'],
    ];

    foreach ($staticRoutes as $r) {
        $xml .= '<url>';
        $xml .= '<loc>' . htmlspecialchars($r['loc']) . '</loc>';
        $xml .= '<changefreq>' . $r['changefreq'] . '</changefreq>';
        $xml .= '<priority>' . $r['priority'] . '</priority>';
        $xml .= '</url>';
    }

    foreach ($blogs as $b) {
        $xml .= '<url>';
        $xml .= '<loc>' . route('blog.show', $b->slug) . '</loc>';
        $xml .= '<lastmod>' . ($b->updated_at ? $b->updated_at->toAtomString() : now()->toAtomString()) . '</lastmod>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.7</priority>';
        $xml .= '</url>';
    }

    $xml .= '</urlset>';
    return response($xml, 200)->header('Content-Type', 'application/xml');
});

/*
|--------------------------------------------------------------------------
| Public Frontend Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', function () {
    return view('index');
})->name('home');

// Main Pages
Route::get('/about', function () {
    return view('about.index');
})->name('about');

Route::get('/solutions', function () {
    return view('solutions.index');
})->name('solutions');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

Route::post('/contact', [ContactController::class, 'submitContact'])->name('contact.submit');

Route::get('/start-a-project', function () {
    return view('start-a-project.index');
})->name('start-a-project');

Route::post('/start-a-project', [ContactController::class, 'submitProject'])->name('project.submit');

Route::get('/privacy-policy', function () {
    return view('privacy-policy.index');
})->name('privacy-policy');

Route::get('/terms-of-service', function () {
    return view('terms-of-service.index');
})->name('terms-of-service');

// Services Routes
Route::prefix('services')->group(function () {
    Route::get('/', function () {
        return view('services.index');
    })->name('services');

    Route::get('/custom-software-development', function () {
        return view('services.custom-software-development.index');
    })->name('services.custom-software');

    Route::get('/web-application-development', function () {
        return view('services.web-application-development.index');
    })->name('services.web-application');

    Route::get('/website-design-development', function () {
        return view('services.website-design-development.index');
    })->name('services.website-design');

    Route::get('/mobile-app-development', function () {
        return view('services.mobile-app-development.index');
    })->name('services.mobile-app');

    Route::get('/crm-erp-development', function () {
        return view('services.crm-erp-development.index');
    })->name('services.crm-erp');

    Route::get('/ai-integration-automation', function () {
        return view('services.ai-integration-automation.index');
    })->name('services.ai-integration');

    Route::get('/saas-product-development', function () {
        return view('services.saas-product-development.index');
    })->name('services.saas-product');

    Route::get('/api-development-integrations', function () {
        return view('services.api-development-integrations.index');
    })->name('services.api-development');

    Route::get('/application-modernization', function () {
        return view('services.application-modernization.index');
    })->name('services.application-modernization');

    Route::get('/website-maintenance-support', function () {
        return view('services.website-maintenance-support.index');
    })->name('services.website-maintenance');
});

// Industries Routes
Route::prefix('industries')->group(function () {
    Route::get('/', function () {
        return view('industries.index');
    })->name('industries');

    Route::get('/{slug}', function ($slug) {
        $viewName = 'industries.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        abort(404);
    })->name('industries.show');
});

// Portfolio Routes
Route::prefix('portfolio')->group(function () {
    Route::get('/', function () {
        return view('portfolio.index');
    })->name('portfolio');

    Route::get('/{slug}', function ($slug) {
        $viewName = 'portfolio.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        abort(404);
    })->name('portfolio.show');
});

// Dynamic Blog Routes
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
    Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');
});

/*
|--------------------------------------------------------------------------
| Admin Portal Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [AdminDashboardController::class, 'index']);

    // Contact Leads
    Route::get('/contacts', [AdminDashboardController::class, 'contacts'])->name('admin.contacts');
    Route::post('/contacts/{id}/status', [AdminDashboardController::class, 'updateContactStatus'])->name('admin.contacts.status');
    Route::delete('/contacts/{id}', [AdminDashboardController::class, 'deleteContact'])->name('admin.contacts.delete');

    // Project Requests
    Route::get('/projects', [AdminDashboardController::class, 'projects'])->name('admin.projects');
    Route::post('/projects/{id}/status', [AdminDashboardController::class, 'updateProjectStatus'])->name('admin.projects.status');
    Route::delete('/projects/{id}', [AdminDashboardController::class, 'deleteProject'])->name('admin.projects.delete');

    // Visitor Analytics
    Route::get('/analytics', [AdminDashboardController::class, 'analytics'])->name('admin.analytics');

    // Blog Management
    Route::get('/blogs', [AdminBlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('/blogs/create', [AdminBlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('/blogs', [AdminBlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('/blogs/{id}/edit', [AdminBlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('/blogs/{id}', [AdminBlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/blogs/{id}', [AdminBlogController::class, 'destroy'])->name('admin.blogs.destroy');
});
