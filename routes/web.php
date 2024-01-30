<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

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

Route::middleware(['auth'])->group(function(){
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::get('/', function () {
    if(Auth::user()){
        $data = Transaksi::where('id_users', Auth::user()->id)->get();
        return view('index', ['data'=> $data]);
    } else {
        return view('index');
    }
});

Route::middleware(['auth', 'checkRole:admin'])->group(function(){
    // Admin
    Route::get('/admin', [UserController::class, 'admin']);
    Route::get('/settings', [UserController::class, 'settings']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/setting', [UserController::class, 'settings']);
    // Start Kamar
    Route::get('/kamar', [KamarController::class, 'kamar']);
    Route::post('/admin/tambah-kamar', [KamarController::class, 'add']);
    Route::put('admin/edit-kamar', [KamarController::class, 'editKamar'])->name('edit-kamar.submit');
    Route::get('admin/hapus-kamar/{id}', [KamarController::class, 'delete'])->name('hapus-kamar');
    // End Kamar

    // Users
    Route::get('/user', [DataController::class, 'users']);
    // Route::get('/admin/edit-users/{id}', [DataController::class, 'showEditModalUser'])->name('edit-users');
    Route::put('admin/edit-users', [DataController::class, 'editUsers'])->name('edit-users.submit');
    Route::get('admin/hapus-users/{id}', [DataController::class, 'delete'])->name('hapus-users');
    // End Users

    // Transaksi
    Route::get('/transaksi', [DataController::class, 'transaksiadmin']);
    Route::post('/admin/verifikasi-transaksi', [DataController::class, 'verifikasi']);


    // logout
    // Route::get('/logout', [AuthController::class, 'logout']);
});
    Route::middleware(['auth', 'checkRole:pegawai'])->group(function(){
    // Pegawai
    Route::get('/pegawai', [UserController::class, 'pegawai']);

    
    // Start Kamar
    Route::get('pegawai-kamar', [KamarController::class, 'kamarpegawai']);
    Route::post('/pegawai/tambah-kamar', [KamarController::class, 'add']);
    Route::get('/pegawai/edit-kamar/{id}', [KamarController::class, 'showEditModal'])->name('edit-kamar');
    Route::put('pegawai/edit-kamar', [KamarController::class, 'editKamar'])->name('edit-kamar.submit');
    Route::get('pegawai/hapus-kamar/{id}', [KamarController::class, 'delete'])->name('hapus-kamar');
    // End Kamar

    // Users
    Route::get('/pegawai-user', [DataController::class, 'pegawaiuser']);

    // Transaksi
    Route::get('/transaksi-pegawai', [DataController::class, 'transaksipegawai']);
    Route::post('/pegawai/verifikasi-transaksi', [DataController::class, 'verifikasipegawai']);
    
});
// Costumer
Route::get('/costumer', [DataController::class, 'transaksicostumer']);

 // Transaksi
 Route::post('/transaksi', [DataController::class, 'simpantransaksi']);