<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CollabController;
use App\Http\Controllers\Dashboard_User_Controller;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MicrositeController;
use App\Http\Controllers\ResetPasswordController;
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

Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});
Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('microsite/{link}', [MicrositeController::class, 'index'])->name('microsite');
Route::get('/g{code}', [HomeController::class, 'shortenLink'])->name('shorten.link');
Route::post('generate-shorten-link', [HomeController::class, 'store'])->name('generate.shorten.link.post');
Route::group(['prefix' => 'getlink.id'], function () {
    Route::get('/g{code}', [HomeController::class, 'shortenLink'])->name('shorten.link');
});

// Login And Register
Route::get('/sesi', [SessionController::class, 'index'])->name('sesi');
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/register', [SessionController::class, 'register']);
Route::post('/register/create', [SessionController::class, 'create']);
Route::get('/logout', [SessionController::class, 'logout']);

Route::middleware(['authuser'])->group(function () {
    // Dashboard User
    Route::get('/dashboard_user', [Dashboard_User_Controller::class, 'dashboard'])->name('dashboard_user');
    Route::get('/buat_microsite', [Dashboard_User_Controller::class, 'page2'])->name('page2');
    Route::get('/buat_tautan', [Dashboard_User_Controller::class, 'buat_tautan'])->name('buat_tautan');
    Route::get('/selesai_tautan', [Dashboard_User_Controller::class, 'selesai_tautan'])->name('selesai_tautan');
    Route::get('/buat_microsite/{id}', [Dashboard_User_Controller::class, 'page3'])->name('page3');
    Route::get('/buat_microsite/{id}/{id_template}', [Dashboard_User_Controller::class, 'page4'])->name('page4');
    Route::get('/page5', [Dashboard_User_Controller::class, 'page5'])->name('page5');
    Route::get('/regular', [Dashboard_User_Controller::class, 'regular'])->name('regular');
    Route::get('/langganan', [Dashboard_User_Controller::class, 'langganan'])->name('langganan');

    Route::post('/page3/kirim/id_kategori', [Dashboard_User_Controller::class, 'kirim_id_kategori'])->name('page3.id_kategori');
    Route::get('buat_microsite/{id_kategori}/{id_template}', [Dashboard_User_Controller::class, 'create_microsite']);

    Route::post('buatmicrosite/nambah_microsite', [Dashboard_User_Controller::class, 'nambah_microsite'])->name('nambah_microsite');
    Route::get('rubah_microsite/{id_kategori}/{id_template}/{id_microsite}', [Dashboard_User_Controller::class, 'edit_microsite']);
    Route::delete('/microsite/{id}', [Dashboard_User_Controller::class, 'delete'])->name('microsite.delete');

    Route::post('update_microsite/{id_microsite}', [Dashboard_User_Controller::class, 'update_microsite'])->name('update_microsite');
    Route::post('update_status_microsite', [Dashboard_User_Controller::class, 'update_status_microsite'])->name('update_status_microsite');
    Route::post('hapus_komponen_microsite', [Dashboard_User_Controller::class, 'hapus_komponen_microsite'])->name('hapus_komponen_microsite');
    Route::post('tambah_komponen_microsite', [Dashboard_User_Controller::class, 'tambah_komponen_microsite'])->name('tambah_komponen_microsite');
    Route::post('update_value_microsite', [Dashboard_User_Controller::class, 'update_value_microsite'])->name('update_value_microsite');
    Route::post('update_image_microsite', [Dashboard_User_Controller::class, 'update_image_microsite'])->name('update_image_microsite');
    Route::post('update_background_microsite', [Dashboard_User_Controller::class, 'update_background_microsite'])->name('update_background_microsite');
    Route::post('update_konten_microsite', [Dashboard_User_Controller::class, 'update_konten_microsite'])->name('update_konten_microsite');
    
    Route::get('/tambah_slot_microsite/{id}', [Dashboard_User_Controller::class, 'tambah_slot_microsite']);
    Route::get('/shortlink', [Dashboard_User_Controller::class, 'shortlinks']);
    Route::get('/shortlink/{id}', [Dashboard_User_Controller::class, 'shortlinks_edit']);
    ROute::get('/shortlink_create', [Dashboard_User_Controller::class, 'shortlinks_create']);
    Route::put('/shortlinks_update/{id}', [Dashboard_User_Controller::class, 'shortlinks_update']);
    Route::delete('/shortlink_delete/{id}', [Dashboard_User_Controller::class, 'shortlinks_delete']);
});

