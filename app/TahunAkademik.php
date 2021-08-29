<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunAkademik extends Model
{
    protected $table = 'tahun_akademik';
    protected $fillable=['kode_tahun_akademik','tahun_akademik','status','tanggal_awal_pembinaan','tanggal_akhir_pembinaan','tanggal_awal_uts','tanggal_akhir_uts','tanggal_awal_uas','tanggal_akhir_uas'];


    public $timestamps = false;
    protected $primaryKey='kode_tahun_akademik';
    protected $keyType = 'string';
    public $incrementing = false;    
}
