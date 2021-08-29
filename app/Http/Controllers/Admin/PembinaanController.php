<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pembinaan;
use Illuminate\Http\Request;

class PembinaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pembinaan.pembinaan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pembinaan.create');
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
                'kode_pembinaan' => 'required | unique:pembinaan',
                'nama_pembinaan' => 'required ',

            ]

        );
        
        Pembinaan::create([
            'kode_pembinaan' => $request->kode_pembinaan,
            'nama_pembinaan' => $request->nama_pembinaan

        ]);

        return redirect()->route('admin.pembinaan.index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pembinaan  $pembinaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pembinaan $pembinaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembinaan  $pembinaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembinaan $pembinaan)
    {
        return view('admin.pembinaan.edit', [
            'pembinaan'=>$pembinaan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembinaan  $pembinaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembinaan $pembinaan)
    {
        $pembinaan->update([
            'kode_pembinaan' => $request->kode_pembinaan,
            'nama_pembinaan' => $request->nama_pembinaan
        ]);

        return redirect()->route('admin.pembinaan.index')->with('info', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembinaan  $pembinaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembinaan $pembinaan)
    {
        $pembinaan->delete();
        return redirect()->back()->with('danger', 'Data berhasil dihapus');
    }
}
