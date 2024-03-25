<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to SAPOA Awards</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #ffffff; color: #333333;">
    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="margin: 0 auto; max-width: 600px; border-collapse: collapse;">
        <tr>
            <td style="background-color: #ffffff; padding: 20px; text-align: center;">
                <img src="{{ $logoUrl }}" alt="SAPOA Logo" width="300" style="margin-bottom: 30px;">
            </td>
        </tr>
        <tr>
            <td style="background-color: #f8f8f8; padding: 30px;">
                <h1 style="color: #cc6600; margin-top: 0;">Welcome to the SAPOA Awards, {{ $user->name }}!</h1>
                <p style="font-size: 16px; line-height: 1.5; color: #666666;">
                    Congratulations on your registration. We are thrilled to welcome you to the prestigious SAPOA Awards platform, where excellence in property ownership is celebrated and rewarded.
                </p>
                <p style="font-size: 16px; line-height: 1.5; color: #666666;">
                    Get ready to explore, engage, and be recognized among the best.
                </p>
                <p style="text-align: center;">
                    <a href="{{ config('app.url') }}" style="display: inline-block; background-color: #cc6600; color: #ffffff; padding: 10px 20px; margin-top: 20px; border-radius: 4px; text-decoration: none; font-weight: bold;">Visit Your Dashboard</a>
                </p>
            </td>
        </tr>
        <tr>
            <td style="background-color: #ffffff; padding: 20px; font-size: 14px; line-height: 1.5;">
                <p style="color: #666666;">
                    If you need any assistance or have questions, reach out to us:
                </p>
                <p style="color: #666666;">
                    <strong>Tel:</strong> {{ $contact['tel'] }}<br>
                    <strong>Email:</strong> <a href="mailto:{{ $contact['email'] }}" style="color: #cc6600; text-decoration: none;">{{ $contact['email'] }}</a><br>
                    <strong>Address:</strong> {{ $contact['physical'] }}<br>
                    <strong>Postal:</strong> {{ $contact['postal'] }}
                </p>
            </td>
        </tr>
        <tr>
            <td style="background-color: #cc6600; padding: 10px; text-align: center; color: #ffffff;">
                <p style="margin: 0;">&copy; {{ date('Y') }} SAPOA. All rights reserved.</p>
            </td>
        </tr>
    </table>
</body>
</html>
