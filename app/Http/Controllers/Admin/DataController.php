<?php

namespace App\Http\Controllers\Admin;

use App\Building;
use App\Http\Controllers\Controller;
use App\Pembinaan;
use App\Dosen;
use App\Krs as AppKrs;
use App\Kurikulum;
use App\Mabna;
use App\Mahasiswa;
use App\TahunAkademik;
use App\Krs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class DataController extends Controller
{
    public function buildings()
    {
        $mabna=Mabna::orderBy('kode_mabna','ASC');
        
        return datatables()->of($mabna)
            ->addColumn('action', 'admin.mabna.action')
            ->tojson();
    }

    public function pembinaan()
    {
        $pembinaan=Pembinaan::orderBy('kode_pembinaan','ASC');

        return datatables()->of($pembinaan)
            ->addColumn('action', 'admin.pembinaan.action')
            ->tojson();
    }

    public function dosen()
    {
        return datatables()->of(Dosen::query())
            ->addColumn('mabna', function(Dosen $model){
                return $model->mabna->nama_mabna;
            })
            ->addColumn('action', 'admin.dosen.action')
            ->tojson();
    }

    public function tahun_akademik()
    {
        return datatables()->of(TahunAkademik::query())
            ->addColumn('action', 'admin.tahun_akademik.action')
            ->tojson();
    }

    public function kurikulum()
    {
        return datatables()->of(Kurikulum::query())
            ->addColumn('pembinaan', function(Kurikulum $model){
                return $model->pembinaan->nama_pembinaan;
            })
            ->addColumn('action', 'admin.kurikulum.action')
            ->tojson();
    }

    public function mahasiswa()
    {
        return datatables()->of(Mahasiswa::query())
            ->addColumn('mabna', function(Mahasiswa $model){
            return $model->mabna->nama_mabna;
            })            
            ->addColumn('action', 'admin.mahasiswa.action')
            ->tojson();
    }

    public function krs(){
        $krs=Krs::latest();

        return datatables()->of($krs)
            ->addColumn('mahasiswa', function(Krs $model){
            return $model->mahasiswa->nama_mahasiswa;
            })
            ->addColumn('pembinaan', function(Krs $model){
                return $model->pembinaan->nama_pembinaan;
            })                
            ->addColumn('action', 'admin.mahasiswa.actionkrs')
            ->tojson();

    }

    
   
}
