<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationsOfficerController extends Controller
{
    public function index()
    {
        // Return the admin dashboard view (create this view as needed)
        return view('operationsOfficer.dashboard');  // Ensure you have a view for admin dashboard
    }
}
