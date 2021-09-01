<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mabna extends Model
{
    protected $fillable=[
        'kode_mabna','nama_mabna'
    ];

    public $timestamps = false;    
    protected $table = 'mabna';
    protected $primaryKey='kode_mabna';
    protected $keyType = 'string';    
    public $incrementing = false;

    
    public function dosen(){
        return $this->hasMany('App\Dosen','kode_mabna','kode_dosen');
    }
}
