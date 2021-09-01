<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mabna;
use App\Mahasiswa;
use App\TahunAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mahasiswa.mahasiswa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mahasiswa.create', [
            'mabna'=>Mabna::all(),
            'tahun_akademik'=>TahunAkademik::all(),
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
                'nama_mahasiswa' => 'required',
                'nim' => 'required|max:14',
                'fakultas_jurusan' => 'required ',
                'tempat_tanggal_lahir' => 'required ',
                'no_hp_mahasiswa' => 'required ',
                'jalur_masuk' => 'required ',
                'nama_org_tua' => 'required ',
                'no_hp_org_tua' => 'required ',
                'alamat_lengkap' => 'required ',
                'kode_mabna' => 'required ',
                'email' => 'required',
                'password' => 'required',
                'kode_tahun_akademik'=>'required',
                'semester_aktif'=>'required'
            ]
 
        );

        Mahasiswa::create([            
            'fakultas_jurusan' => $request->fakultas_jurusan,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
            'nama_org_tua' => $request->nama_org_tua,
            'alamat_lengkap' => $request->alamat_lengkap,
            'nim' => $request->nim,
            'no_hp_mahasiswa' => $request->no_hp_mahasiswa,
            'no_hp_org_tua' => $request->no_hp_org_tua,
            'jalur_masuk' => $request->jalur_masuk,
            'kode_mabna' => $request->kode_mabna,
            'kode_tahun_akademik' => $request->kode_tahun_akademik,
            'semester_aktif'=>$request->semester_aktif,
            'email' => $request->email,
            'password' => Hash::make($request->password) 
        ]);

      

        //alihkan halaman ke halaman admin klo sudah tersimpan
        return redirect()->route('admin.mahasiswa.index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('admin.mahasiswa.show', [
            'mahasiswa'=>$mahasiswa
            ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('admin.mahasiswa.edit', [
            'mahasiswa'=>$mahasiswa,
            'mabna'=>Mabna::all(),
            'tahun_akademik'=>TahunAkademik::all(),
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
       
        $mahasiswa->nama_mahasiswa = $request->nama_mahasiswa;
        $mahasiswa->fakultas_jurusan = $request->fakultas_jurusan;
        $mahasiswa->kode_tahun_akademik = $request->kode_tahun_akademik;
        $mahasiswa->tempat_tanggal_lahir = $request->tempat_tanggal_lahir;
        $mahasiswa->semester_aktif = $request->semester_aktif;
        $mahasiswa->nama_org_tua = $request->nama_org_tua;
        $mahasiswa->alamat_lengkap = $request->alamat_lengkap;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->no_hp_mahasiswa = $request->no_hp_mahasiswa;
        $mahasiswa->no_hp_org_tua = $request->no_hp_org_tua;
        $mahasiswa->jalur_masuk = $request->jalur_masuk;
        $mahasiswa->kode_mabna = $request->kode_mabna;
        $mahasiswa->kode_tahun_akademik = $request->kode_tahun_akademik;
        $mahasiswa->email = $request->email;
        if ($request->password != '') {
            $mahasiswa->password = $request->password;
        }

        $mahasiswa->save();
        return redirect()->route('admin.mahasiswa.index')->with('info', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->back()->with('danger', 'Data berhasil dihapus');
    }
}
