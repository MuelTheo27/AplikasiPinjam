<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $bookings = Booking::where('status', 'approved')->get();
        return view('admin', compact('bookings'));
    }
}
