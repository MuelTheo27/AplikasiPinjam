<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Auth\SSOController;
use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('calendar', [CalendarController::class, 'index'])->name('calendar');
Route::post('calStore', [CalendarController::class, 'store'])->name('calendar.store');
Route::delete('calDestroy/{id}', [CalendarController::class, 'destroy']);
Route::put('calUpdate/{id}', [CalendarController::class, 'update'])->name('calendar.update');

Route::get('/', function () {
    return view('Autentikasi');
})->name('Autentikasi');

Route::get('/Ruangan', function () {
    return view('Ruangan');
})->name('RuanganAku');

Route::get('/Kendaraan', function () {
    return view('Kendaraan');
})->name('KendaraanAku');

Route::get('/Barang', function () {
    return view('Barang');
})->name('BarangAku');


// Admin Dashboard Page
Route::get('/admin', function () {
    return view('admin');
})->name('admin.dashboard');


Route::get('/admin/upload-category', function () {
    return view('upload_category');
})->name('upload.category');

Route::get('/admin/approval', function () {
    return view('approval');
})->name('admin.approval');

