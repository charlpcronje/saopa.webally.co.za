
# Email Configuration Handover Document

This document outlines the configurations made for handling emails during development and what needs to be updated for production.

## .env Configuration

In the project's root `.env` file, update the following keys with the appropriate values for your mail server when moving to production:

```
MAIL_MAILER=smtp              # Change from 'log' to your mail driver, usually 'smtp'
MAIL_LOG_CHANNEL=null         # Set to null or remove for production
MAIL_HOST=smtp.mailgun.org    # Your mail server
MAIL_PORT=587                 # Your mail server port, typically 587 for TLS
MAIL_USERNAME=null            # Your mail server username
MAIL_PASSWORD=null            # Your mail server password
MAIL_ENCRYPTION=tls           # Your mail server encryption, typically 'tls' or 'ssl'
MAIL_FROM_ADDRESS=null        # The email address your mails should come from
MAIL_FROM_NAME="${APP_NAME}"  # The name your emails should come from, defaults to your app name
```

Make sure to replace `null` with your actual configuration values.

## config/mail.php

In the `config/mail.php` file, you should review the `mailers` configuration to ensure it matches the desired mailer configurations for production.

```php
'mailers' => [
    'smtp' => [
        // Ensure these settings match what's in your .env file
    ],
    // ...
],
```

## config/logging.php

For development, a separate log channel for mails can be set up. In production, this should either be removed or adjusted according to your logging preferences.

```php
'channels' => [
    // ...
    'mail' => [
        'driver' => 'single',
        'path' => storage_path('logs/mail.log'),
        'level' => 'debug',
    ],
    // ...
],
```

## Updating Email Content and Styles

To update the wording and style of the welcome email, you should edit the Blade view located at `resources/views/emails/welcome.blade.php`. This is where the HTML and inline CSS for the welcome email are defined.

For significant styling changes, ensure that they are compatible with a wide range of email clients. Testing with tools like Litmus or Email on Acid can be beneficial.

---

After making changes to the `.env` file or the configuration files, remember to clear your config cache with `php artisan config:clear`.

Thank you for taking over the email configuration, and please reach out if you have any questions.
