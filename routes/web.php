<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/register-partner', [registerController::class, 'registrasi'])->name('register');
Route::post('/partnersubmit', [registerController::class, 'submit'])->name('submit');

Route::get('/partner', [registerController::class, 'login'])->name('partner');
Route::post('/partnerlogin', [registerController::class, 'sigin'])->name('sigin');

Route::get('/profile-partner', function () {
    $nama = Auth::user()->name;
    $email = Auth::user()->email;
    return view('ppartner', compact('nama', 'email'));
})->name('ppartner')->middleware('auth');

