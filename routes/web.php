<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class, 'authenticating']);
});

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [UserController::class, 'admin']);
    Route::get('/settings', [UserController::class, 'settings']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/setting', [UserController::class, 'settings']);
    Route::get('/kamar', [UserController::class, 'kamar']);
    Route::get('/logout', [AuthController::class, 'logout']);
});