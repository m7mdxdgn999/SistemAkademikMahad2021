<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    protected $table = 'krs';
    protected $fillable=['kode_pembinaan','nim','kode_tahun_akademik',];
    protected $primaryKey='kode_krs';
    protected $keyType = 'string';
    public $incrementing = false;

    public function pembinaan(){
        return $this->belongsTo(Pembinaan::class,'kode_pembinaan','kode_pembinaan');
    }
}
