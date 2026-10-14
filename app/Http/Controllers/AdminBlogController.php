<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class AdminBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blogs,slug',
            'category' => 'required|string|max:100',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg,gif|max:5120',
            'image_url' => 'nullable|string|max:500',
            'author' => 'nullable|string|max:100',
            'read_time' => 'nullable|string|max:50',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'is_published' => 'nullable|boolean',
        ]);

        $slug = $validated['slug'] ? Str::slug($validated['slug']) : Blog::generateSlug($validated['title']);

        $imagePath = $validated['image_url'] ?? null;

        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $uploadDir = public_path('uploads/blogs');
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $cleanName = preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
            $fileName = time() . '_' . $cleanName;
            $file->move($uploadDir, $fileName);
            $imagePath = 'uploads/blogs/' . $fileName;
        }

        Blog::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'category' => $validated['category'],
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'],
            'image' => $imagePath,
            'author' => $validated['author'] ?: 'Nimad Tech Team',
            'read_time' => $validated['read_time'] ?: '3 min read',
            'meta_title' => $validated['meta_title'] ?: $validated['title'],
            'meta_description' => $validated['meta_description'] ?: $validated['excerpt'],
            'is_published' => $request->has('is_published'),
            'published_at' => $request->has('is_published') ? now() : null,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog article published successfully with image!');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $id,
            'category' => 'required|string|max:100',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg,gif|max:5120',
            'image_url' => 'nullable|string|max:500',
            'remove_image' => 'nullable|boolean',
            'author' => 'nullable|string|max:100',
            'read_time' => 'nullable|string|max:50',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'is_published' => 'nullable|boolean',
        ]);

        $imagePath = $blog->image;

        // Check if user requested to remove image
        if ($request->has('remove_image') && $request->boolean('remove_image')) {
            if ($blog->image && file_exists(public_path($blog->image)) && str_starts_with($blog->image, 'uploads/blogs/')) {
                @unlink(public_path($blog->image));
            }
            $imagePath = null;
        }

        // If new image file uploaded
        if ($request->hasFile('image_file')) {
            // Delete old uploaded file if replacing
            if ($blog->image && file_exists(public_path($blog->image)) && str_starts_with($blog->image, 'uploads/blogs/')) {
                @unlink(public_path($blog->image));
            }
            $file = $request->file('image_file');
            $uploadDir = public_path('uploads/blogs');
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $cleanName = preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
            $fileName = time() . '_' . $cleanName;
            $file->move($uploadDir, $fileName);
            $imagePath = 'uploads/blogs/' . $fileName;
        } elseif (!empty($validated['image_url'])) {
            $imagePath = $validated['image_url'];
        }

        $isPublished = $request->has('is_published');
        $publishedAt = $blog->published_at;
        if ($isPublished && !$blog->is_published) {
            $publishedAt = now();
        }

        $blog->update([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['slug']),
            'category' => $validated['category'],
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'],
            'image' => $imagePath,
            'author' => $validated['author'] ?: 'Nimad Tech Team',
            'read_time' => $validated['read_time'] ?: '3 min read',
            'meta_title' => $validated['meta_title'] ?: $validated['title'],
            'meta_description' => $validated['meta_description'] ?: $validated['excerpt'],
            'is_published' => $isPublished,
            'published_at' => $publishedAt,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog article updated successfully!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image && file_exists(public_path($blog->image)) && str_starts_with($blog->image, 'uploads/blogs/')) {
            @unlink(public_path($blog->image));
        }
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog article deleted successfully.');
    }
}
