<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jadwal;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index ($jadwal){
        $jadwals=DB::table('jadwal')
                ->join ('dosen','dosen.kode_dosen','=','jadwal.kode_dosen')
                ->join ('pembinaan','pembinaan.kode_pembinaan','=','jadwal.kode_pembinaan')
                ->where('kode_jadwal',$jadwal)->first();
        $data ['jadwal'] = $jadwals;

        // $data['mahasiswa']=DB::table('khs')
        //             ->join('mahasiswa','mahasiswa.nim','=','khs.nim')
        //             ->where('khs.kode_dosen',$jadwals->kode_dosen)
        //             ->where ('khs.kode_pembinaan',$jadwals->kode_pembinaan)
        //             ->get();
            return view('dosen.nilai',$data);
         
    }
}
