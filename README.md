# SAPOA Awards Dashboard

The SAPOA Awards Dashboard is a web application built using Laravel and Livewire. It provides a dashboard for managing entries, judges, and invoices for the SAPOA Awards competition.

## Development

- [Authentication](./docs/authentication/Authentication.md) 
- [Components](./docs/components/README.md)
- **Database**
  - [Migrations](./docs/database/migrations.md)
  - [Models](./docs/database/models.md) 
  - [SQL](./docs/database/sql.md)
- [Laravel Artisan](./docs/laravel/Artisan%20Commands.md)
- [Libraries](./docs/libraries/libs.md)
- **[Livewire](./docs/livewire/README.md)**
  - [Getting Started](./docs/livewire/start.md)
  - [Artisan Commands](./docs/livewire/artisan/README.md)
  - [Config](./docs/livewire/config.md)
  - [Official Documentation](./docs/livewire/Livewire%20Documentation.md)
- **Payments**
  - [Peach Payments](./docs/payments/peach/README.md)
  - [Yoko](./docs/payments/Yoko/README.md)
- **Video Tutorials**
  - [Auto Resolve External Class Methods](./docs/services/Livewire%20Auto-Resolve-External-Classes-in-Component-Methods.mp4)
- **Templating**
  - [Layout](./docs/templating/layout.md)
  - [YML Representation](./docs/templating/layout.yml)

## Features

- User authentication and role-based access control
- Admin dashboard for managing entries, judges, and invoices
- Judge dashboard for reviewing and rating assigned entries
- User dashboard for submitting entries and viewing invoices
- Responsive and interactive user interface using Livewire components
- Customizable sidebar navigation with collapsible sub-menus
- Integration with a payment gateway for invoice processing

## Requirements

- PHP >= 8.1
- Laravel >= 10.0
- Livewire >= 2.0
- MySQL or compatible database

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/your-username/sapoa-awards-dashboard.git
   ```

2. Navigate to the project directory:
   ```
   cd sapoa-awards-dashboard
   ```

3. Install the dependencies using Composer:
   ```
   composer install
   ```

4. Copy the `.env.example` file to `.env` and update the database configuration:
   ```
   cp .env.example .env
   ```

5. Generate the application key:
   ```
   php artisan key:generate
   ```

6. Run the database migrations:
   ```
   php artisan migrate
   ```

7. (Optional) Seed the database with sample data:
   ```
   php artisan db:seed
   ```

8. Install and build the frontend assets:
   ```
   npm install
   npm run dev
   ```

9. Start the development server:
   ```
   php artisan serve
   ```

10. Access the application in your web browser at `http://localhost:8000`.

## Configuration

- Update the database configuration in the `.env` file to match your database settings.
- Configure the payment gateway credentials in the `.env` file or the appropriate configuration files.
- Customize the application name, logo, and other branding elements in the `config/app.php` file and the relevant Blade templates.

## Usage

- Register a new user account or log in with an existing account.
- Depending on your user role (admin, judge, or regular user), you will have access to different dashboards and features.
- Admins can manage entries, judges, and invoices from the admin dashboard.
- Judges can review and rate assigned entries from the judge dashboard.
- Regular users can submit entries and view their invoices from the user dashboard.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Credits

- [Laravel](https://laravel.com)
- [Livewire](https://laravel-livewire.com)
- [Tailwind CSS](https://tailwindcss.com)

## Contact

For any inquiries or feedback, please contact the project maintainer at [charl@fgx.co.za](mailto:charl@fgx.co.za).
