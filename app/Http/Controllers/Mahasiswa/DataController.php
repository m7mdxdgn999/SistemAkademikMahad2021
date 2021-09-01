<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Krs;
use App\Pembinaan;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function pembinaan()
    {
        return datatables()->of(Pembinaan::query())
            ->addColumn('action', 'mahasiswa.action')
            ->tojson();
    }

    public function krs()
    {
        return datatables()->of(Krs::query())
            ->addColumn('pembinaan', function(Krs $model){
                return $model->pembinaan->nama_pembinaan;
            })
            ->addColumn('action', 'mahasiswa.action')
            ->tojson();
    }
}
