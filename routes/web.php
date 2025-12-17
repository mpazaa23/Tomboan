<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminGalleryController;
use App\Models\SiteSetting;


Route::get('/Home', function () {
    return view('Home');
});
Route::get('/Sejarah', function () {
    return view('Sejarah');
});
Route::get('/MakananTradisional', function () {
    return view('MakananTradisional');
});
Route::get('/ReliefUkiran', function () {
    return view('ReliefUkiran');
});
Route::get('/PengelolaSitus', function () {
    return view('PengelolaSitus');
});
Route::get('/Contact', function () {
    $setting = SiteSetting::first();
    return view ('Contact', compact('setting'));
});

Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout' ])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::put('/admin/settings', [AdminController::class, 'updateSettings'])->name('admin.settings.update');
    Route::get('/admin/gallery', [AdminGalleryController::class, 'index'])->name('admin.gallery');
    Route::post('/admin/gallery', [AdminGalleryController::class, 'store'])->name('admin.gallery.store');
    Route::delete('/admin/gallery/{id}', [AdminGalleryController::class, 'destroy'])->name('admin.gallery.destroy');
    Route::delete('/admin/reservation/{id}', [AdminController::class, 'deleteReservation'])->name('reservation.destroy');
    Route::delete('/admin/experience/{id}', [AdminController::class, 'deleteExperience'])->name('experience.destroy');
});

Route::get('/register', [App\Http\Controllers\AdminController::class, 'showRegister'])->name('register');
Route::post('/register', [App\Http\Controllers\AdminController::class, 'processRegister'])->name('register.process');
Route::get('/Gallery', [ExperienceController::class, 'index']);
Route::post('/experience', [ExperienceController::class, 'store'])->name('experience.store');
Route::put('/experience/{id}', [ExperienceController::class, 'update'])->name('experience.update');
Route::post('/reservasi', [ReservationController::class, 'store'])->name('reservasi.store');
Route::put('/reservasi/{id}', [AdminController::class, 'updateReservasi'])->name('reservasi.update');
Route::put('/admin/experience/{id}/approve', [AdminController::class, 'approveExperience'])->name('experience.approve');