<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>New Contact Enquiry - Nimad Tech</title>
</head>
<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f4f6f8; margin: 0; padding: 20px;">
  <div style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
    <div style="background-color: #101828; padding: 24px; text-align: center;">
      <h2 style="color: #ffffff; margin: 0; font-size: 20px;">New Contact Enquiry</h2>
      <p style="color: #94a3b8; margin: 6px 0 0 0; font-size: 14px;">Nimad Tech Website Contact Form</p>
    </div>
    <div style="padding: 24px; color: #1e293b;">
      <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b; width: 140px;"><strong>Name:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; font-weight: 600;">{{ $contact->full_name }}</td>
        </tr>
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;"><strong>Email:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9;"><a href="mailto:{{ $contact->email }}" style="color: #635bff; text-decoration: none;">{{ $contact->email }}</a></td>
        </tr>
        @if(!empty($contact->company))
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;"><strong>Company:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9;">{{ $contact->company }}</td>
        </tr>
        @endif
        @if(!empty($contact->phone))
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;"><strong>Phone:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9;">{{ $contact->phone }}</td>
        </tr>
        @endif
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;"><strong>Service:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; font-weight: 600; color: #635bff;">{{ ucwords(str_replace('-', ' ', $contact->service)) }}</td>
        </tr>
        @if(!empty($contact->budget))
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;"><strong>Budget:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9;">{{ $contact->budget }}</td>
        </tr>
        @endif
        @if(!empty($contact->timeline))
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;"><strong>Timeline:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9;">{{ $contact->timeline }}</td>
        </tr>
        @endif
        <tr>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b;"><strong>IP Address:</strong></td>
          <td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9;">{{ $contact->ip_address }}</td>
        </tr>
      </table>
      <div style="margin-top: 20px;">
        <h4 style="margin: 0 0 8px 0; color: #334155; font-size: 14px;">Message:</h4>
        <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 16px; font-size: 14px; line-height: 1.6; white-space: pre-wrap; color: #1e293b;">{{ $contact->message }}</div>
      </div>
      <div style="margin-top: 24px; text-align: center;">
        <a href="mailto:{{ $contact->email }}?subject=Re:%20Your%20enquiry%20to%20Nimad%20Tech" style="display: inline-block; background-color: #635bff; color: #ffffff; padding: 12px 24px; font-weight: 600; text-decoration: none; border-radius: 6px;">Reply to {{ $contact->full_name }}</a>
      </div>
    </div>
    <div style="background-color: #f8fafc; padding: 16px; text-align: center; font-size: 12px; color: #64748b; border-top: 1px solid #e2e8f0;">
      © {{ date('Y') }} Nimad Tech Lead Notification System
    </div>
  </div>
</body>
</html>
