<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;


//ROute Beranda
Route::get('/', function () {
    return view('index');
})->name('index'); //Route untuk menampilkan halaman beranda

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); // Route untuk menampilkan halaman dashboard setelah login

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); // Route untuk menampilkan halaman profil pengguna
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); // Route untuk memperbarui profil pengguna
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); // Route untuk menghapus profil pengguna
});
//Route Search
Route::get('/search', [SearchController::class, 'index'])->name('search'); // Route untuk menampilkan form pencarian



//Route Booking
Route::get('/booking/{schedule}', [BookingController::class, 'ShowBookingForm'])->name('booking.form'); // Route untuk menampilkan form booking
Route::post('/booking/{schedule}', [BookingController::class, 'storeBooking'])->name('booking.store'); // Route untuk menyimpan data booking

//Route Confirmation (sementara)
Route::get('/booking/confirmation/{booking}', [BookingController::class, 'confirmation'])->name('booking.confirmation');

require __DIR__.'/auth.php';
