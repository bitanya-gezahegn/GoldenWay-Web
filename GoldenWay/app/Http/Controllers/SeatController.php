<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function selectSeat(Request $request, $seatId)
     {
         // Logic to select a seat by ID
         $seat = Seat::findOrFail($seatId);
         if($seat->available=="true"){
            $seat->available="false";
            return redirect()->back()->with('message', 'Seat selected successfully');
         }
       
 
         // You can add any selection logic here, e.g., marking the seat as reserved
         // For example, $seat->status = 'reserved'; $seat->save();
 
         return redirect()->back()->with('message', 'Seat can not be selected successfully');
     }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Seat $seat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seat $seat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seat $seat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seat $seat)
    {
        //
    }
}
