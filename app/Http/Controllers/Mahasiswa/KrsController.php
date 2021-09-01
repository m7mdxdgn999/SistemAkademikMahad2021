<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Krs;
use Illuminate\Http\Request;
use App\Pembinaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.krs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Pembinaan $pembinaan)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Pembinaan $pembinaan)
    {
        $tahn_akademik = DB::table('tahun_akademik')->where('status','aktif')->first();

        Krs::create([
            'nim'=>Auth::user()->nim,
            'kode_pembinaan'=>$pembinaan->kode_pembinaan,
            'kode_tahun_akademik'=>$tahn_akademik->kode_tahun_akademik
        ]);



        return redirect()->route('mahasiswa.krs.index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function show(Krs $krs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function edit(Krs $krs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Krs $krs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Krs $krs)
    {
        //
    }
}
