<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Mahasiswa extends Authenticatable
{
    use Notifiable;
    protected $table = 'mahasiswa';
    protected $guard = 'mahasiswa';
    protected $fillable = [
        'nama_mahasiswa','nim','fakultas_jurusan','no_hp_mahasiswa',
        'tempat_tanggal_lahir','jalur_masuk','nama_org_tua','no_hp_org_tua',
        'alamat_lengkap','kode_mabna','email','password','kode_tahun_akademik','semester_aktif'
    ];
    
    public function mabna(){
        return $this->belongsTo('App\mabna','kode_mabna','kode_mabna');
    }

    public function tahun_akademik(){
        return $this->belongsTo('App\TahunAkademik','kode_tahun_akademik','kode_tahun_akademik');
    }

    protected $primaryKey='nim';
    protected $keyType = 'string';
    public $incrementing=false;
    protected $hidden = [
        'password', 'remember_token',
    ];

    // untuk update password    
    function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
