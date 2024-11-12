<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        // Return the admin dashboard view (create this view as needed)
        return view('driver.dashboard');  // Ensure you have a view for admin dashboard
    }
}
