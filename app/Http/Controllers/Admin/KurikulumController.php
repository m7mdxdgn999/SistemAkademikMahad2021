<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kurikulum;
use Illuminate\Http\Request;
use App\Mabna;
use App\Pembinaan;
use Illuminate\Support\Facades\DB;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mabna= $request->get('kode_mabna');
        $data['mabna']=Mabna::pluck('nama_mabna','kode_mabna');
        $data['kurikulum']=DB::table('kurikulum')
                            ->join ('pembinaan','kurikulum.kode_pembinaan','=','pembinaan.kode_pembinaan')
                            ->join ('mabna','kurikulum.kode_mabna','=','mabna.kode_mabna')
                            ->where('kurikulum.kode_mabna',$mabna)
                            ->paginate(5);
        
        $data['mabna_terpilih']=$mabna;
        return view('admin.kurikulum.kurikulum',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kurikulum.create',[
            'mabna'=>Mabna::all(),
            'pembinaan'=>Pembinaan::all(),
            ]);
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
                'kode_kurikulum' => 'required | max:60',
                'kode_mabna' => 'required | max:60',
                'kode_pembinaan'=>'required | max:60',
                'semester'=>'required | max:60',

            ]
            
        );

        Kurikulum::create([
            'kode_kurikulum' => $request->kode_kurikulum,
            'kode_mabna' => $request->kode_mabna,
            'kode_pembinaan' => $request->kode_pembinaan,
            'semester' => $request->semester

        ]);

        return redirect()->route('admin.kurikulum.index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function show(Kurikulum $kurikulum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function edit(Kurikulum $kurikulum)
    {
        return view('admin.kurikulum.edit', [
            'kurikulum'=>$kurikulum,
            'mabna'=>Mabna::all(),
            'pembinaan'=>Pembinaan::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kurikulum $kurikulum)
    {
        $kurikulum->update([
            'kode_kurikulum' => $request->kode_kurikulum,
            'kode_mabna' => $request->kode_mabna,
            'kode_pembinaan' => $request->kode_pembinaan,
            'semester' => $request->semester
        ]);

        return redirect()->route('admin.kurikulum.index')->with('info', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kurikulum $kurikulum)
    {
        $kurikulum->delete();
        return redirect()->back()->with('danger', 'Data berhasil dihapus');
    }
}