Route::middleware(['authadmin'])->group(function () {
    Route::get('/admin_get', [AdminController::class, 'index'])->name('admin');
    Route::get('/halaman_utama', [AdminController::class, 'halaman_utama']);

    Route::get('/get_link', [AdminController::class, 'get_link']);
    Route::get('/sponsor', [AdminController::class, 'sponsor']);
    Route::get('/short_link', [AdminController::class, 'short_link']);
    Route::get('/microsite1', [AdminController::class, 'microsite1']);
    Route::get('/microsite2', [AdminController::class, 'microsite2']);
    Route::get('/cms', [AdminController::class, 'cms']);
    Route::get('/keunggulan', [AdminController::class, 'keunggulan']);

    Route::post('update_landing_page/{id}', [AdminController::class, 'update_landing_page']);
    Route::get('getdata/microsite', [AdminController::class, 'getdata'])->name('getdatamicrosite');
    Route::get('/microsite_admin', [AdminController::class, 'table_microsite'])->name('table_microsite');
    Route::get('/getdata/akun', [AdminController::class, 'getdata_akun'])->name('getdata_akun');
    Route::get('/getdata/akun/user', [AdminController::class, 'getdata_akun_user'])->name('getdata_akun_user');
    Route::get('/account', [AdminController::class, 'table_akun'])->name('table_akun');
    Route::get('/budget', [AdminController::class, 'budget']);
    Route::get('/getdata/kategori', [AdminController::class, 'getdata_kategori'])->name('getdata_kategori');
    Route::get('/kategori', [AdminController::class, 'table_kategori'])->name('table_kategori');
    Route::get('/getdata/template', [AdminController::class, 'getdata_template'])->name('getdata_template');
    Route::get('/template', [AdminController::class, 'table_template'])->name('table_template');
    Route::post('/kategori/tambah', [AdminController::class, 'tambah_kategori'])->name('tambah_kategori');
    Route::delete('/kategori/{id}', [AdminController::class, 'destroy'])->name('hapus_kategori');
    Route::get('/get_paket_microsite', [AdminController::class, 'get_paket_microsite'])->name('get_paket_microsite');
    Route::delete('/delete_paket_microsite/{id}', [AdminController::class, 'delete_paket_microsite'])->name('delete_paket_microsite');
    Route::post('/tambah_paket_microsite', [AdminController::class, 'tambah_paket_microsite'])->name('tambah_paket_microsite');
    Route::get('/paket', [AdminController::class, 'paket_microsite'])->name('paket_microsite');
    Route::resource('/collab', CollabController::class);
    Route::post('/template/tambah', [AdminController::class, 'tambah_template'])->name('tambah_template');
    Route::delete('/template/{id}', [AdminController::class, 'destroy_template'])->name('hapus_template');
    Route::get('/edit_template/{id}', [AdminController::class, 'edit_template'])->name('edit_template');
    Route::put('/update_template/{id}', [AdminController::class, 'update_template'])->name('update_template');
    Route::get('/edit_paket/{id}', [AdminController::class, 'edit_paket'])->name('edit_paket');
    Route::put('/update_paket/{id}', [AdminController::class, 'update_paket'])->name('update_paket');

    Route::get('/preview/{halaman}', [AdminController::class, 'preview'])->name('preview');
});
