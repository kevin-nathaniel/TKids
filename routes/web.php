<?php

use App\Http\Controllers\sekolahController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SiswaController;

Auth::routes();

Route::get('/', function () {
    return view('login-admin');
});

Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');

Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login');



// Route::get('/', function () {
//     return view('login-admin.');
// });

// Route::get('/login', function(){
//     return view('login-admin.');
// });

Route::get('/dashboard', function () {
    return view('gov-dashboard');
});

Route::get('/dashboard-school', function () {
    return view('school-dashboard');
});


Route::resource('sekolah', sekolahController::class);

Route::resource('nilai', SiswaController::class);

//Admin rute
// Route::get('/login', function(){
//     return view('admin-login');
// });

// Route::get('/das// hboard-school', [App\Http\Controllers\HomeController::class, 'index']);

// Route::prefix('admin// ')->middleware(['auth', 'isAdmin']) -> group(function()
// {
//     Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
// // });
