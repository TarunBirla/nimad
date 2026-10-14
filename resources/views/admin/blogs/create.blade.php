@extends('admin.layout')

@section('title', 'Add New Blog Article')

@section('content')

<div class="card" style="max-width: 900px; margin: 0 auto;">
  <div class="card-header">
    <h3 class="card-title">Write New Blog Article</h3>
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

  <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label class="form-label" for="title">Article Title <span style="color: #ef4444;">*</span></label>
      <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required placeholder="e.g. Modernizing Legacy PHP Applications">
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
      <div class="form-group">
        <label class="form-label" for="slug">URL Slug <span style="font-size: 12px; color: var(--text-muted);">(Leave empty to auto-generate)</span></label>
        <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug') }}" placeholder="e.g. modernizing-legacy-php-applications">
      </div>

      <div class="form-group">
        <label class="form-label" for="category">Category <span style="color: #ef4444;">*</span></label>
        <select id="category" name="category" class="form-control" required>
          <option value="Web" {{ old('category') === 'Web' ? 'selected' : '' }}>Web</option>
          <option value="Guides" {{ old('category') === 'Guides' ? 'selected' : '' }}>Guides</option>
          <option value="AI & Automation" {{ old('category') === 'AI & Automation' ? 'selected' : '' }}>AI & Automation</option>
          <option value="Modernization" {{ old('category') === 'Modernization' ? 'selected' : '' }}>Modernization</option>
          <option value="Strategy" {{ old('category') === 'Strategy' ? 'selected' : '' }}>Strategy</option>
          <option value="Case Studies" {{ old('category') === 'Case Studies' ? 'selected' : '' }}>Case Studies</option>
        </select>
      </div>
    </div>

    <!-- Featured Image Section with Live Preview -->
    <div style="background: #f8fafc; border: 1px solid var(--card-border); border-radius: 10px; padding: 20px; margin: 20px 0;">
      <h4 style="font-size: 15px; font-weight: 700; color: #4338ca; margin-bottom: 14px;">
        <i class="fa-regular fa-image"></i> Featured Article Image
      </h4>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: start;">
        <div>
          <div class="form-group">
            <label class="form-label" for="image_file">Upload Image File</label>
            <input type="file" id="image_file" name="image_file" class="form-control" accept="image/*" onchange="previewImage(this)">
            <p style="font-size: 12px; color: var(--text-muted); margin-top: 4px;">Supports JPG, PNG, WebP, SVG (Max 5MB)</p>
          </div>

          <div class="form-group" style="margin-bottom: 0;">
            <label class="form-label" for="image_url">Or Image Path / URL <span style="font-size: 12px; color: var(--text-muted);">(Optional)</span></label>
            <input type="text" id="image_url" name="image_url" class="form-control" value="{{ old('image_url') }}" placeholder="assets/img/projects/example.svg" onchange="previewUrl(this.value)">
          </div>
        </div>

        <div>
          <label class="form-label">Image Preview</label>
          <div id="preview-box" style="width: 100%; height: 140px; background: #ffffff; border: 2px dashed #cbd5e1; border-radius: 8px; display: flex; align-items: center; justify-content: center; overflow: hidden; position: relative;">
            <img id="image-preview" src="" alt="Preview" style="display: none; width: 100%; height: 100%; object-fit: cover;">
            <span id="preview-placeholder" style="color: #94a3b8; font-size: 13px; text-align: center;">
              <i class="fa-solid fa-cloud-arrow-up" style="font-size: 24px; display: block; margin-bottom: 6px;"></i>
              Select an image to preview
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="excerpt">Excerpt / Summary <span style="color: #ef4444;">*</span></label>
      <textarea id="excerpt" name="excerpt" class="form-control" style="min-height: 80px;" required placeholder="Short 1-2 sentence preview for search results and social cards">{{ old('excerpt') }}</textarea>
    </div>

    <div class="form-group">
      <label class="form-label" for="content">Article Content (HTML supported) <span style="color: #ef4444;">*</span></label>
      <textarea id="content" name="content" class="form-control" style="min-height: 300px; font-family: monospace;" required placeholder="<p>Write your article content here...</p>
<h2>Subheading</h2>
<p>More details...</p>">{{ old('content') }}</textarea>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
      <div class="form-group">
        <label class="form-label" for="author">Author Name</label>
        <input type="text" id="author" name="author" class="form-control" value="{{ old('author', 'Nimad Tech Team') }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="read_time">Estimated Read Time</label>
        <input type="text" id="read_time" name="read_time" class="form-control" value="{{ old('read_time', '3 min read') }}">
      </div>
    </div>

    <div style="background: #f8fafc; border: 1px solid var(--card-border); border-radius: 10px; padding: 20px; margin: 24px 0;">
      <h4 style="font-size: 15px; font-weight: 700; color: #4338ca; margin-bottom: 14px;"><i class="fa-solid fa-magnifying-glass"></i> Search Engine & AEO Optimization</h4>
      
      <div class="form-group">
        <label class="form-label" for="meta_title">Meta Title</label>
        <input type="text" id="meta_title" name="meta_title" class="form-control" value="{{ old('meta_title') }}" placeholder="SEO title for search engines">
      </div>

      <div class="form-group" style="margin-bottom: 0;">
        <label class="form-label" for="meta_description">Meta Description</label>
        <input type="text" id="meta_description" name="meta_description" class="form-control" value="{{ old('meta_description') }}" placeholder="SEO snippet for Google, Bing, and AI search engines">
      </div>
    </div>

    <div class="form-group" style="display: flex; align-items: center; gap: 10px;">
      <input type="checkbox" id="is_published" name="is_published" value="1" {{ old('is_published', true) ? 'checked' : '' }} style="width: 18px; height: 18px; cursor: pointer;">
      <label for="is_published" style="font-size: 14px; font-weight: 600; color: #0f172a; cursor: pointer;">Publish immediately on /blog</label>
    </div>

    <div style="display: flex; gap: 12px; margin-top: 24px;">
      <button type="submit" class="btn btn-primary">
        <i class="fa-solid fa-cloud-arrow-up"></i> Save & Publish Article
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
        placeholder.style.display = 'none';
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
    placeholder.style.display = 'none';
  }
</script>
@endpush
