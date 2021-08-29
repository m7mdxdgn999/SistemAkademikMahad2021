<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table='jadwal';
    protected $fillable=['kode_jadwal','hari','kode_pembinaan','kode_dosen','ruang','jam','semester','kode_tahun_akademik','kode_mabna'];
    public $timestamps = false;


    protected $primaryKey='kode_jadwal';
    protected $keyType = 'string';
    public $incrementing = false;
}
