# Migrations

## Use the Artisan command to generate each migration

```sh
php artisan make:migration create_entries_table --create=entries
php artisan make:migration create_entry_docs_table --create=entry_docs
php artisan make:migration create_entry_images_table --create=entry_images
```

## Migration for creating the `entries` table
```php
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('surname');
            $table->string('company');
            $table->string('phone_number');
            $table->string('email');
            $table->string('entry_title');
            $table->string('project_category');
            $table->text('description');
            $table->string('owner_developer_name');
            $table->string('developer_name');
            $table->date('date_of_completion');
            $table->decimal('capital_investment', 19, 4);
            $table->decimal('economic_return', 19, 4);
            $table->text('tenant_profile');
            $table->string('BBBEE_status');
            $table->text('overall_impact');
            $table->text('design_concept');
            $table->text('functionality_fit_for_purpose');
            $table->text('facilities_user_satisfaction');
            $table->text('environmentally_sustainable_design');
            $table->text('social_transformation');
            $table->timestamps(); // This creates both created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
```


## Migration for creating the `entry_docs` table

```php
<?php
class CreateEntryDocsTable extends Migration
{
    public function up()
    {
        Schema::create('entry_docs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entry_id')->constrained()->onDelete('cascade');
            $table->enum('doc_type', ['general_doc', 'other'])->default('general_doc');
            $table->string('doc_name');
            $table->string('doc_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entry_docs');
    }
}
```

## Migration for creating the `entry_images` table

```php
<?php
class CreateEntryImagesTable extends Migration
{
    public function up()
    {
        Schema::create('entry_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entry_id')->constrained()->onDelete('cascade');
            $table->enum('image_type', ['general_image', 'architectural_drawing'])->default('general_image');
            $table->string('image_name');
            $table->string('image_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entry_images');
    }
}
```

# User Roles
```php
<?php
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

## Add role_id to Users table

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
