<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AuthSeeder extends Seeder
{
    public function run()
    {
        // Create a user
        $user = User::create([
            'name' => 'Super admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin@admin.com'),
            'address' => 'test',
            'phone_number' => '123456789',
            'type' => 'ADMIN'
        ]);

        // Assign a role to the user
        // $role = Role::where('name', 'super-admin')->first();
        // $user->assignRole($role);
    }
}
