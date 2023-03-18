<?php

use App\Http\Controllers\sekolahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin-login');
});

Route::get('/login', function () {
    return view('admin-login');
});

Route::get('/dashboard', function () {
    return view('gov-dashboard');
});

Route::get('/dashboard', function () {
    return view('gov-dashboard');
});

Route::resource('sekolah',sekolahController::class);