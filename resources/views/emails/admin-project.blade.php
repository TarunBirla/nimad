<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>New Project Brief Submitted - Nimad Tech</title>
</head>
<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f4f6f8; margin: 0; padding: 20px;">
  <div style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
    <div style="background-color: #101828; padding: 24px; text-align: center;">
      <h2 style="color: #ffffff; margin: 0; font-size: 20px;">🚀 New Project Request</h2>
      <p style="color: #94a3b8; margin: 6px 0 0 0; font-size: 14px;">Nimad Tech "Start a Project" Form</p>
    </div>
    <div style="padding: 24px; color: #1e293b;">
      <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b; width: 140px;"><strong>Client Name:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; font-weight: 600;">{{ $project->full_name }}</td>
        </tr>
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;"><strong>Email:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9;"><a href="mailto:{{ $project->email }}" style="color: #635bff; text-decoration: none;">{{ $project->email }}</a></td>
        </tr>
        @if(!empty($project->company))
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;"><strong>Company:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9;">{{ $project->company }}</td>
        </tr>
        @endif
        @if(!empty($project->phone))
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;"><strong>Phone:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9;">{{ $project->phone }}</td>
        </tr>
        @endif
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;"><strong>Service Needed:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; font-weight: 600; color: #635bff;">{{ ucwords(str_replace('-', ' ', $project->service)) }}</td>
        </tr>
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;"><strong>Budget:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; font-weight: 600;">{{ $project->budget ?? 'Not specified' }}</td>
        </tr>
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;"><strong>Timeline:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9;">{{ $project->timeline ?? 'Flexible' }}</td>
        </tr>
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;"><strong>IP Address:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9;">{{ $project->ip_address }}</td>
        </tr>
      </table>
      <div style="margin-top: 20px;">
        <h4 style="margin: 0 0 8px 0; color: #334155; font-size: 14px;">Project Description & Requirements:</h4>
        <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 16px; font-size: 14px; line-height: 1.6; white-space: pre-wrap; color: #1e293b;">{{ $project->message }}</div>
      </div>
      <div style="margin-top: 24px; text-align: center;">
        <a href="mailto:{{ $project->email }}?subject=Your%20Project%20Enquiry%20with%20Nimad%20Tech" style="display: inline-block; background-color: #635bff; color: #ffffff; padding: 12px 24px; font-weight: 600; text-decoration: none; border-radius: 6px;">Contact {{ $project->full_name }}</a>
      </div>
    </div>
    <div style="background-color: #f8fafc; padding: 16px; text-align: center; font-size: 12px; color: #64748b; border-top: 1px solid #e2e8f0;">
      © {{ date('Y') }} Nimad Tech Lead System
    </div>
  </div>
</body>
</html>
