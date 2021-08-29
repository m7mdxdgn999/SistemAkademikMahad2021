<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mabna;
use Illuminate\Http\Request;

class MabnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mabna.mabna');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mabna.create');
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
                'kode_mabna' => 'required | unique:mabna',
                'nama_mabna' => 'required ',

            ]

        );
        
        Mabna::create([
            'kode_mabna' => $request->kode_mabna,
            'nama_mabna' => $request->nama_mabna

        ]);

        return redirect()->route('admin.mabna.index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mabna  $mabna
     * @return \Illuminate\Http\Response
     */
    public function show(Mabna $mabna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mabna  $mabna
     * @return \Illuminate\Http\Response
     */
    public function edit(Mabna $mabna)
    {
        return view('admin.mabna.edit', [
            'mabna'=>$mabna
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mabna  $mabna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mabna $mabna)
    {
        $mabna->update([
            'kode_mabna' => $request->kode_mabna,
            'nama_mabna' => $request->nama_mabna
        ]);

        return redirect()->route('admin.mabna.index')->with('info', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mabna  $mabna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mabna $mabna)
    {
        $mabna->delete();
        return redirect()->back()->with('danger', 'Data berhasil dihapus');
    }
}
