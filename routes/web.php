<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Home;

Route::get('/', function () {
    return view('home');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
});

Route::get('/',[Home::class, 'index'])->name('home');
Route::get('/about',[Home::class, 'about'])->name('about');
Route::get('/service',[Home::class, 'service'])->name('service');
Route::get('/team',[Home::class, 'team'])->name('team');
Route::get('/contact',[Home::class, 'contact'])->name('contact');
Route::get('/testimonial',[Home::class, 'testimonial'])->name('testimonial');
Route::get('/checkout',[Home::class, 'checkout'])->name('checkout');
Route::get('/thankyou',[Home::class, 'thankyou'])->name('thankyou');
Route::get('/shop',[Home::class, 'shop'])->name('shop');
Route::get('/login',[Home::class, 'loginview'])->name('login');
Route::get('/register',[Home::class, 'registerview'])->name('register');
Route::get('/forgotpass',[Home::class, 'forgotpass'])->name('forgotpass');