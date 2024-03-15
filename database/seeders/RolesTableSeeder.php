<?php
// database/seeders/RolesTableSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = ['user', 'judge', 'admin'];
        
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
