@extends('layouts.dosen.master')
@section('title', 'Input Nilai')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Input Nilai</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    {{-- table start --}}
                    <div class="card">
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr><th scope="col" width="240">Kode Pembinaan</th>
                                        <td >{{ $jadwal->kode_pembinaan }}</td>
                                    </tr>
                                    <tr><th scope="col">Nama Pembinaan</th>
                                        <td >{{ $jadwal->nama_pembinaan }}</td>
                                    </tr>
                                    <tr><th scope="col">Nama Dosen</th>
                                        <td >{{ $jadwal->nama_dosen }}</td>
                                    </tr>
                                </thead>
                            </table>

                            <a href="{{ route('dosen.create.mahasiswa') }}" class="btn btn-icon icon-left btn-primary" style="margin-bottom:30px"><i
                                class="far fa-edit"></i>
                            Tambah Data Mahasiswa</a>

                            <table class="table ">
                                <thead>
                                    <tr><th scope="col">NIM</th>
                                        <th scope="col">Nama Mahasiswa</th>
                                        <th >Kehadiran</th>
                                        <th >UTS</th>
                                        <th >UAS</th>
                                        <th >Aksi</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mahasiswa as $mhs)
                                        <tr>
                                            <td>{{ $mhs->nim }}</td>
                                            <td>{{ $mhs->nama_mahasiswa }}</td>
                                            <td> {{ $mhs->nilai_kehadiran }}</td>
                                            <td>{{ $mhs->nilai_uts }}</td>
                                            <td>{{ $mhs->nilai_uas }}</td>
                                            <td>
                                                <form action="{{ route('dosen.edit.nilai', $mhs->kode_nilai) }}" method="get" class="float-left">
                                                <button type="submit" class="btn btn-icon btn-primary "><i
                                                        class="far fa-edit"></i> ubah</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody> 
                            </table>


                        </div>
                    </div>

                    {{-- tablde end --}}


                </div>

            </div>


        </div>

    @endsection

