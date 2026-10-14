<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SetupDatabaseController extends Controller
{
    public function setup(Request $request)
    {
        $dbConnected = false;
        $dbError = null;
        $output = '';

        try {
            DB::connection()->getPdo();
            $dbConnected = true;
        } catch (\Throwable $e) {
            $dbError = $e->getMessage();
        }

        if (!$dbConnected) {
            return response()->view('setup.database', [
                'status' => 'error',
                'message' => 'Cannot connect to database. Please check DB_DATABASE, DB_USERNAME, and DB_PASSWORD in your .env file.',
                'error_detail' => $dbError,
                'tables' => [],
                'artisan_output' => ''
            ], 500);
        }

        try {
            // Run Migrations
            Artisan::call('migrate', ['--force' => true]);
            $output .= Artisan::output();

            // Run Seeders
            Artisan::call('db:seed', ['--force' => true]);
            $output .= "\n" . Artisan::output();

            // Clear configuration & route cache
            Artisan::call('optimize:clear');
            $output .= "\n" . Artisan::output();

            $tables = [
                'users' => Schema::hasTable('users'),
                'contacts' => Schema::hasTable('contacts'),
                'project_requests' => Schema::hasTable('project_requests'),
                'blogs' => Schema::hasTable('blogs'),
                'visitors' => Schema::hasTable('visitors'),
                'visitor_pageviews' => Schema::hasTable('visitor_pageviews'),
            ];

            return response()->view('setup.database', [
                'status' => 'success',
                'message' => 'All database tables and initial records have been created successfully!',
                'error_detail' => null,
                'tables' => $tables,
                'artisan_output' => $output
            ]);
        } catch (\Throwable $e) {
            return response()->view('setup.database', [
                'status' => 'error',
                'message' => 'Migration or seeding failed.',
                'error_detail' => $e->getMessage(),
                'tables' => [],
                'artisan_output' => $output
            ], 500);
        }
    }
}
