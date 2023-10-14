<?php

use App\Http\Controllers\BerandaadminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BerandaimageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

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

Route::get('/detail-postingan', [BerandaController::class, 'detailpostingan']);
Route::get('/detail-produk/{id}', [BerandaController::class, 'detailproduk']);
Route::get('/detail-postingan/{id}', [BerandaController::class, 'detailpostingan']);
Route::get('/produk', [BerandaController::class, 'produk']);
Route::get('/kontak', [BerandaController::class, 'kontak']);

//ini halaman admin gess
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::resource('/dashboard/beranda', BerandaimageController::class)->middleware('auth');
// Route::resource('dashboard/beranda', BerandaimageController::class)->parameters([
//     'beranda' => 'postberandaimage' // Ganti 'beranda' dengan 'postberandaimage'
// ]);


Route::get('/dashboard/produk', [DashboardController::class, 'produk']);
Route::get('/dashboard/tentangkami', [DashboardController::class, 'tentangkami']);
Route::get('/dashboard/kontak', [DashboardController::class, 'kontak']);

Route::resource('/dashboard/postingan', PostController::class)->middleware('auth');
Route::resource('/dashboard/produk', ProductController::class)->middleware('auth');
// Route::resource('/dashboard/postingan', PostController::class)
//     ->except('show')->middleware('auth'); 



