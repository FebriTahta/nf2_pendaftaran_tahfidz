<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramCont;
use App\Http\Controllers\FormPendaftaran;
use App\Http\Controllers\PageCont;
use App\Http\Controllers\BrosurController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\ProfileCOntroller;
use App\Http\Controllers\KontenController;
use App\Http\Middleware\CheckRole;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// BE
Route::group(['middleware' => ['auth', 'CheckRole:admin,super_admin']], function(){
    Route::controller(ProgramCont::class)->group(function(){
        Route::get('/be-program', 'index_program');
        Route::post('/be-program-post','post_program');
        Route::post('/be-program-delete','delete_program');
    });
    Route::controller(SantriController::class)->group(function(){
        Route::get('/be-santri-baru','index_santri_baru');
        Route::get('/be-santri-semua','index_santri_semua');
    });
    Route::controller(MenuController::class)->group(function() {
        Route::get('/be-menu','index_menu');
        Route::post('/be-menu-post','post_menu');
        Route::post('/be-menu-delete','delete_menu');
        Route::get('/be-menu-total','total');
    });
    Route::controller(KontenController::class)->group(function(){
        Route::get('/be-konten','index_konten');
        Route::post('/be-konten-post','post_konten');
        Route::post('/be-konten-delete','delete_konten');
    });
    Route::controller(ProfileController::class)->group(function() {
        Route::get('/be-profile','index_profile');
        Route::post('/be-profile-post' ,'post_profile');
        Route::post('/be-profile-delete','delete_profile');
    });
});


// FE
Route::controller(BrosurController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/pendaftaran-sukses','pendaftaran_sukses');
});



Route::controller(PageCont::class)->group(function () {
    Route::get('/visi-misi', 'visimisi');
    Route::get('/jaminan-mutu', 'jaminanmutu');
    Route::get('/kegiatan-harian', 'kegiatanharian');
    Route::get('/rincian-dana', 'rinciandana');
    Route::get('/pendaftaran', 'pendaftaran');
    Route::get('/syarat-pendaftaran', 'syaratpendaftaran');
    Route::get('/alur-pendaftaran','alurpendaftaran');
    Route::get('/tes-seleksi', 'tesseleksi');
    Route::get('/pendaftaran', 'pendaftaran');
    Route::get('/sekretariat', 'sekretariat');
});

Route::controller(FormPendaftaran::class)->group(function() {
    Route::get('/form-pendaftaran-tahfidz', 'form_pendaftaran_tahfidz');
    Route::post('/submit-form-tahfidz','submit_form_tahfidz');
});



