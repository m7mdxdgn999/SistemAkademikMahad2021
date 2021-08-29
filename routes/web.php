<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// form login
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/dosen', 'Auth\LoginController@showDosenLoginForm');
Route::get('/login/mahasiswa', 'Auth\LoginController@showMahasiswaLoginForm');

// submit login
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/dosen', 'Auth\LoginController@dosenLogin');
Route::post('/login/mahasiswa', 'Auth\LoginController@mahasiswaLogin');

// if success
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});

