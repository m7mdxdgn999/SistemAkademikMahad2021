<?php

namespace App\Http\Controllers\Admin;

use App\Building;
use App\Http\Controllers\Controller;
use App\Pembinaan;
use App\Dosen;
use App\Kurikulum;
use App\Mabna;
use App\Mahasiswa;
use App\TahunAkademik;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class DataController extends Controller
{
    public function buildings()
    {
        return datatables()->of(Mabna::query())
            ->addColumn('action', 'admin.mabna.action')
            ->tojson();
    }

    public function pembinaan()
    {
        return datatables()->of(Pembinaan::query())
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
}
