<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ProjectRequest;
use App\Mail\AdminContactNotification;
use App\Mail\UserContactConfirmation;
use App\Mail\AdminProjectNotification;
use App\Mail\UserProjectConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submitContact(Request $request)
    {
        // Honeypot check for bots
        if (!empty($request->input('website'))) {
            return response()->json(['ok' => true, 'message' => 'Thank you for your enquiry.']);
        }

        $validated = $request->validate([
            'full_name' => 'required|string|max:200',
            'email' => 'required|email|max:200',
            'company' => 'nullable|string|max:200',
            'phone' => 'nullable|string|max:200',
            'service' => 'required|string|max:200',
            'budget' => 'nullable|string|max:200',
            'timeline' => 'nullable|string|max:200',
            'message' => 'required|string|max:5000',
        ]);

        $validated['ip_address'] = $request->ip();
        $validated['user_agent'] = substr($request->userAgent() ?? '', 0, 500);

        try {
            $contact = Contact::create($validated);
        } catch (\Throwable $e) {
            Log::error('Contact save failed: ' . $e->getMessage());
            $contact = new Contact($validated);
        }

        // Send Emails (Admin notification + User confirmation)
        $adminEmail = config('mail.admin_email', env('ADMIN_EMAIL', 'info@nimadtech.in'));
        try {
            Mail::to($adminEmail)->send(new AdminContactNotification($contact));
        } catch (\Throwable $e) {
            Log::error('Admin contact email failed: ' . $e->getMessage());
        }

        try {
            Mail::to($contact->email)->send(new UserContactConfirmation($contact));
        } catch (\Throwable $e) {
            Log::error('User contact email confirmation failed: ' . $e->getMessage());
        }

        if ($request->wantsJson() || $request->ajax() || $request->isJson()) {
            return response()->json([
                'ok' => true,
                'message' => 'Thank you! Your message has been sent successfully. We will be in touch shortly.'
            ]);
        }

        return back()->with('success', 'Thank you! Your message has been sent successfully. We will be in touch shortly.');
    }

    public function submitProject(Request $request)
    {
        // Honeypot check for bots
        if (!empty($request->input('website'))) {
            return response()->json(['ok' => true, 'message' => 'Thank you for your enquiry.']);
        }

        $validated = $request->validate([
            'full_name' => 'required|string|max:200',
            'email' => 'required|email|max:200',
            'company' => 'nullable|string|max:200',
            'phone' => 'nullable|string|max:200',
            'service' => 'required|string|max:200',
            'message' => 'required|string|max:5000',
            'budget' => 'nullable|string|max:200',
            'timeline' => 'nullable|string|max:200',
        ]);

        $validated['ip_address'] = $request->ip();
        $validated['user_agent'] = substr($request->userAgent() ?? '', 0, 500);

        try {
            $project = ProjectRequest::create($validated);
        } catch (\Throwable $e) {
            Log::error('Project request save failed: ' . $e->getMessage());
            $project = new ProjectRequest($validated);
        }

        // Send Emails (Admin notification + User confirmation)
        $adminEmail = config('mail.admin_email', env('ADMIN_EMAIL', 'info@nimadtech.in'));
        try {
            Mail::to($adminEmail)->send(new AdminProjectNotification($project));
        } catch (\Throwable $e) {
            Log::error('Admin project request email failed: ' . $e->getMessage());
        }

        try {
            Mail::to($project->email)->send(new UserProjectConfirmation($project));
        } catch (\Throwable $e) {
            Log::error('User project request email confirmation failed: ' . $e->getMessage());
        }

        if ($request->wantsJson() || $request->ajax() || $request->isJson()) {
            return response()->json([
                'ok' => true,
                'message' => 'Thank you! Your project brief has been submitted successfully. Our team will review it and contact you.'
            ]);
        }

        return back()->with('success', 'Thank you! Your project brief has been submitted successfully. Our team will review it and contact you.');
    }
}
