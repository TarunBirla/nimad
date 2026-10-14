<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
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

Route::post('/contact', function (Request $request) {
    // In-memory or log contact submission
    return response()->json([
        'ok' => true,
        'message' => 'Thank you for reaching out. We will get back to you shortly.'
    ]);
})->name('contact.submit');

Route::get('/start-a-project', function () {
    return view('start-a-project.index');
})->name('start-a-project');

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

// Blog Routes
Route::prefix('blog')->group(function () {
    Route::get('/', function () {
        return view('blog.index');
    })->name('blog');

    Route::get('/{slug}', function ($slug) {
        $viewName = 'blog.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        abort(404);
    })->name('blog.show');
});
