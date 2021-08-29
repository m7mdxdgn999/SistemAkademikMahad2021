<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable=[
        'kode_mabna','nama_mabna'
    ];
    public $timestamps = false;

    
    public function dosen(){
        return $this->hasMany('App\Dosen','kode_mabna','id');
    }
}
