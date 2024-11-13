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
  
         $userRole = Role::create(['name' => 'user']);
         $adminRole = Role::create(['name' => 'admin']);
         // Assign permissions (optional)
         // $manageUsers = Permission::create(['name' => 'manage users']);
         // $adminRole->givePermissionTo($manageUsers);
         
//DEFAULT USER---------------------------------------------------
$user = User::create([
    'name' => 'user',
    'email' => 'user@gmail.com', 
    'password' => bcrypt('user1234'), 
    'email_verified_at' => now(), 
]);
$user->assignRole('user');
//DEFAULT ADMIN-------------------------------------------------------------------------

$admin = User::create([
    'name' => 'Admin',
    'email' => 'admin@gmail.com',
    'password' => bcrypt('admin123'), 
    'email_verified_at' => now(),
]);

// // Assign the 'admin' role to this user
$admin->assignRole('admin');

    
        // Assign permissions (optional)
        // $manageUsers = Permission::create(['name' => 'manage users']);
        // $adminRole->givePermissionTo($manageUsers);


//DEFAULT DRIVER-------------------------------------------------------------
        $driverRole = Role::firstOrCreate(['name' => 'Driver']);
      //  $driverRole->givePermissionTo($viewAssignedRoutes);
      $driver = User::create([
        'name' => 'Driver',
        'email' => 'driver@gmail.com', // replace with a real email
        'password' => bcrypt('driver123'), // replace with a strong password
        'email_verified_at' => now(), // mark email as verified
    ]);
    $driver->assignRole('driver');

    //DEFAULT OPERATIONS OFFICER
        $operationsOfficerRole = Role::firstOrCreate(['name' => 'operationsOfficer']);
        //$operationsOfficerRole->givePermissionTo([$manageRoutes, $manageSchedules]);
        $operationsOfficer = User::create([
            'name' => 'Operations Officer',
            'email' => 'Oofficer@gmail.com', 
            'password' => bcrypt('oofficer123'), 
            'email_verified_at' => now(), 
        ]);
        $operationsOfficer->assignRole('operationsOfficer');

//DEFAULT TICKET OFFICER-------------------------------------------------------------------------
        $ticketOfficerRole = Role::firstOrCreate(['name' => 'ticketOfficer']);
       // $ticketOfficerRole->givePermissionTo([$manageTickets, $viewTicketReports]);
       $ticketOfficer = User::create([
        'name' => 'Ticket Officer',
        'email' => 'Tofficer@gmail.com', 
        'password' => bcrypt('tofficer123'), 
        'email_verified_at' => now(), 
    ]);
    $ticketOfficer->assignRole('ticketOfficer');




    }
}
