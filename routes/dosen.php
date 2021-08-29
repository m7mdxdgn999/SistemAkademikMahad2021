<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/jadwal_pengajar', 'JadwalPengajarController@Index')->name('jadwal.index');