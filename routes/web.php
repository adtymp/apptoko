<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Auth;

Route::get('/', [ProductController::class, 'index'])->name('dashboard');

Route::get('/register-partner', [registerController::class, 'registrasi'])->name('register');
Route::post('/partnersubmit', [registerController::class, 'submit'])->name('submit');

Route::get('/partner', [registerController::class, 'login'])->name('partner');
Route::post('/partnerlogin', [registerController::class, 'sigin'])->name('sigin');

Route::get('/profile-partner', [registerController::class, 'showPartnerPage'])->name('ppartner')->middleware('auth');

Route::post('/product/submit', [ProductController::class, 'submit'])->name('products.submit');
// Route::get('/profile-partner', [ProductController::class, 'show'])->name('profile');
