<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\budget;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\micrositeController;
use App\Http\Controllers\MicrositeSlotController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksiDetailController;
use App\Http\Controllers\usersControllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);

Route::resource('role', RoleController::class);
// Route::resource('user', usersControllers::class);
Route::resource('microsite', micrositeController::class);
Route::resource('content', ContentController::class);
Route::resource('video', VideoController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('transaksidetail', TransaksiDetailController::class);
Route::resource('micrositeslot', MicrositeSlotController::class);
Route::resource('budget', budget::class);
