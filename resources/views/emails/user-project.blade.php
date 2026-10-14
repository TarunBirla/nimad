<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>We received your project enquiry - Nimad Tech</title>
</head>
<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f4f6f8; margin: 0; padding: 20px;">
  <div style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
    <div style="background-color: #101828; padding: 24px; text-align: center;">
      <h2 style="color: #ffffff; margin: 0; font-size: 20px;">Nimad Tech</h2>
      <p style="color: #8f89ff; margin: 6px 0 0 0; font-size: 14px;">Technology That Moves Your Business Forward</p>
    </div>
    <div style="padding: 24px; color: #1e293b; line-height: 1.6;">
      <p style="font-size: 16px; margin-top: 0;">Hello <strong>{{ $project->full_name }}</strong>,</p>
      <p>Thank you for submitting your project brief to Nimad Tech! We are thrilled about the opportunity to partner with you.</p>
      <p>Our senior technical leads and product strategists are reviewing your requirements. We will review the scope, prepare helpful questions or recommendations, and schedule a consultation call with you shortly.</p>
      
      <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 16px; margin: 20px 0;">
        <h4 style="margin: 0 0 10px 0; color: #334155; font-size: 14px;">Your Project Summary:</h4>
        <p style="margin: 4px 0; font-size: 13px; color: #64748b;"><strong>Service:</strong> {{ ucwords(str_replace('-', ' ', $project->service)) }}</p>
        <p style="margin: 4px 0; font-size: 13px; color: #64748b;"><strong>Budget:</strong> {{ $project->budget ?? 'To be discussed' }}</p>
        <p style="margin: 4px 0; font-size: 13px; color: #64748b;"><strong>Timeline:</strong> {{ $project->timeline ?? 'Flexible' }}</p>
      </div>

      <h4 style="margin: 16px 0 8px 0; color: #1e293b;">What happens next?</h4>
      <ol style="padding-left: 20px; margin-top: 4px; font-size: 14px; color: #475569;">
        <li>We examine technical feasibilities and integrations needed.</li>
        <li>We email you to confirm a quick discussion call at a time that works for you.</li>
        <li>We provide a detailed roadmap, timeline, and phased cost estimate.</li>
      </ol>

      <p>Have an update or wireframes to share? Simply reply to this email.</p>
      
      <p style="margin-bottom: 0;">Best regards,<br><strong>Nimad Tech Leadership Team</strong><br><a href="https://nimadtech.in" style="color: #635bff; text-decoration: none;">https://nimadtech.in</a></p>
    </div>
    <div style="background-color: #f8fafc; padding: 16px; text-align: center; font-size: 12px; color: #64748b; border-top: 1px solid #e2e8f0;">
      © {{ date('Y') }} Nimad Tech. All rights reserved.
    </div>
  </div>
</body>
</html>
