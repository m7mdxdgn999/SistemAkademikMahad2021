<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TahunAkademik;
use Illuminate\Http\Request;

class TahunAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tahun_akademik.tahun_akademik');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tahun_akademik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'kode_tahun_akademik' => 'required | max:60',
                'tahun_akademik' => 'required | max:60',
                'status'=>'required | max:60',
                'tanggal_awal_pembinaan'=>'required',
                'tanggal_akhir_pembinaan'=>'required',
                'tanggal_awal_uts'=>'required',
                'tanggal_akhir_uts'=>'required',
                'tanggal_awal_uas'=>'required',
                'tanggal_akhir_uas'=>'required',


            ]

        );

        TahunAkademik::create([
            'kode_tahun_akademik' => $request->kode_tahun_akademik,
            'tahun_akademik' => $request->tahun_akademik,
            'status' => $request->status,
            'tanggal_awal_pembinaan' => $request->tanggal_awal_pembinaan,
            'tanggal_akhir_pembinaan' => $request->tanggal_akhir_pembinaan,
            'tanggal_awal_uts' => $request->tanggal_awal_uts,
            'tanggal_akhir_uts' => $request->tanggal_akhir_uts,
            'tanggal_awal_uas' => $request->tanggal_awal_uas,
            'tanggal_akhir_uas' => $request->tanggal_akhir_uas,

        ]);

        return redirect()->route('admin.tahun_akademik.index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function show(TahunAkademik $tahunAkademik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function edit(TahunAkademik $tahunAkademik)
    {
        return view('admin.tahun_akademik.edit', [
            'tahunAkademik'=>$tahunAkademik,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TahunAkademik $tahunAkademik)
    {
        $tahunAkademik->Update([
            'kode_tahun_akademik'=>$request->kode_tahun_akademik,
            'tahun_akademik'=>$request->tahun_akademik,
            'status' => $request->status,
            'tanggal_awal_pembinaan' => $request->tanggal_awal_pembinaan,
            'tanggal_akhir_pembinaan' => $request->tanggal_akhir_pembinaan,
            'tanggal_awal_uts' => $request->tanggal_awal_uts,
            'tanggal_akhir_uts' => $request->tanggal_akhir_uts,
            'tanggal_awal_uas' => $request->tanggal_awal_uas,
            'tanggal_akhir_uas' => $request->tanggal_akhir_uas,
        ]);
 

        return redirect()->route('admin.tahun_akademik.index')->with('info', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function destroy(TahunAkademik $tahunAkademik)
    {
        $tahunAkademik->delete();
        return redirect()->back()->with('danger', 'Data berhasil dihapus');
    }
}
