<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/jadwal_pengajar', 'JadwalPengajarController@Index')->name('jadwal.index');
Route::get('/jadwal_pengajar/data','DataController@jadwal_mangajar')->name('jadwal.data');
Route::get('jadwal_pengajar/nilai/{jadwalPengajar}','NilaiController@Index')->name('nilai.dosen');