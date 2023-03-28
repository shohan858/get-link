<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Dashboard_User_Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
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
//     return view('welcome');
// });

// Landing Page GetLink
Route::get('/', [HomeController::class, 'home'])->name('home');

// Login And Register
Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/register', [SessionController::class, 'register']);
Route::post('/register/create', [SessionController::class, 'create']);
Route::get('/logout', [SessionController::class, 'logout']);

Route::middleware(['authuser'])->group(function () {
    // Dashboard User
    Route::get('/dashboard_user', [Dashboard_User_Controller::class, 'dashboard'])->name('dashboard_user');
    Route::get('/page2', [Dashboard_User_Controller::class, 'page2'])->name('page2');
    Route::get('/page3/{id}', [Dashboard_User_Controller::class, 'page3'])->name('page3');
    Route::get('/page4/{id}/{id_template}', [Dashboard_User_Controller::class, 'page4'])->name('page4');
    Route::get('/page5', [Dashboard_User_Controller::class, 'page5'])->name('page5');
    Route::get('/regular', [Dashboard_User_Controller::class, 'regular'])->name('regular');
    Route::get('/langganan', [Dashboard_User_Controller::class, 'langganan'])->name('langganan');

    Route::post('/page3/kirim/id_kategori', [Dashboard_User_Controller::class, 'kirim_id_kategori'])->name('page3.id_kategori');
    Route::get('buat_microsite/{id_kategori}/{id_template}', [Dashboard_User_Controller::class, 'create_microsite']);

    Route::post('buatmicrosite/nambah_microsite', [Dashboard_User_Controller::class, 'nambah_microsite'])->name('nambah_microsite');
    Route::get('rubah_microsite/{id_kategori}/{id_template}', [Dashboard_User_Controller::class, 'edit_microsite']);
});

Route::middleware(['authadmin'])->group(function () {
    Route::get('/admin_get', [AdminController::class, 'index'])->name('admin');
});


