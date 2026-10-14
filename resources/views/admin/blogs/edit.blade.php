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

    <!-- Featured Image Section with Live Preview & Remove option -->
    <div style="background: #f8fafc; border: 1px solid var(--card-border); border-radius: 10px; padding: 20px; margin: 20px 0;">
      <h4 style="font-size: 15px; font-weight: 700; color: #4338ca; margin-bottom: 14px;">
        <i class="fa-regular fa-image"></i> Featured Article Image
      </h4>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: start;">
        <div>
          <div class="form-group">
            <label class="form-label" for="image_file">Upload New Image File</label>
            <input type="file" id="image_file" name="image_file" class="form-control" accept="image/*" onchange="previewImage(this)">
            <p style="font-size: 12px; color: var(--text-muted); margin-top: 4px;">Upload to replace current image (Max 5MB)</p>
          </div>

          <div class="form-group">
            <label class="form-label" for="image_url">Or Image Path / URL</label>
            <input type="text" id="image_url" name="image_url" class="form-control" value="{{ old('image_url', $blog->image) }}" onchange="previewUrl(this.value)">
          </div>

          @if($blog->image)
            <div style="display: flex; align-items: center; gap: 8px; margin-top: 10px;">
              <input type="checkbox" id="remove_image" name="remove_image" value="1" style="width: 16px; height: 16px;">
              <label for="remove_image" style="font-size: 13px; color: #dc2626; cursor: pointer; font-weight: 600;">Remove current image</label>
            </div>
          @endif
        </div>

        <div>
          <label class="form-label">Current / Preview Image</label>
          <div id="preview-box" style="width: 100%; height: 160px; background: #ffffff; border: 1px solid #cbd5e1; border-radius: 8px; display: flex; align-items: center; justify-content: center; overflow: hidden; position: relative;">
            @if($blog->image)
              <img id="image-preview" src="{{ $blog->image_url }}" alt="Preview" style="width: 100%; height: 100%; object-fit: cover;">
              <span id="preview-placeholder" style="display: none; color: #94a3b8; font-size: 13px; text-align: center;">No image</span>
            @else
              <img id="image-preview" src="" alt="Preview" style="display: none; width: 100%; height: 100%; object-fit: cover;">
              <span id="preview-placeholder" style="color: #94a3b8; font-size: 13px; text-align: center;">
                <i class="fa-solid fa-cloud-arrow-up" style="font-size: 24px; display: block; margin-bottom: 6px;"></i>
                No image set. Upload to set one.
              </span>
            @endif
          </div>
        </div>
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
        <label class="form-label" for="author">Author Name</label>
        <input type="text" id="author" name="author" class="form-control" value="{{ old('author', $blog->author) }}">
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

@push('scripts')
<script>
  function previewImage(input) {
    const preview = document.getElementById('image-preview');
    const placeholder = document.getElementById('preview-placeholder');
    if (input.files && input.files[0]) {
      const reader = new FileReader();
      reader.onload = function(e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
        if (placeholder) placeholder.style.display = 'none';
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  function previewUrl(url) {
    if (!url) return;
    const preview = document.getElementById('image-preview');
    const placeholder = document.getElementById('preview-placeholder');
    preview.src = url.startsWith('http') || url.startsWith('/') ? url : '/' + url;
    preview.style.display = 'block';
    if (placeholder) placeholder.style.display = 'none';
  }
</script>
@endpush
