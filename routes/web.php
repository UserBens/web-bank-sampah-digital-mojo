<?php

use App\Http\Controllers\BerandaadminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BerandaimageController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// ini halaman pengunjung ges
Route::get('/', [BerandaController::class, 'beranda']);
Route::get('/tentangkami', [BerandaController::class, 'tentangkami']);
Route::get('/postingan', [BerandaController::class, 'postingan']);
Route::get('/produk', [BerandaController::class, 'produk']);
Route::get('/kontak', [BerandaController::class, 'kontak']);

//ini halaman admin gess
Route::get('/login', [LoginController::class, 'login']);
Route::get('/dashboard', [DashboardController::class, 'index']);


Route::resource('/dashboard/beranda', BerandaimageController::class);
// Route::resource('dashboard/beranda', BerandaimageController::class)->parameters([
//     'beranda' => 'postberandaimage' // Ganti 'beranda' dengan 'postberandaimage'
// ]);

Route::get('/dashboard/postingan', [DashboardController::class, 'postingan']);
Route::get('/dashboard/produk', [DashboardController::class, 'produk']);
Route::get('/dashboard/tentangkami', [DashboardController::class, 'tentangkami']);
Route::get('/dashboard/kontak', [DashboardController::class, 'kontak']);



