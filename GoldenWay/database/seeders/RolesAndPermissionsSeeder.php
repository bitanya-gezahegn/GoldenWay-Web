<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);
    
        // Assign permissions (optional)
        $manageUsers = Permission::create(['name' => 'manage users']);
        $adminRole->givePermissionTo($manageUsers);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com', // replace with a real email
            'password' => bcrypt('admin123'), // replace with a strong password
            'email_verified_at' => now(), // mark email as verified
        ]);
    
        // Assign the 'admin' role to this user
        $admin->assignRole('admin');
    
        // Assign permissions (optional)
        // $manageUsers = Permission::create(['name' => 'manage users']);
        // $adminRole->givePermissionTo($manageUsers);
    }
}
