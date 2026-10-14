@extends('admin.layout')

@section('title', 'Edit Blog Article')

@section('content')

<div class="card" style="max-width: 900px; margin: 0 auto;">
  <div class="card-header">
    <h3 class="card-title">Edit Article: {{ $blog->title }}</h3>
    <a href="{{ route('admin.blogs.index') }}" class="btn badge-tag btn-sm">← Back to Articles</a>
  </div>

  @if($errors->any())
    <div class="alert-danger">
      <ul style="padding-left: 20px;">
        @foreach($errors->all() as $err)
          <li>{{ $err }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ route('admin.blogs.update', $blog->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label class="form-label" for="title">Article Title <span style="color: #ef4444;">*</span></label>
      <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
      <div class="form-group">
        <label class="form-label" for="slug">URL Slug <span style="color: #ef4444;">*</span></label>
        <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug', $blog->slug) }}" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="category">Category <span style="color: #ef4444;">*</span></label>
        <select id="category" name="category" class="form-control" required>
          <option value="Web" {{ old('category', $blog->category) === 'Web' ? 'selected' : '' }}>Web</option>
          <option value="Guides" {{ old('category', $blog->category) === 'Guides' ? 'selected' : '' }}>Guides</option>
          <option value="AI & Automation" {{ old('category', $blog->category) === 'AI & Automation' ? 'selected' : '' }}>AI & Automation</option>
          <option value="Modernization" {{ old('category', $blog->category) === 'Modernization' ? 'selected' : '' }}>Modernization</option>
          <option value="Strategy" {{ old('category', $blog->category) === 'Strategy' ? 'selected' : '' }}>Strategy</option>
          <option value="Case Studies" {{ old('category', $blog->category) === 'Case Studies' ? 'selected' : '' }}>Case Studies</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="excerpt">Excerpt / Summary <span style="color: #ef4444;">*</span></label>
      <textarea id="excerpt" name="excerpt" class="form-control" style="min-height: 80px;" required>{{ old('excerpt', $blog->excerpt) }}</textarea>
    </div>

    <div class="form-group">
      <label class="form-label" for="content">Article Content (HTML supported) <span style="color: #ef4444;">*</span></label>
      <textarea id="content" name="content" class="form-control" style="min-height: 300px; font-family: monospace;" required>{{ old('content', $blog->content) }}</textarea>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
      <div class="form-group">
        <label class="form-label" for="image_file">Change Featured Image <span style="font-size: 12px; color: var(--text-muted);">(Optional)</span></label>
        @if($blog->image)
          <div style="margin-bottom: 8px;">
            <img src="{{ asset($blog->image) }}" alt="Current Image" style="height: 50px; border-radius: 6px; border: 1px solid #e2e8f0;">
          </div>
        @endif
        <input type="file" id="image_file" name="image_file" class="form-control" accept="image/*">
      </div>

      <div class="form-group">
        <label class="form-label" for="read_time">Estimated Read Time</label>
        <input type="text" id="read_time" name="read_time" class="form-control" value="{{ old('read_time', $blog->read_time) }}">
      </div>
    </div>

    <div style="background: #f8fafc; border: 1px solid var(--card-border); border-radius: 10px; padding: 20px; margin: 24px 0;">
      <h4 style="font-size: 15px; font-weight: 700; color: #4338ca; margin-bottom: 14px;"><i class="fa-solid fa-magnifying-glass"></i> Search Engine & AEO Optimization</h4>
      
      <div class="form-group">
        <label class="form-label" for="meta_title">Meta Title</label>
        <input type="text" id="meta_title" name="meta_title" class="form-control" value="{{ old('meta_title', $blog->meta_title) }}">
      </div>

      <div class="form-group" style="margin-bottom: 0;">
        <label class="form-label" for="meta_description">Meta Description</label>
        <input type="text" id="meta_description" name="meta_description" class="form-control" value="{{ old('meta_description', $blog->meta_description) }}">
      </div>
    </div>

    <div class="form-group" style="display: flex; align-items: center; gap: 10px;">
      <input type="checkbox" id="is_published" name="is_published" value="1" {{ old('is_published', $blog->is_published) ? 'checked' : '' }} style="width: 18px; height: 18px; cursor: pointer;">
      <label for="is_published" style="font-size: 14px; font-weight: 600; color: #0f172a; cursor: pointer;">Article is Published</label>
    </div>

    <div style="display: flex; gap: 12px; margin-top: 24px;">
      <button type="submit" class="btn btn-primary">
        <i class="fa-solid fa-save"></i> Save Changes
      </button>
      <a href="{{ route('admin.blogs.index') }}" class="btn badge-tag">Cancel</a>
    </div>
  </form>
</div>

@endsection
