<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembinaan extends Model
{
    protected $fillable = ['nama_pembinaan','kode_pembinaan'];
    protected $table = 'pembinaan';
    protected $primaryKey='kode_pembinaan';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;
}
