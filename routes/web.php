<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth', 'verified')->group(function () {
    // user section
    Route::get('/dashboard', [UserController::class, 'view'])->name('dashboard');
    Route::get('/user/raids', [UserController::class, 'raids'])->name('user.raids');
    Route::get('/user/sendmail', [UserController::class, 'sendmail'])->name('user.sendmail');
    Route::post('/user/send-mail', [UserController::class, 'mail'])->name('user.send');

    Route::get('/user/subscribe', [UserController::class, 'subscribe'])->name('user.subscribe');
});

require __DIR__ . '/auth.php';
