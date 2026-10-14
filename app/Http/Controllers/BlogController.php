<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Schema;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('cat');
        $search = $request->query('q');

        $blogs = collect();
        if (Schema::hasTable('blogs')) {
            $query = Blog::where('is_published', true)->orderBy('published_at', 'desc');

            if ($category) {
                $query->where('category', $category);
            }

            if ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%{$search}%")
                      ->orWhere('excerpt', 'like', "%{$search}%")
                      ->orWhere('content', 'like', "%{$search}%");
                });
            }

            $blogs = $query->get();
        }

        return view('blog.index', compact('blogs', 'category', 'search'));
    }

    public function show(string $slug)
    {
        $blog = null;
        if (Schema::hasTable('blogs')) {
            $blog = Blog::where('slug', $slug)->first();
            if ($blog) {
                $blog->increment('views_count');
                $related = Blog::where('is_published', true)
                               ->where('id', '!=', $blog->id)
                               ->where('category', $blog->category)
                               ->take(3)
                               ->get();
                if ($related->isEmpty()) {
                    $related = Blog::where('is_published', true)
                                   ->where('id', '!=', $blog->id)
                                   ->take(3)
                                   ->get();
                }

                return view('blog.show', compact('blog', 'related'));
            }
        }

        // Fallback to static view if exists
        $viewName = 'blog.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }

        abort(404);
    }
}
