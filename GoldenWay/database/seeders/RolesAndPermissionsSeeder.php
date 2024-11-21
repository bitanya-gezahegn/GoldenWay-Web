<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\Attributes\Ticket;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Driver;
use App\Models\Customer;
use App\Models\OperationsOfficer;
use App\Models\TicketOfficer;
Use App\Models\Admin;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $userRole = Role::firstOrCreate(['name' => 'user']);
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $customerRole=Role::firstOrCreate(['name'=>'customer']);
        $driverRole = Role::firstOrCreate(['name' => 'driver']);
        $operationsOfficerRole = Role::firstOrCreate(['name' => 'operationsOfficer']);
        $ticketOfficerRole = Role::firstOrCreate(['name' => 'ticketOfficer']);
        

         // Assign permissions (optional)
         // $manageUsers = Permission::create(['name' => 'manage users']);
         // $adminRole->givePermissionTo($manageUsers);
         
// DEFAULT USER---------------------------------------------------
$user = User::firstOrCreate(['email' => 'user@gmail.com'],[
    'name' => 'user',
    'password' => bcrypt('user1234'), 
    'email_verified_at' => now(), 
]);
$user->assignRole('user');


//DEFAULT CUSTOMER------------------------------------------------------------
$customer = User::firstOrCreate([  'email' => 'customer@gmail.com'],[
    'name' => 'Customer',
    'password' => bcrypt('customer123'), 
    'email_verified_at' => now(),
]);
$customer->assignRole('customer');
Customer::firstOrCreate([ 'user_id' => $customer->id]);

//DEFAULT ADMIN-------------------------------------------------------------------------

$admin = User::firstOrCreate(['email' => 'admin@gmail.com'],
[
    'name' => 'Admin',
    'password' => bcrypt('admin123'), 
    'email_verified_at' => now(),
]);

// // Assign the 'admin' role to this user
$admin->assignRole('admin');

Admin::firstOrCreate([ 'user_id' => $admin->id],
[
    'department' => 'Adminstration',
    'employment_date' => now(),
]);
    
        // Assign permissions (optional)
        // $manageUsers = Permission::create(['name' => 'manage users']);
        // $adminRole->givePermissionTo($manageUsers);


//DEFAULT DRIVER-------------------------------------------------------------
      //  $driverRole->givePermissionTo($viewAssignedRoutes);
    $driver = User::firstOrCreate([  'email' => 'driver@gmail.com'],[
        'name' => 'Driver',
        'password' => bcrypt('driver123'), 
        'email_verified_at' => now(), 
    ]);

    $driver->assignRole('driver');

    Driver::firstOrCreate(['user_id' => $driver->id],
    [
    'license_number' => 'DR123456',
    'employment_date' => now(),
]);

    //DEFAULT OPERATIONS OFFICER
        //$operationsOfficerRole->givePermissionTo([$manageRoutes, $manageSchedules]);
        $operationsOfficer = User::firstOrCreate(
        [  'email' => 'oofficer@gmail.com' ],
        [
            'name' => 'Operations Officer',
            'password' => bcrypt('oofficer123'), 
            'email_verified_at' => now(), 
        ]);

        $operationsOfficer->assignRole('operationsOfficer');

         OperationsOfficer::firstOrCreate([ 'user_id' => $operationsOfficer->id],
[
             'department' => 'Operations',
             'employment_date' => now(),
        ]);




//DEFAULT TICKET OFFICER-------------------------------------------------------------------------
       // $ticketOfficerRole->givePermissionTo([$manageTickets, $viewTicketReports]);
     $ticketOfficer = User::firstOrCreate(
    ['email' => 'tofficer@gmail.com'], // Search by email
    [
        'name' => 'Ticket Officer',
        'password' => bcrypt('tofficer123'),
        'email_verified_at' => now(),
    ]
);
    $ticketOfficer->assignRole('ticketOfficer');

TicketOfficer::firstOrCreate([ 'user_id' => $ticketOfficer->id],
[
        'department' => 'Tickets',
        'employment_date' => now(),
        ]);


    }
}
