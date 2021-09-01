<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    public function Index(){
        return view('admin.mahasiswa.krs');
    }
}
