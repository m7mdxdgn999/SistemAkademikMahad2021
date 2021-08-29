<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Dosen extends Authenticatable
{
    use Notifiable;
    protected $table = 'dosen';
    protected $guard = 'dosen';

    protected $fillable=[
        'email','nip', 'password','kode_dosen','kode_mabna' ,'nama_dosen',  'no_hp_dosen'
    ];
    
    public function mabna(){
        return $this->belongsTo('App\Mabna','kode_mabna','kode_mabna');
    }

    protected $primaryKey='kode_dosen';
    protected $keyType = 'string';
    public $incrementing = false;


    protected $hidden = [
        'password', 'remember_token',
    ];

    // untuk update password    
    function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
