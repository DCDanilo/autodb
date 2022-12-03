<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [ HomeController::class, 'homeView' ]);

// User Routes
Route::get('/profile', function(){
    return view('user.profile');
});

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'store']);


Route::get('/login', function(){
    return view('user.login');
});

Route::get('/logout', function(){
    return view('user.logout');
});



