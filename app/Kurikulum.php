<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    protected $table = 'kurikulum';
    protected $fillable=['kode_kurikulum','kode_mabna','kode_pembinaan','semester'];
    public $timestamps = false;
    protected $primaryKey='kode_kurikulum';
    protected $keyType = 'string';
    public $incrementing = false;

    public function pembinaan(){
        return $this->belongsTo('App\Pembinaan','kode_pembinaan','kode_pembinaan');
    }
    public function mabna(){
        return $this->hasMany('App\mabna','kode_mabna','kode_mabna');
    }
}
