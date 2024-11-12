<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketOfficerController extends Controller
{
    public function index()
    {
        // Return the admin dashboard view (create this view as needed)
        return view('ticketOfficer.dashboard'); 
    }
}
