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

                    @if (session('message'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif

                    {{-- </div> --}}
                    {{-- tablde end --}}

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
                                                <form action="{{ route('edit.nilai', $mhs->kode_nilai) }}" method="get" class="float-left">
                                                <button type="submit" class="btn btn-icon btn-primary "><i
                                                        class="far fa-edit"></i> ubah</button>
                                                </form>
                                            </td>
                                            {{-- <td><input id="kehadiran-{{ $mhs->kode_nilai }}" onkeyup="simpan_nilai('{{ $mhs->kode_nilai }}')" type="text" value=" {{ $mhs->nilai_kehadiran }} " width="50%"></td>
                                            <td><input id="uts-{{ $mhs->kode_nilai }}" onkeyup="simpan_nilai('{{ $mhs->kode_nilai }}')" type="text" value="{{ $mhs->nilai_uts }}"></td>
                                            <td><input id="uas-{{ $mhs->kode_nilai }}" onkeyup="simpan_nilai('{{ $mhs->kode_nilai }}')" type="text" value="{{ $mhs->nilai_uas }}"></td> --}}

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

    {{-- <script >
        function simpan_nilai(id_khs)
        {
            var nilai_uas = $("#uas-"+id_khs).val();
            var nilai_uts = $("#uts-"+id_khs).val();
            var nilai_kehadiran = $("#kehadiran-"+id_khs).val();

            
            console.log(nilai_uas);
            console.log(nilai_uts);
            console.log(nilai_kehadiran);

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.post("/nilai/update_nilai/update",
            {
            id_khs : id_khs,
            nilai_uas : nilai_uas,
            nilai_uts:nilai_uts,
            nilai_kehadiran:nilai_kehadiran,
            _token: CSRF_TOKEN
        },


        function(data, status){
        //   alert('sukses')
      });
        }
    </script> --}}
