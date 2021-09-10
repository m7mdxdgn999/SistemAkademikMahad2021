<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khs extends Model
{
    protected $table = 'khs';
    protected $fillable=['kode_nilai','nim','kode_tahun_akademik','kode_pembinaan','kode_dosen','nilai_kehadiran','nilai_uts','nilai_uas'];
    protected $primaryKey='kode_nilai';
}
