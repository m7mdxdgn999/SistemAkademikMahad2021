<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jadwal;
use App\Khs;
use App\Mahasiswa;
use App\Pembinaan;
use App\Dosen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index ($jadwal){
        $jadwals=DB::table('jadwal')
                ->join ('dosen','dosen.kode_dosen','=','jadwal.kode_dosen')
                ->join ('pembinaan','pembinaan.kode_pembinaan','=','jadwal.kode_pembinaan')
                ->where('kode_jadwal',$jadwal)->first();
        $data ['jadwal'] = $jadwals;

        $data['mahasiswa']=DB::table('khs')
                    ->join('mahasiswa','mahasiswa.nim','=','khs.nim')
                    ->where('khs.kode_dosen',$jadwals->kode_dosen)
                    ->where ('khs.kode_pembinaan',$jadwals->kode_pembinaan)
                    ->get();
        return view('dosen.nilai',$data);
         
    }

    public function create()
    {
        $data['jadwal']=DB::table('jadwal')
                ->join('pembinaan','jadwal.kode_pembinaan','=','pembinaan.kode_pembinaan')
                ->join('mabna','jadwal.kode_mabna','=','mabna.kode_mabna')
                ->where('jadwal.kode_dosen', Auth::guard('dosen')->user()->kode_dosen)
                ->get();    

        $data['mahasiswa']=Mahasiswa::all();

        return view('dosen.create_mahasiswa',$data);
    }


    public function edit(Khs $khs){
        return view('dosen.edit',[
                'khs'=>$khs
        ]);
    }

    public function update(Request $request, Khs $khs){

        $khs->update([
                'nilai_kehadiran'=>$request->nilai_kehadiran,
                'nilai_uts' => $request->nilai_uts,
                'nilai_uas' => $request->nilai_uas,
        ]);
    

        return redirect()->route('dosen.jadwal.index')->with('info', 'Data berhasil diupdate!');

    }

   
}
