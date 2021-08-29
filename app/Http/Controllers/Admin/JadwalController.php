<?php

namespace App\Http\Controllers\Admin;

use App\Dosen;
use App\Http\Controllers\Controller;
use App\Jadwal;
use App\Mabna;
use App\Pembinaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mabna= $request->get('kode_mabna');
        $semester=$request->get('semester');

        $data['mabna']=Mabna::pluck('nama_mabna','kode_mabna');
        $data['jadwal']= DB::table('jadwal')
                            ->join('pembinaan','jadwal.kode_pembinaan','=','pembinaan.kode_pembinaan')
                            ->join('dosen','jadwal.kode_dosen','=','dosen.kode_dosen')
                            ->where('jadwal.kode_mabna',$mabna)
                            ->where('jadwal.semester',$semester)
                            ->get();
        $data['mabna_terpilih']=$mabna;
        $data['semester_terpilih']=$semester;

        return view('admin.jadwal.jadwal',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jadwal.create',[
            'tahun_akademik'=>DB::table('tahun_akademik')->where('status','aktif')->first(),
            'mabna'=>Mabna::all(),
            'pembinaan'=>Pembinaan::all(),
            'dosen'=>Dosen::all(),
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
        Jadwal::create([
            'kode_jadwal'=>$request->kode_jadwal,
            'hari' => $request->hari,
            'kode_mabna' => $request->kode_mabna,
            'kode_pembinaan' => $request->kode_pembinaan,
            'kode_dosen' => $request->kode_dosen,
            'ruang' => $request->ruang,
            'jam' => $request->jam,
            'kode_tahun_akademik' => $request->kode_tahun_akademik,            
            'semester' => $request->semester

        ]);
        return redirect()->route('admin.jadwal.index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        return view('admin.jadwal.edit', [
            'tahun_akademik'=>DB::table('tahun_akademik')->where('status','aktif')->first(),
            'jadwal'=>$jadwal,
            'mabna'=>Mabna::all(),
            'pembinaan'=>Pembinaan::all(),
            'dosen'=>Dosen::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $jadwal->update([
            'kode_jadwal'=>$request->kode_jadwal,
            'hari' => $request->hari,
            'kode_mabna' => $request->kode_mabna,
            'kode_pembinaan' => $request->kode_pembinaan,
            'kode_dosen' => $request->kode_dosen,
            'ruang' => $request->ruang,
            'jam' => $request->jam,
            'kode_tahun_akademik' => $request->kode_tahun_akademik,            
            'semester' => $request->semester
        ]);

        return redirect()->route('admin.jadwal.index')->with('info', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect()->back()->with('danger', 'Data berhasil dihapus');
    }
}
