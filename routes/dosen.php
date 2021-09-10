<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/jadwal_pengajar', 'JadwalPengajarController@Index')->name('jadwal.index');
Route::get('/jadwal_pengajar/data','DataController@jadwal_mangajar')->name('jadwal.data');
Route::get('/jadwal_pengajar/nilai/{jadwal}','NilaiController@Index')->name('nilai.dosen');
Route::get ('/jadwal_pengajar/create','NilaiController@create')->name('create.mahasiswa'); 
Route::get ('/jadwal_pengajar/nilai/edit/{khs}','NilaiController@edit')->name('edit.nilai'); 
Route::put ('/jadwal_pengajar/nilai/update/{khs}','NilaiController@update')->name('update.nilai'); 
