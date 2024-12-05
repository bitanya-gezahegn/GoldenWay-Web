<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TicketOfficerController;
use App\Http\Controllers\OperationsOfficerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;
Route::resource('users', UserController::class);
// Route for deleting a user
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/users/{user}', function () {
    return redirect()->route('admin.dashboard');
});

Route::get('/admin/dashboard/customer', [CustomerController::class, 'tableData'])->name('admin.dashboard.customer');

Route::put('/users/{user}', [UserController::class, 'update']);

Route::put('/row/{id}', [UserController::class, 'update']);
Route::resource('users', UserController::class);

Route::get('/', function () {
    return view('home');
});
//OperationsOfficerui
Route::get('/operation-officer', function () {
    return view('operationsOfficer.operationOfficerui');
})->name('operationofficerui');



// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// });
Route::middleware(['role:admin'])->get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

// Route accessible only to Drivers
// Route::middleware(['auth','role:driver'])->group(function () {
//     Route::get('/driver/dashboard', [DriverController::class, 'dashboard']);
// });
Route::middleware(['role:driver'])->get('/driver/dashboard', [DriverController::class, 'index'])->name('driver.dashboard');
// Routes accessible only to Operations Officers
Route::middleware(['role:operationsOfficer'])->get('/operationsOfficer/dashboard', [OperationsOfficerController::class, 'index'])->name('operationsOfficer.dashboard');
// Route::middleware(['auth','role:operationsOfficer'])->group(function () {
//     Route::get('/operationsOfficer/dashboard', [OperationsOfficerController::class, 'dashboard']);
    // Route::get('/routes/manage', [OperationsOfficerController::class, 'manageRoutes']);
//});

// Routes accessible only to Ticket Officers
// Route::middleware(['auth','role:ticketOfficer'])->group(function () {
//     Route::get('/ticketOfficer/dashboard', [TicketOfficerController::class, 'dashboard']);
//     // Route::get('/tickets/manage', [TicketOfficerController::class, 'manageTickets']);
// });
Route::middleware(['role:ticketOfficer'])->get('/ticketOfficer/dashboard', [TicketOfficerController::class, 'index'])->name('ticketOfficer.dashboard');

Route::middleware(['role:user'])->get('/dashboard', [UserController::class, 'index'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//route for dynamic table for dashboard
Route::get('/admin/dashboard#', [UserController::class, 'showUsersByRole'])->name('showUsersByRole');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
