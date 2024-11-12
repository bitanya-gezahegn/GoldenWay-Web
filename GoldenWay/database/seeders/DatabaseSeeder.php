<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
  //DEFAULT USER---------------------------------------------------
        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com', 
            'password' => bcrypt('user1234'), 
            'email_verified_at' => now(), 
        ]);
        $user->assignRole('user');
    }
//DEFAULT ADMIN-------------------------------------------------------------------------
        
        // $admin = User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('admin123'), 
        //     'email_verified_at' => now(),
        // ]);
    
        // // Assign the 'admin' role to this user
        // $admin->assignRole('admin');
    
}
