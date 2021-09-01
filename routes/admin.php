<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/mabna', 'MabnaController@Index')->name('mabna.index');
Route::get('/mabna/data','DataController@buildings')->name('mabna.data');
Route::get('/mabna/create', 'MabnaController@Create')->name('mabna.create');
Route::post('/mabna/store', 'MabnaController@Store')->name('mabna.store');
Route::get('/mabna/edit/{mabna}','MabnaController@edit')->name('mabna.edit');
Route::put('/mabna/update/{mabna}', 'MabnaController@Update')->name('mabna.update');
Route::delete('/mabna/delete/{mabna}', 'MabnaController@Destroy')->name('mabna.destroy');

Route::get('/pembinaan', 'PembinaanController@Index')->name('pembinaan.index');
Route::get('/pembinaan/data','DataController@pembinaan')->name('pembinaan.data');
Route::get('/pembinaan/create', 'PembinaanController@Create')->name('pembinaan.create');
Route::post('/pembinaan/store', 'PembinaanController@Store')->name('pembinaan.store');
Route::delete('/pembinaan/delete/{pembinaan}', 'PembinaanController@Destroy')->name('pembinaan.destroy');
Route::get('/pembinaan/edit/{pembinaan}', 'PembinaanController@Edit')->name('pembinaan.edit');    
Route::put('/pembinaan/update/{pembinaan}', 'PembinaanController@Update')->name('pembinaan.update');

Route::get('/dosen', 'DosenController@Index')->name('dosen.index');
Route::get('/dosen/data','DataController@dosen')->name('dosen.data');
Route::get('/dosen/excel', 'DosenController@exportExcel')->name('export.excel');
Route::get('/dosen/pdf', 'DosenController@pdf')->name('export.pdf');
Route::get('/dosen/create', 'DosenController@Create')->name('dosen.create');
Route::post('/dosen/store', 'DosenController@Store')->name('dosen.store');
Route::get('/dosen/edit/{dosen}', 'DosenController@Edit')->name('dosen.edit');
Route::put('/dosen/update/{dosen}', 'DosenController@Update')->name('dosen.update');
Route::delete('/dosen/delete/{dosen}', 'DosenController@Destroy')->name('dosen.destroy');

Route::get('/tahun_akademik', 'TahunAkademikController@Index')->name('tahun_akademik.index');
Route::get('/tahun_akademik/data','DataController@tahun_akademik')->name('tahun_akademik.data');
Route::get('/tahun_akademik/create', 'TahunAkademikController@Create')->name('tahun_akademik.create');
Route::post('/tahun_akademik/store', 'TahunAkademikController@Store')->name('tahun_akademik.store');
Route::get('/tahun_akademik/edit/{tahunAkademik}', 'TahunAkademikController@Edit')->name('tahun_akademik.edit');
Route::put('/tahun_akademik/update/{tahunAkademik}', 'TahunAkademikController@Update')->name('tahun_akademik.update');
Route::delete('/tahun_akademik/delete/{tahunAkademik}', 'TahunAkademikController@Destroy')->name('tahun_akademik.destroy');

Route::get('/kurikulum', 'KurikulumController@Index')->name('kurikulum.index');
Route::get('/kurikulum/data','DataController@kurikulum')->name('kurikulum.data');
Route::get('/kurikulum/create', 'KurikulumController@Create')->name('kurikulum.create');
Route::post('/kurikulum/store', 'KurikulumController@Store')->name('kurikulum.store');
Route::get('/kurikulum/edit/{kurikulum}', 'KurikulumController@Edit')->name('kurikulum.edit');
Route::put('/kurikulum/update/{kurikulum}', 'KurikulumController@Update')->name('kurikulum.update');
Route::delete('/kurikulum/delete/{kurikulum}', 'KurikulumController@Destroy')->name('kurikulum.destroy');

Route::get('/jadwal', 'JadwalController@Index')->name('jadwal.index');
Route::get('/jadwal/create', 'JadwalController@Create')->name('jadwal.create');
Route::post('/jadwal/store', 'JadwalController@Store')->name('jadwal.store');
Route::get('/jadwal/edit/{jadwal}', 'JadwalController@Edit')->name('jadwal.edit');
Route::put('/jadwal/update/{jadwal}', 'JadwalController@Update')->name('jadwal.update');
Route::delete('/jadwal/delete/{jadwal}', 'JadwalController@Destroy')->name('jadwal.destroy');

Route::get('/mahasiswa', 'MahasiswaController@Index')->name('mahasiswa.index');
Route::get('/mahasiswa/data','DataController@mahasiswa')->name('mahasiswa.data');
Route::get('/mahasiswa/create', 'MahasiswaController@Create')->name('mahasiswa.create');
Route::post('/mahasiswa/store', 'MahasiswaController@Store')->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{mahasiswa}', 'MahasiswaController@Edit')->name('mahasiswa.edit');
Route::put('/mahasiswa/update/{mahasiswa}', 'MahasiswaController@Update')->name('mahasiswa.update');
Route::get('/mahasiswa/show/{mahasiswa}', 'MahasiswaController@Show')->name('mahasiswa.show');
Route::delete('/mahasiswa/delete/{mahasiswa}', 'MahasiswaController@Destroy')->name('mahasiswa.destroy');
Route::get('/mahasiswa/krs', 'KrsController@Index')->name('mahasiswa.krs.index');
Route::get('/mahasiswa/krs/data','DataController@krs')->name('mahasiswa.krs.data');