<?php

namespace App\Http\Controllers\Dosen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jadwal;

class DataController extends Controller
{
    public function jadwal_mangajar()
    {
        $jadwals=DB::table('jadwal')
            ->join('pembinaan','jadwal.kode_pembinaan','=','pembinaan.kode_pembinaan')
            ->join('mabna','jadwal.kode_mabna','=','mabna.kode_mabna')
            ->where('jadwal.kode_dosen', Auth::guard('dosen')->user()->kode_dosen)
            ->get();

        return datatables()->of($jadwals)      
            // ->addColumn('action', function(Jadwal $jadwal){
            //     return '<a href="'. route('dosen.nilai.dosen',$jadwal). '" class="btn btn-icon btn-primary"><i class="far fa-edit"></i> Nilai</a>';
                
            // })
            ->addColumn('action','dosen.action')
            ->tojson();
    }
}
