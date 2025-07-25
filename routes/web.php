<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;

// Autentikasi dan login
Route::get('/login', function () {
    return view('Autentikasi');
})->name('login');

Route::get('/', function () {
    return view('Autentikasi');
})->name('Autentikasi');

// Calendar routes
Route::get('calendar', [CalendarController::class, 'index'])->name('calendar');
Route::post('calStore', [CalendarController::class, 'store'])->name('calendar.store');
Route::delete('calDestroy/{id}', [CalendarController::class, 'destroy']);
Route::put('calUpdate/{id}', [CalendarController::class, 'update'])->name('calendar.update');

// Guest routes
Route::get('/Ruangan', function () {
    return view('ruanganGuest');
})->name('RuanganAkuGuest');  // Gunakan nama ini di blade untuk akses guest ruangan

// Komen dulu kalau tidak dipakai
// Route::get('/Ruangan', function () {
//     return view('Ruangan');
// })->name('RuanganAku');

Route::get('/Kendaraan', function () {
    return view('Kendaraan');
})->name('KendaraanAku');

Route::get('/Barang', function () {
    return view('Barang');
})->name('BarangAku');

// Admin dashboard main page
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

// Group route dengan prefix 'admin' untuk halaman admin lainnya
Route::prefix('admin')->group(function () {

    Route::get('/Ruangan', function () {
        return view('Ruangan');
    })->name('RuanganAku');

    Route::get('/Kendaraan', function () {
        return view('Kendaraan');
    })->name('KendaraanAku');

    Route::get('/Barang', function () {
        return view('Barang');
    })->name('BarangAku');
    
    // Route admin approval page
    Route::get('/approval', function () {
        return view('approval');
    })->name('admin.approval');

    // Route halaman upload ruangan
    Route::get('/upload-ruangan', function () {
        return view('upload_ruangan');
    })->name('upload.ruangan');

    // Route halaman upload barang
    Route::get('/upload-barang', function () {
        return view('upload_barang');
    })->name('upload.barang');

    // Route halaman upload kendaraan
    Route::get('/upload-kendaraan', function () {
        return view('upload_kendaraan');
    })->name('upload.kendaraan');

    // Route user management admin
    Route::get('/user-management', function () {
        return view('userManagementAdmin');
    })->name('admin.userManage');
});

Route::get('/admin/user-management/edit', function () {
    return view('userManagementAdmin');
})->name('admin.userManage.edit');