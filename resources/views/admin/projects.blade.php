@extends('admin.layout')

@section('title', 'Project Requests')

@section('content')

<div class="card">
  <div class="card-header">
    <div>
      <h3 class="card-title">All Project Requests</h3>
      <p style="font-size: 13px; color: var(--text-muted); margin-top: 4px;">Detailed client briefs from the /start-a-project multi-step wizard</p>
    </div>
    <div style="display: flex; gap: 8px;">
      <a href="{{ route('admin.projects') }}" class="btn {{ !$status ? 'btn-primary' : 'badge-tag' }} btn-sm">All</a>
      <a href="{{ route('admin.projects', ['status' => 'unread']) }}" class="btn {{ $status === 'unread' ? 'btn-primary' : 'badge-tag' }} btn-sm">Unread</a>
      <a href="{{ route('admin.projects', ['status' => 'contacted']) }}" class="btn {{ $status === 'contacted' ? 'btn-primary' : 'badge-tag' }} btn-sm">Contacted</a>
    </div>
  </div>

  @if($projects->isEmpty())
    <div style="text-align: center; padding: 40px; color: var(--text-muted);">
      <i class="fa-solid fa-folder-open" style="font-size: 36px; margin-bottom: 12px; opacity: 0.5;"></i>
      <p>No project requests found.</p>
    </div>
  @else
    <div style="overflow-x: auto;">
      <table>
        <thead>
          <tr>
            <th>Date</th>
            <th>Client Info</th>
            <th>Service</th>
            <th>Budget & Timeline</th>
            <th>Project Brief</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($projects as $p)
            <tr>
              <td>
                <span style="font-size: 12px; font-weight: 600; color: #0f172a;">{{ $p->created_at->format('M d, Y') }}</span><br>
                <span style="font-size: 11px; color: var(--text-muted);">{{ $p->created_at->format('h:i A') }}</span>
              </td>
              <td>
                <strong style="color: #0f172a;">{{ $p->full_name }}</strong><br>
                <a href="mailto:{{ $p->email }}" style="color: #635bff; text-decoration: none; font-size: 12px; font-weight: 500;">{{ $p->email }}</a><br>
                <span style="font-size: 12px; color: var(--text-muted);">{{ $p->company ? $p->company . ' • ' : '' }}{{ $p->phone ?: 'No phone' }}</span>
              </td>
              <td>
                <span class="badge badge-tag">{{ ucwords(str_replace('-', ' ', $p->service)) }}</span>
              </td>
              <td>
                <strong style="color: #059669; font-size: 13px;">{{ $p->budget ?: 'To discuss' }}</strong><br>
                <span style="font-size: 12px; color: var(--text-muted);"><i class="fa-regular fa-clock"></i> {{ $p->timeline ?: 'Flexible' }}</span>
              </td>
              <td style="max-width: 320px;">
                <p style="font-size: 13px; color: #334155; line-height: 1.5; word-break: break-word;">{{ $p->message }}</p>
              </td>
              <td>
                <form action="{{ route('admin.projects.status', $p->id) }}" method="POST">
                  @csrf
                  <select name="status" onchange="this.form.submit()" style="background: #ffffff; border: 1px solid #cbd5e1; color: #0f172a; padding: 6px 10px; border-radius: 6px; font-size: 12px; font-weight: 500; cursor: pointer;">
                    <option value="unread" {{ $p->status === 'unread' ? 'selected' : '' }}>Unread</option>
                    <option value="in_review" {{ $p->status === 'in_review' ? 'selected' : '' }}>In Review</option>
                    <option value="contacted" {{ $p->status === 'contacted' ? 'selected' : '' }}>Contacted</option>
                    <option value="completed" {{ $p->status === 'completed' ? 'selected' : '' }}>Completed</option>
                  </select>
                </form>
              </td>
              <td>
                <div style="display: flex; gap: 8px;">
                  <a href="mailto:{{ $p->email }}?subject=Your%20Project%20Enquiry%20to%20Nimad%20Tech" class="btn btn-primary btn-sm" title="Reply by Email">
                    <i class="fa-solid fa-reply"></i>
                  </a>
                  <form action="{{ route('admin.projects.delete', $p->id) }}" method="POST" onsubmit="return confirm('Delete this project request?');">
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

    @if(method_exists($projects, 'links'))
      <div style="margin-top: 20px;">
        {{ $projects->links() }}
      </div>
    @endif
  @endif
</div>

@endsection
