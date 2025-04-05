<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Auth\Login;
use App\Http\Controllers\AdminController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
// Admin Authentication Route
// Route::get('/admin', Login::class)->name('admin.login');
// Route correcte pour Livewire
// Route::get('/admin', \App\Http\Livewire\Admin\Auth\Login::class)->name('admin.login');
Route::get('/admin', Login::class)->name('admin.login');


// Admin Middleware Protected Routes
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});