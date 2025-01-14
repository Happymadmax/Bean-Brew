<?php

namespace App\Http\Controllers;


use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = booking::all();
    
            return view('bookings.index', [
                'bookings' => $bookings
            ]);
    }
    
    public function show(Booking $booking)
    {
        return view('bookings.show', ['booking' => $booking]);
    }
}