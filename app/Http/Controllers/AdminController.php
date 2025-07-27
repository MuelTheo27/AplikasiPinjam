<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $bookings = Booking::where('status', 'approved')->get();
        return view('admin', compact('bookings'));
    }

    public function destroy($id)
    {
        dd("Method destroy dipanggil dengan ID: " . $id);

        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.userManage')->with('success', 'User berhasil dihapus');
    }
}
