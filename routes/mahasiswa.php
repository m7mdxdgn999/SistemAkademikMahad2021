<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/krs', 'krsController@Index')->name('krs.index');
Route::get('/pembinaan/data','DataController@pembinaan')->name('pembinaan.data');
Route::get('/krs/data','DataController@krs')->name('krs.data');
Route::post('/krs/{pembinaan}', 'krsController@Store')->name('krs.store');
Route::get('/khs', 'KhsController@Index')->name('Khs.index');