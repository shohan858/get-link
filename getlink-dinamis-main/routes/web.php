<?php

use App\Http\Controllers\budgetController;
use App\Http\Controllers\CollabController;
use App\Http\Controllers\ComentController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\landing_pageController;
use App\Http\Controllers\microsite_link;
use App\Http\Controllers\micrositeController;
use App\Http\Controllers\MicrositeSlotController;
use App\Http\Controllers\PremiumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\shortlink_controller;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksiDetailController;
use App\Http\Controllers\update_profileController;
use App\Http\Controllers\user_micrositeController;
use App\Http\Controllers\usersControllers;
use App\Http\Controllers\VideoController;
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

Route::get('/', function () {
    return view('auth.login');
})->name('home');

Route::get('/asdfasdf', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::controller(GoogleController::class)->group(function() {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

Route::get('edit_profile/{id}', [update_profileController::class, 'index']);

Route::put('update_profile/{id}', [update_profileController::class, 'update'])->name('update_profile');

Route::get('dashboard', [landing_pageController::class, 'admin'])->name('dashboard');
Route::get('layout', [landing_pageController::class, 'edit_landing_page']);
Route::get('testing', [landing_pageController::class, 'index']);
Route::get('testing2', [landing_pageController::class, 'index2']);


Route::post('update_landing_page/{id}', [landing_pageController::class, 'update_landing_page']);
Route::post('update_collab/{id}', [landing_pageController::class, 'update_collab']);
Route::resource('/collab', CollabController::class);
Route::resource('/role', RoleController::class)->name('index','role.index');
Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
Route::resource('/comment', ComentController::class);   
Route::put('comment_show/{id}', [ComentController::class, 'update_show']);
Route::put('comment_hide/{id}', [ComentController::class, 'update_hide']);

Route::get('judul1', [landing_pageController::class, 'judul1'])->name('judul1');
Route::get('judul2', [landing_pageController::class, 'judul2'])->name('judul2');
Route::get('judul3', [landing_pageController::class, 'judul3'])->name('judul3');
Route::get('judul4', [landing_pageController::class, 'judul4'])->name('judul4');
Route::get('judul5', [landing_pageController::class, 'judul5'])->name('judul5');
Route::get('sponsor', [landing_pageController::class, 'sponsor'])->name('sponsor');
Route::get('keunggulan', [landing_pageController::class, 'keunggulan'])->name('keunggulan');

Route::get('budget', [budgetController::class, 'index'])->name('budget');

Route::resource('/microsite', micrositeController::class)->name('index','microsite')->name('edit','microsite.edit');
Route::resource('/konten', ContentController::class);
Route::resource('/video', VideoController::class);

Route::resource('/micrositeslot', MicrositeSlotController::class)->name('index','micrositeslot')->name('edit','micrositeslot.edit');

// Premium
Route::resource('/premium', PremiumController::class)->name('index','premium')->name('show','premium.show');

Route::get('/account', [usersControllers::class, 'account']);
Route::get('/transaksi_show', function() {
    return view('transaksi.show');
});

Route::get('/transaksi_show_admin', function() {
    return view('transaksi.index');
});

Route::resource('/transaksidetail', TransaksiDetailController::class);
Route::get('/transaksi/create/{id}', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi/{id}', [TransaksiController::class, 'store']);

Route::get('/kategori',[KategoriController::class,'kategori'])->name('kategori');
Route::get('/table/kategori',[KategoriController::class,'table_kategori'])->name('tabelkategori');
Route::get('/show_update/{id}',[KategoriController::class,'show_update'])->name('editkategori');
Route::get('/create_kategori',[KategoriController::class,'create_kategori'])->name('createkategori');
Route::post('/create',[KategoriController::class,'store']);

Route::post('/update/{id}',[KategoriController::class,'update']);

route::get('/destroy/{id}',[KategoriController::class,'destroy']);

Route::get('tampil/{link}', [microsite_link::class, 'index']);

Route::post('store_template', [micrositeController::class, 'store_template']);
Route::get('tambah_template', [micrositeController::class, 'tambah_template']);
Route::resource('user_pages', micrositeController::class);


Route::get('microsite_edit', [user_micrositeController::class, 'microsite_edit']);
Route::get('microsite_reguler', [user_micrositeController::class, 'user_reguler']);
Route::get('microsite_langganan', [user_micrositeController::class, 'user_langganan']);
Route::get('microsite_user', [user_micrositeController::class, 'user_dashboard']);
Route::get('tambah_microsite', [user_micrositeController::class, 'create']);
Route::get('template_microsite', [user_micrositeController::class, 'template_microsite']);
Route::get('buat_microsite', [user_micrositeController::class, 'create_microsite']);
Route::delete('delete_microsite/{id}', [micrositeController::class, 'destroy_microsite']);

Route::get('tampil/{link}', [micrositeController::class, 'viewTemplate']);

require __DIR__.'/auth.php';
