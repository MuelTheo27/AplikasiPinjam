<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('Autentikasi');
})->name('login');

Route::get('/', function () {
    return view('Autentikasi');
})->name('Autentikasi');

Route::get('calendar', [CalendarController::class, 'index'])->name('calendar');
Route::post('calStore', [CalendarController::class, 'store'])->name('calendar.store');
Route::delete('calDestroy/{id}', [CalendarController::class, 'destroy']);
Route::put('calUpdate/{id}', [CalendarController::class, 'update'])->name('calendar.update');

Route::get('/Ruangan', function () {
    return view('ruanganGuest');
})->name('RuanganAkuGuest'); 

Route::get('/Kendaraan', function () {
    return view('Kendaraan');
})->name('KendaraanAku');

Route::get('/Barang', function () {
    return view('Barang');
})->name('BarangAku');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

// Group route dengan prefix 'admin' untuk halaman admin lainnya
Route::prefix('admin')->group(function () {

    Route::delete('/user-manage/{id}', [AdminController::class, 'destroy'])->name('admin.userManage.destroy');

    Route::get('/user-management', function () {
        return view('userManagement');
    })->name('admin.userManage');

    Route::get('/Ruangan', function () {
        return view('Ruangan');
    })->name('RuanganAku');

    Route::get('/Kendaraan', function () {
        return view('Kendaraan');
    })->name('KendaraanAku');

    Route::get('/Barang', function () {
        return view('Barang');
    })->name('BarangAku');
    
    Route::get('/approval', function () {
        return view('approval');
    })->name('admin.approval');

    Route::get('/upload-ruangan', function () {
        return view('upload_ruangan');
    })->name('upload.ruangan');

    Route::get('/upload-barang', function () {
        return view('upload_barang');
    })->name('upload.barang');

    Route::get('/upload-kendaraan', function () {
        return view('upload_kendaraan');
    })->name('upload.kendaraan');

    Route::get('/user-management/edit', function () {
        return view('userManagementAdmin');
    })->name('admin.userManage.edit');

    Route::get('/pastEvent', function () {
        return view('pastEvent');
    })->name('admin.pastEvent');
});