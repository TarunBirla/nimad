@extends('admin.layout')

@section('title', 'Manage Blogs & Articles')

@section('content')

<div class="card">
  <div class="card-header">
    <div>
      <h3 class="card-title">All Blog Articles</h3>
      <p style="font-size: 13px; color: var(--text-muted); margin-top: 4px;">Create, edit, and publish dynamic articles shown on /blog</p>
    </div>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
      <i class="fa-solid fa-plus"></i> Add New Blog
    </a>
  </div>

  @if($blogs->isEmpty())
    <div style="text-align: center; padding: 40px; color: var(--text-muted);">
      <i class="fa-solid fa-newspaper" style="font-size: 36px; margin-bottom: 12px; opacity: 0.5;"></i>
      <p>No blog articles found. Click "Add New Blog" to publish your first post!</p>
    </div>
  @else
    <div style="overflow-x: auto;">
      <table>
        <thead>
          <tr>
            <th>Article Title</th>
            <th>Category</th>
            <th>Views</th>
            <th>Status</th>
            <th>Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($blogs as $b)
            <tr>
              <td>
                <strong style="color: #fff; font-size: 14px;">{{ $b->title }}</strong><br>
                <a href="{{ route('blog.show', $b->slug) }}" target="_blank" style="color: #8f89ff; font-size: 12px; text-decoration: none;">
                  /blog/{{ $b->slug }} <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 10px;"></i>
                </a>
              </td>
              <td><span class="badge badge-tag">{{ $b->category }}</span></td>
              <td><span style="color: #34d399; font-weight: 600;"><i class="fa-solid fa-eye"></i> {{ $b->views_count }}</span></td>
              <td>
                <span class="badge {{ $b->is_published ? 'badge-read' : 'badge-unread' }}">
                  {{ $b->is_published ? 'Published' : 'Draft' }}
                </span>
              </td>
              <td>
                <span style="font-size: 12px; color: var(--text-muted);">
                  {{ $b->published_at ? $b->published_at->format('M d, Y') : $b->created_at->format('M d, Y') }}
                </span>
              </td>
              <td>
                <div style="display: flex; gap: 8px;">
                  <a href="{{ route('admin.blogs.edit', $b->id) }}" class="btn btn-primary btn-sm" title="Edit">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </a>
                  <form action="{{ route('admin.blogs.destroy', $b->id) }}" method="POST" onsubmit="return confirm('Delete this blog permanently?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                      <i class="fa-solid fa-trash-can"></i>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    @if(method_exists($blogs, 'links'))
      <div style="margin-top: 20px;">
        {{ $blogs->links() }}
      </div>
    @endif
  @endif
</div>

@endsection
