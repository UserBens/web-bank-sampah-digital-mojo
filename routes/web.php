<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
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
Route::get('/dashboard/beranda', [DashboardController::class, 'beranda']);

