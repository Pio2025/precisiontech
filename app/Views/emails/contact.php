<?php
/**
 * Expects: $name, $email, $phone, $subject, $message
 */
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Website Enquiry</title>
</head>
<body style="margin:0; padding:0; background-color:#f2f3f7; font-family:Arial, Helvetica, sans-serif;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f2f3f7; padding:32px 16px;">
    <tr>
      <td align="center">
        <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="width:600px; max-width:100%; background-color:#ffffff; border-radius:8px; overflow:hidden; border:1px solid #e4e6ee;">

          <tr>
            <td style="background-color:#ffffff; padding:24px 32px; border-bottom:1px solid #eceef4;">
              <img src="<?= esc(base_url('assets/img/logo/logo-small.png'), 'attr') ?>" alt="Precision Tech Pte Ltd" height="32" style="display:block; border:0; height:32px; width:auto;">
            </td>
          </tr>

          <tr>
            <td style="padding:32px;">
              <h1 style="margin:0 0 4px; font-size:20px; line-height:1.3; color:#262262; font-family:Arial, Helvetica, sans-serif;">New Website Enquiry</h1>
              <p style="margin:0 0 24px; font-size:14px; color:#6b7280;">Submitted via the contact form on precisiontechfiji.com</p>

              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:24px;">
                <tr>
                  <td style="padding:10px 0; border-bottom:1px solid #eceef4; font-size:14px; color:#6b7280; width:120px; vertical-align:top;">Name</td>
                  <td style="padding:10px 0; border-bottom:1px solid #eceef4; font-size:14px; color:#111827; vertical-align:top;"><?= esc($name) ?></td>
                </tr>
                <tr>
                  <td style="padding:10px 0; border-bottom:1px solid #eceef4; font-size:14px; color:#6b7280; vertical-align:top;">Email</td>
                  <td style="padding:10px 0; border-bottom:1px solid #eceef4; font-size:14px; vertical-align:top;"><a href="mailto:<?= esc($email, 'attr') ?>" style="color:#1c75bc; text-decoration:none;"><?= esc($email) ?></a></td>
                </tr>
                <tr>
                  <td style="padding:10px 0; border-bottom:1px solid #eceef4; font-size:14px; color:#6b7280; vertical-align:top;">Phone</td>
                  <td style="padding:10px 0; border-bottom:1px solid #eceef4; font-size:14px; color:#111827; vertical-align:top;"><?= $phone !== '' ? esc($phone) : '<span style="color:#9ca3af;">Not provided</span>' ?></td>
                </tr>
                <tr>
                  <td style="padding:10px 0; border-bottom:1px solid #eceef4; font-size:14px; color:#6b7280; vertical-align:top;">Subject</td>
                  <td style="padding:10px 0; border-bottom:1px solid #eceef4; font-size:14px; color:#111827; vertical-align:top;"><?= esc($subject) ?></td>
                </tr>
              </table>

              <p style="margin:0 0 8px; font-size:13px; font-weight:bold; color:#262262; text-transform:uppercase; letter-spacing:.04em;">Message</p>
              <p style="margin:0; font-size:14px; line-height:1.6; color:#111827; white-space:pre-wrap;"><?= esc($message) ?></p>
            </td>
          </tr>

          <tr>
            <td style="background-color:#f8f9fc; padding:20px 32px; border-top:1px solid #eceef4;">
              <p style="margin:0 0 6px; font-size:13px; font-weight:bold; color:#262262;">Precision Tech Pte Ltd</p>
              <p style="margin:0 0 4px; font-size:12px; color:#6b7280;">Veivauceva, 6 Miles, Tacirua, Fiji</p>
              <p style="margin:0 0 4px; font-size:12px; color:#6b7280;">9896700 / 7829063 &nbsp;&middot;&nbsp; <a href="mailto:info@precisiontechfiji.com" style="color:#1c75bc; text-decoration:none;">info@precisiontechfiji.com</a></p>
              <p style="margin:8px 0 0; font-size:12px; color:#9ca3af;">Facebook &middot; LinkedIn &middot; Instagram</p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
