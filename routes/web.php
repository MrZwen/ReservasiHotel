<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KamarController;
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
    // Login
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class, 'authenticating']);

     //register
     Route::get('/register', [AuthController::class, 'register'])->name('register');
     Route::post('/register', [AuthController::class, 'store']);
});

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth'])->group(function(){
    // Admin
    Route::get('/admin', [UserController::class, 'admin']);
    Route::get('/settings', [UserController::class, 'settings']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/setting', [UserController::class, 'settings']);
    // Start Kamar
    Route::get('/kamar', [KamarController::class, 'kamar']);
    Route::post('/admin/tambah-kamar', [KamarController::class, 'add']);
    Route::get('/admin/edit-kamar/{id}', [KamarController::class, 'showEditModal'])->name('edit-kamar');
    Route::put('admin/edit-kamar', [KamarController::class, 'editKamar'])->name('edit-kamar.submit');
    Route::get('admin/hapus-kamar/{id}', [KamarController::class, 'delete'])->name('hapus-kamar');
    // End Kamar
    Route::get('/user', [DataController::class, 'users']);
    Route::get('/logout', [AuthController::class, 'logout']);

    // Pegawai
    Route::get('/pegawai', [UserController::class, 'pegawai']);
});