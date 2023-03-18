<?php

use App\Http\Controllers\sekolahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('admin-login');
});

Route::get('/login', function(){
    return view('admin-login');
});

Route::get('/dashboard', function () {
    return view('gov-dashboard');
});

Route::get('/dashboard', function () {
    return view('gov-dashboard');
});

Route::resource('sekolah',sekolahController::class);

//Admin rute
Route::get('/login', function(){
    return view('admin-login');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route User
Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/home",[HomeController::class, 'userHome'])->name("home");
});
// Route Editor
Route::middleware(['auth','user-role:editor'])->group(function()
{
    Route::get("/editor/home",[HomeController::class, 'editorHome'])->name("editor.home");
});
// Route Admin
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/home",[HomeController::class, 'adminHome'])->name("admin.home");
});


