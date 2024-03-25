# Comprehensive Setup Guide for Laravel Telescope

This guide provides detailed instructions on installing Laravel Telescope in a Laravel application, configuring it for direct access via a dedicated subdomain (`console.sapoa.webally.co.za`), and ensuring the setup is secure and efficient. This setup specifically caters to servers using Apache, listening on port 82, with SSL configurations managed potentially by a reverse proxy.

## Prerequisites

Before proceeding, ensure you have:

- A Laravel application installed and running on an Apache server.
- Control over DNS settings for your domain to configure a subdomain.
- Access to your server's Apache configuration files.
- SSL set up for your subdomain, assuming SSL termination might be handled by an Nginx reverse proxy or similar setup.

## Step 1: Install Laravel Telescope

Telescope is a powerful debugging assistant for Laravel, offering insight into your application's runtime operations, including requests, exceptions, database queries, and more.

1. **Installation**: Navigate to your Laravel project directory on your server and run the following command to install Telescope:

```bash
composer require laravel/telescope
```

2. **Publish Assets**: After installation, publish Telescope's assets and configurations by executing:

```bash
php artisan telescope:install
php artisan migrate
```

This command publishes Telescope's assets, configuration, and runs migrations needed for its database tables.

## Step 2: Secure Access to Telescope

Restricting access to Telescope is critical to ensure sensitive application data remains secure.

1. **Modify `TelescopeServiceProvider`**: Laravel Telescope's installation adds `TelescopeServiceProvider` to `app/Providers`. Edit this file to define who can access the Telescope dashboard by modifying the `gate()` method:

```php
protected function gate()
{
    Gate::define('viewTelescope', function ($user) {
        return in_array($user->email, [
            'admin@example.com', // List authorized email addresses here
        ]);
    });
}
```

### Add user with Laravel Tinker

To add or update a user (for example, `admin@sapoa.org.za`) via Laravel Tinker to be used with the gate method for Laravel Telescope, you will generally follow these steps. This assumes you want to grant access to an existing user in your application or create a new user if they don't already exist.

### Step 2.1: Launch Tinker

First, you need to start Tinker from your terminal. Navigate to the root directory of your Laravel application and run:

```bash
php artisan tinker
```

### Step 2.2: Check if the User Exists

Before adding or updating a user, check if the user already exists in the database. You can do this by querying the User model:

```php
$user = App\Models\User::where('email', 'admin@sapoa.org.za')->first();
```

### Step 2.3: Create or Update the User

- **If the User Does Not Exist**: Create a new user. You'll need to replace `'password'` with the actual password you want to set for this user. Ensure you hash the password correctly:

```php
User::create([
    'name' => 'Admin',
    'surname' => 'Admin',
    'email' => 'admin@sapoa.org.za',
    'password' => bcrypt('sapoa_qaz'), // Replace 'password' with a secure password
    'role_id' => 1
]);
```

- **If the User Already Exists**: Update the user's details as necessary. If you're only ensuring the user exists for the gate, you might not need to do anything further. However, if you need to update the user or ensure they have a certain role or permission, you might update them like so:

```php
$user->update([
    // Update any fields as necessary, for example:
    'name' => 'Updated Admin Name',
]);
```

### Step 2.4: Exit Tinker

Once you've created or updated the user as needed, you can exit Tinker by typing `exit` or pressing Ctrl+D.

### Step 5: Use the Email in the Gate Method

Now that you've ensured `admin@sapoa.org.za` exists in your user database, you can use this email in your `gate()` method inside `TelescopeServiceProvider` to grant access to the Telescope dashboard:

```php
protected function gate()
{
    Gate::define('viewTelescope', function ($user) {
        return in_array($user->email, [
            'admin@sapoa.org.za', // This user can now access Telescope
        ]);
    });
}
```

This process grants the specified user access to the Telescope dashboard through the gate authorization logic. Remember to use secure passwords and manage user permissions responsibly, especially for administrative functions.


## Step 3: Configure the Apache Virtual Host for the Subdomain

To serve the Telescope dashboard directly from `console.sapoa.webally.co.za` without requiring `/telescope` in the URL, configure an Apache virtual host.

1. **Create or Edit Virtual Host File**: Navigate to your Apache configuration directory (e.g., `/etc/apache2/sites-available/` on Ubuntu) and create or edit a virtual host file for your subdomain.

2. **Virtual Host Configuration**: Here's a sample configuration adjusted for serving on port 82 and redirecting all requests to the Telescope dashboard:

```apache
<VirtualHost 212.227.241.186:82>
    ServerName console.sapoa.webally.co.za
    DocumentRoot "/var/www/html/sapoa.webally.co.za/public"

    <Directory "/var/www/html/sapoa.webally.co.za">
        AllowOverride All
        Require all granted
        Options -Indexes +FollowSymLinks
    </Directory>

    RewriteEngine On
    RewriteCond %{REQUEST_URI} !^/telescope
    RewriteRule ^/(.*)$ /telescope/$1 [L,R=301]

    ErrorLog /var/www/html/sapoa.webally.co.za/logs/console_error.log
    CustomLog /var/www/html/sapoa.webally.co.za/logs/console_access.log combined
</VirtualHost>
```

This configuration assumes `mod_rewrite` is enabled. It redirects all traffic from the subdomain root to `/telescope`, making the dashboard accessible directly via `https://console.sapoa.webally.co.za`.

3. **Enable the Site and Restart Apache**: Ensure your new configuration is enabled (using `a2ensite` on Ubuntu, if applicable), and then restart Apache to apply changes:

```bash
sudo systemctl restart apache2
```

## Step 4: Verify Configuration

After completing the setup:

1. **DNS Propagation**: Ensure your subdomain's DNS changes have propagated and it points correctly to your server's IP.
2. **Access Telescope**: Navigate to `https://console.sapoa.webally.co.za` in your web browser. You should be directed to the Telescope dashboard, provided you're authorized as per the `gate()` method's logic.

## Conclusion

You have successfully configured Laravel Telescope for your Laravel application, making it accessible through a dedicated subdomain while ensuring it's secure and restricted to authorized users. This setup enhances the debugging and monitoring capabilities of your application, providing valuable insights directly from a convenient and dedicated endpoint.