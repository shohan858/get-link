<?php

use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [AdminController::class, 'dashboard']);
Route::get('/halaman_utama', [AdminController::class, 'halaman_utama']);
Route::get('/microsite', [AdminController::class, 'microsite']);
Route::get('/paket', [AdminController::class, 'paket']);
Route::get('/template', [AdminController::class, 'template']);
Route::get('/account', [AdminController::class, 'account']);
Route::get('/comment', [AdminController::class, 'comment']);
Route::get('/cms', [AdminController::class, 'cms']);
Route::get('/get_link', [AdminController::class, 'get_link']);
Route::get('/keunggulan', [AdminController::class, 'keunggulan']);
Route::get('/microsite1', [AdminController::class, 'microsite1']);
Route::get('/microsite2', [AdminController::class, 'microsite2']);
Route::get('/sponsor', [AdminController::class, 'sponsor']);
Route::get('/short_link', [AdminController::class, 'short_link']);
Route::get('/kategori', [AdminController::class, 'kategori']);

