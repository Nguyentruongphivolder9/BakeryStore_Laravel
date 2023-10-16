<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('category', CategoryController::class);
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/thankyou', [HomeController::class, 'thankyou'])->name('thankyou');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/login', [HomeController::class, 'loginview'])->name('login');
Route::get('/register', [HomeController::class, 'registerview'])->name('register');
Route::get('/forgotpass', [HomeController::class, 'forgotpass'])->name('forgotpass');
