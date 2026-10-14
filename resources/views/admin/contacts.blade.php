@extends('admin.layout')

@section('title', 'Contact Enquiries')

@section('content')

<div class="card">
  <div class="card-header">
    <div>
      <h3 class="card-title">All Contact Leads</h3>
      <p style="font-size: 13px; color: var(--text-muted); margin-top: 4px;">Leads submitted through the /contact page form</p>
    </div>
    <div style="display: flex; gap: 8px;">
      <a href="{{ route('admin.contacts') }}" class="btn {{ !$status ? 'btn-primary' : 'badge-tag' }} btn-sm">All</a>
      <a href="{{ route('admin.contacts', ['status' => 'unread']) }}" class="btn {{ $status === 'unread' ? 'btn-primary' : 'badge-tag' }} btn-sm">Unread</a>
      <a href="{{ route('admin.contacts', ['status' => 'read']) }}" class="btn {{ $status === 'read' ? 'btn-primary' : 'badge-tag' }} btn-sm">Read</a>
    </div>
  </div>

  @if($contacts->isEmpty())
    <div style="text-align: center; padding: 40px; color: var(--text-muted);">
      <i class="fa-solid fa-inbox" style="font-size: 36px; margin-bottom: 12px; opacity: 0.5;"></i>
      <p>No contact enquiries found.</p>
    </div>
  @else
    <div style="overflow-x: auto;">
      <table>
        <thead>
          <tr>
            <th>Date</th>
            <th>Name & Email</th>
            <th>Company / Phone</th>
            <th>Service</th>
            <th>Message</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($contacts as $c)
            <tr>
              <td>
                <span style="font-size: 12px; font-weight: 600; color: #0f172a;">{{ $c->created_at->format('M d, Y') }}</span><br>
                <span style="font-size: 11px; color: var(--text-muted);">{{ $c->created_at->format('h:i A') }}</span>
              </td>
              <td>
                <strong style="color: #0f172a;">{{ $c->full_name }}</strong><br>
                <a href="mailto:{{ $c->email }}" style="color: #635bff; text-decoration: none; font-size: 12px; font-weight: 500;">{{ $c->email }}</a>
              </td>
              <td>
                <span style="color: #334155; font-weight: 500;">{{ $c->company ?: '—' }}</span><br>
                <span style="font-size: 12px; color: var(--text-muted);">{{ $c->phone ?: 'No phone' }}</span>
              </td>
              <td>
                <span class="badge badge-tag">{{ ucwords(str_replace('-', ' ', $c->service)) }}</span>
                @if($c->budget)
                  <br><span style="font-size: 12px; font-weight: 600; color: #059669;">{{ $c->budget }}</span>
                @endif
              </td>
              <td style="max-width: 280px;">
                <p style="font-size: 13px; color: #334155; line-height: 1.5; word-break: break-word;">{{ $c->message }}</p>
              </td>
              <td>
                <form action="{{ route('admin.contacts.status', $c->id) }}" method="POST">
                  @csrf
                  <select name="status" onchange="this.form.submit()" style="background: #ffffff; border: 1px solid #cbd5e1; color: #0f172a; padding: 6px 10px; border-radius: 6px; font-size: 12px; font-weight: 500; cursor: pointer;">
                    <option value="unread" {{ $c->status === 'unread' ? 'selected' : '' }}>Unread</option>
                    <option value="read" {{ $c->status === 'read' ? 'selected' : '' }}>Read</option>
                    <option value="replied" {{ $c->status === 'replied' ? 'selected' : '' }}>Replied</option>
                  </select>
                </form>
              </td>
              <td>
                <div style="display: flex; gap: 8px;">
                  <a href="mailto:{{ $c->email }}?subject=Re:%20Enquiry%20to%20Nimad%20Tech" class="btn btn-primary btn-sm" title="Reply by Email">
                    <i class="fa-solid fa-reply"></i>
                  </a>
                  <form action="{{ route('admin.contacts.delete', $c->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this lead?');">
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

    @if(method_exists($contacts, 'links'))
      <div style="margin-top: 20px;">
        {{ $contacts->links() }}
      </div>
    @endif
  @endif
</div>

@endsection
