<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('login', 'login');
    Route::post('loginproses', 'loginproses');
    Route::get('logout', 'logout');

    Route::get('give', 'give');
    Route::get('kegiatandetail/{id}', 'kegiatandetail');
    Route::get('event', 'event');
    Route::get('eventdetail/{id}','eventdetail');
    Route::get('whorsip', 'whorsip');
    Route::get('whorsipdetail/{id}', 'whorsipdetail');
    Route::get('shermon','shermon');
    Route::get('shermondetail/{id}','shermondetail');
    Route::get('kontak', 'kontak');

    Route::post('simpanprayer', 'simpanprayer')->name('simpanprayer');
});

Route::middleware(['auth'])->controller(AdminController::class)->group(function () {
    Route::get('admin/dashboard', 'dashboard');
    Route::get('admin/kegiatan', 'kegiatan');
    Route::get('admin/kegiatantambah', 'kegiatantambah');
    Route::post('admin/kegiatansimpan', 'kegiatansimpan');
    Route::get('admin/kegiatanedit/{id}', 'kegiatanedit');
    Route::post('admin/kegiataneditsimpan/{id}', 'kegiataneditsimpan');
    Route::get('admin/kegiatanhapus/{id}', 'kegiatanhapus');

    Route::get('admin/whorsip', 'whorsip');
    Route::get('admin/whorsiptambah', 'whorsiptambah');
    Route::post('admin/whorsipsimpan', 'whorsipsimpan');
    Route::get('admin/whorsipedit/{id}', 'whorsipedit');
    Route::post('admin/whorsipeditsimpan/{id}', 'whorsipeditsimpan');
    Route::get('admin/whorsiphapus/{id}', 'whorsiphapus');

    Route::get('admin/kontak', 'kontak');
    Route::get('admin/kontaktambah', 'kontaktambah');
    Route::post('admin/kontaksimpan', 'kontaksimpan');
    Route::get('admin/kontakedit/{id}', 'kontakedit');
    Route::post('admin/kontakeditsimpan/{id}', 'kontakeditsimpan');
    Route::get('admin/kontakhapus/{id}', 'kontakhapus');


    Route::get('admin/shermon', 'shermon')->name('shermon');
    Route::get('admin/shermontambah', 'shermontambah')->name('shermontambah');
    Route::post('admin/simpanshermontambah', 'simpanshermontambah')->name('admin/simpanshermontambah');
    Route::get('admin/editshermon/{id}', 'editshermon')->name('editshermon');
    Route::put('admin/simpaneditshermon/{id}', 'simpaneditshermon')->name('simpaneditshermon');
    Route::delete('admin/hapusshermon/{id}', 'hapusshermon')->name('hapusshermon');

    Route::get('admin/prayer', 'prayer')->name('prayer');
    Route::get('admin/prayertambah', 'prayertambah')->name('prayertambah');
    Route::post('admin/simpanrequestprayer', 'simpanrequestprayer')->name('simpanrequestprayer');
    Route::get('admin/editprayer/{id}', 'editprayer')->name('editprayer');
    Route::put('admin/editprayersimpan/{id}', 'editprayersimpan')->name('editprayersimpan');
    Route::delete('admin/hapusprayer/{id}', 'hapusprayer')->name('hapusprayer');
});