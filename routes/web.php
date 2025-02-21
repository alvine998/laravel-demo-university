<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/program-pendidikan', function () {
    return view('academic-program');
});
Route::get('/informasi-beasiswa', function () {
    return view('scholarship-info');
});
Route::get('/kehidupan-mahasiswa', function () {
    return view('facilities');
});
Route::get('/jelajahi-yogyakarta', function () {
    return view('explore-city');
});

Route::get('/pusat-studi-laboratorium', function () {
    return view('study-center');
});
Route::get('/riset-pengajaran', function () {
    return view('research');
});
Route::get('/jurnal', function () {
    return view('journal');
});
Route::get('/konferensi-dan-seminar', function () {
    return view('conference');
});

Route::get('/pengabdian-dakwah', function () {
    return view('dedication');
});
Route::get('/lingkungan-keberlanjutan', function () {
    return view('environment');
});
Route::get('/simpul-tumbuh', function () {
    return view('growth');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/main/users', function () {
    return view('main.users');
})->middleware(['auth', 'verified'])->name('users');

Route::middleware('auth')->group(function () {
    Route::resource('users', RegisteredUserController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
