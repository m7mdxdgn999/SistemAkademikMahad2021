<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Jadwal;
use App\JadwalPengajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JadwalPengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Jadwal $jadwal)
    {
        $data['jadwal']=DB::table('jadwal')
            ->join('pembinaan','jadwal.kode_pembinaan','=','pembinaan.kode_pembinaan')
            ->join('mabna','jadwal.kode_mabna','=','mabna.kode_mabna')
            ->where('jadwal.kode_dosen', Auth::guard('dosen')->user()->kode_dosen)
            ->get();
          
        return view('dosen.dosen',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JadwalPengajar  $jadwalPengajar
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalPengajar $jadwalPengajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JadwalPengajar  $jadwalPengajar
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalPengajar $jadwalPengajar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JadwalPengajar  $jadwalPengajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalPengajar $jadwalPengajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JadwalPengajar  $jadwalPengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalPengajar $jadwalPengajar)
    {
        //
    }
}
