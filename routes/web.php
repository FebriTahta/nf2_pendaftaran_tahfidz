<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramCont;
use App\Http\Controllers\FormPendaftaran;
use App\Http\Controllers\PageCont;
use App\Http\Controllers\BrosurController;


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


// BE
Route::get('/be-program',[ProgramCont::class,'index_program'])->name('be.program');



// FE
Route::controller(BrosurController::class)->group(function(){
    Route::get('/', 'index');
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


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
