<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', 'krs@Index')->name('krs.index');