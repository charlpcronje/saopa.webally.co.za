<?php
// database/seeders/UsersTableSeeder.php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Role::create(['name' => 'Admin']);
        // Role::create(['name' => 'Judge']);
        // Role::create(['name' => 'User']);
        User::create([
            'name' => 'Admin',
            'surname' => 'Admin',
            'email' => 'admin@fgx.co.za',
            'password' => bcrypt('1234'),
            'role_id' => 1
        ]);
    }
}
