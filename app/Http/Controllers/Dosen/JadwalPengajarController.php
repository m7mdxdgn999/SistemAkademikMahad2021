<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\JadwalPengajar;
use Illuminate\Http\Request;

class JadwalPengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dosen.dosen');
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
