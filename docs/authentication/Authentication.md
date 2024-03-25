# Authentication

I used Laravel Breeze for the basic Laravel Scaffolding, but I need users with different roles, so here are the steps for adding user roles t the app and an example of how to apply the roles to a route

To upgrade the authentication in Laravel Breeze to support user roles and block certain routes for specific roles, you can follow a structured approach. This involves creating roles, assigning roles to users, and using middleware to restrict access based on user roles. Here's a step-by-step guide:

###  1. Create Roles
First, you need to define roles for your users. This can be done by creating a `roles` table in your database. You can create a migration for this table:

```bash
php artisan make:migration create_roles_table --create=roles
```

In the migration file, define the structure of your `roles` table. For example:

```php
// database/migrations/2024_02_28_create_roles_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
```

Run the migration:

```bash
php artisan migrate
```

###  2. Assign Roles to Users
Next, modify the `users` table to include a foreign key referencing the `roles` table. Create a migration to add a `role_id` column to the `users` table:

```bash
php artisan make:migration add_role_id_to_users_table --table=users
```

In the migration file, add the `role_id` column:

```php
// database/migrations/2024_02_28_add_role_id_to_users_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleIdToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained()->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
        });
    }
}
```

Run the migration:

```bash
php artisan migrate
```

###  3. Create Middleware for Role-Based Access Control
Create a middleware to check if the authenticated user has the required role to access a route:

```bash
php artisan make:middleware CheckRole
```

In the middleware, define the logic to check the user's role:

```php
// app/Http/Middleware/CheckRole.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role->name != $role) {
            return redirect('/home')->with('message', 'You are not authorized to access this page');
        }

        return $next($request);
    }
}
```

Register the middleware in `app/Http/Kernel.php`:

```php
protected $routeMiddleware = [
    // ...
    'role' => \App\Http\Middleware\CheckRole::class,
];
```

###  4. Apply Middleware to Routes
Use the middleware to restrict access to routes based on roles. For example, to restrict access to an admin route:

```php
Route::get('/admin', function () {
    // Admin dashboard
})->middleware('role:admin');
```

This setup allows you to define roles and assign them to users, and then use middleware to control access to routes based on these roles.

### 5. Create Admin User

```sh
php artisan tinker
```


f