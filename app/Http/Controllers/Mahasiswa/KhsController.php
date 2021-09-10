<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KhsController extends Controller
{
    public function Index(){

        $nim=Auth::user()->nim;
        $data ['kartu_hasil_studi']=DB::table('khs')
                ->join('pembinaan','khs.kode_pembinaan','=','pembinaan.kode_pembinaan')
                ->join('dosen','khs.kode_dosen','=','dosen.kode_dosen')
                ->where('nim',$nim)
                ->get();
         return view('mahasiswa.khs',$data);
    }
}
