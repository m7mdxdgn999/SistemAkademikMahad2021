<?php

namespace App\Http\Controllers\Admin;

use App\Building;
use App\Dosen;
use App\Http\Controllers\Controller;
use App\Mabna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dosen.dosen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dosen.create',[
            'mabna'=>Mabna::all()
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
                'nip' => 'required',
                'nama_dosen' => 'required',
                'kode_dosen' => 'required ',
                'kode_mabna' => 'required ',
                'email' => 'required ',
                'no_hp_dosen' => 'required ',
                'password' => 'required ',

            ]
 
        );

        Dosen::create([
            'nip' => $request->nip,
            'nama_dosen' => $request->nama_dosen,
            'kode_dosen'=> $request->kode_dosen,
            'kode_mabna'=>$request->kode_mabna,
            'email'=>$request->email,
            'no_hp_dosen'=>$request->no_hp_dosen,
            'password'=>Hash::make($request->password),

        ]);

            //insert ke table user
            $user=new \App\User;
            $user->assignRole('dosen');
            $user->name=$request->nama_dosen;
            $user->email=$request->email;
            $user->password=bcrypt($request->password) ;
            $user->email_verified_at=now();
            $user->save();

        return redirect()->route('admin.dosen.index')->with('success', 'Data berhasil ditambah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        return view('admin.dosen.edit', [
            'dosen'=>$dosen,
            'mabna'=>Mabna::orderBy('nama_mabna','ASC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
        $dosen->nip=$request->nip;
        $dosen->kode_dosen=$request->kode_dosen;
        $dosen->nama_dosen=$request->nama_dosen;
        $dosen->kode_mabna=$request->kode_mabna;
        $dosen->email=$request->email;
        $dosen->no_hp_dosen=$request->no_hp_dosen;
        $dosen->nama_dosen=$request->nama_dosen;
        if ($request->password != '') {
            $dosen->password = $request->password;
        }
        $dosen->save();

        return redirect()->route('admin.dosen.index')->with('info', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->back()->with('danger', 'Data berhasil dihapus');
    }
}
