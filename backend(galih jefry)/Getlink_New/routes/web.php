<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CollabController;
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

Route::post('generate-shorten-link', [HomeController::class, 'store'])->name('generate.shorten.link.post');
// Route::get('/{code}', [HomeController::class, 'shortenLink'])->name('shorten.link');
Route::group(['prefix' => 'getlink.id'], function () {
    Route::get('/{code}', [HomeController::class, 'shortenLink'])->name('shorten.link');
});

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
    Route::delete('/microsite/{id}', [Dashboard_User_Controller::class, 'delete'])->name('microsite.delete');
});

Route::middleware(['authadmin'])->group(function () {
    Route::get('/admin_get', [AdminController::class, 'index'])->name('admin');
    Route::get('/layout', [AdminController::class, 'layout'])->name('layout');
    Route::get('/judul1', [AdminController::class, 'judul1'])->name('judul1');
    Route::get('/judul2', [AdminController::class, 'judul2'])->name('judul2');
    Route::get('/judul3', [AdminController::class, 'judul3'])->name('judul3');
    Route::get('/judul4', [AdminController::class, 'judul4'])->name('judul4');
    Route::get('/judul5', [AdminController::class, 'judul5'])->name('judul5');
    Route::get('/sponsor', [AdminController::class, 'sponsor'])->name('sponsor');
    Route::get('/keunggulan', [AdminController::class, 'keunggulan'])->name('keunggulan');
    Route::post('update_landing_page/{id}', [AdminController::class, 'update_landing_page']);
    Route::get('getdata/microsite', [AdminController::class, 'getdata'])->name('getdatamicrosite');
    Route::get('/microsite', [AdminController::class, 'table_microsite'])->name('table_microsite');
    Route::get('/getdata/akun', [AdminController::class, 'getdata_akun'])->name('getdata_akun');
    Route::get('/account', [AdminController::class, 'table_akun'])->name('table_akun');
    Route::get('/getdata/kategori', [AdminController::class, 'getdata_kategori'])->name('getdata_kategori');
    Route::get('/table/kategori', [AdminController::class, 'table_kategori'])->name('table_kategori');
    Route::get('/getdata/template', [AdminController::class, 'getdata_template'])->name('getdata_template');
    Route::get('/table_template', [AdminController::class, 'table_template'])->name('table_template');
    Route::post('/kategori/tambah', [AdminController::class, 'tambah_kategori'])->name('tambah_kategori');
    // Route::get('/kategori/{id}', [AdminController::class, 'hapus_kategori'])->name('hapus_kategori');
    Route::delete('/kategori/{id}', [AdminController::class, 'destroy'])->name('hapus_kategori');
    Route::resource('/collab', CollabController::class);
});
