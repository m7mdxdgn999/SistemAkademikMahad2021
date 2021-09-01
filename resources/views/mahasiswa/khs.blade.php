@extends('layouts.mahasiswa.master')
@section('title', 'Kartu Hasil Studi')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Kartu Hasil Studi</h1>

        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    {{-- </div> --}}
                    {{-- tablde end --}}

                    {{-- table start --}}
                    <div class="card">
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr><th scope="col">No </th>
                                        <th scope="col">Kode Pembinaan</th>
                                        <th scope="col">Pembinaan</th>
                                        <th scope="col">Nilai</th>
                                    </tr>
                                    @foreach ($kartu_hasil_studi as $khs)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $khs->kode_pembinaan }}</td>
                                        <td>{{ $khs->nama_pembinaan }}</td>
                                        <td></td>

                                    </tr>
                                @endforeach
                                    <tr>
                                        <td colspan="3">Jumlah Mutu </td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">IPK </td>
                                        <td colspan="2"></td>
                                    </tr>
                                </thead>
                                {{-- <tbody>
                                    @foreach ($kartu_hasil_studi as $khs)
                                        <tr>
                                            <td>{{ $khs->kode_pembinaan }}</td>
                                            <td>{{ $khs->nama_pembinaan }}</td>
                                            <td>{{ $khs->jam }}</td>
                                            <td>{{ $khs->ruang }}</td>
                                            <td>{{ $jdwl->nama_mabna }}</td>
                                            <td>
                                                <form action="{{ route('nilai.dosen', $jdwl->kode_jadwal) }}" method="get" class="float-left">
                                                <button type="submit" class="btn btn-icon btn-primary "><i
                                                        class="far fa-edit"></i> Input</button>
                                                </form>

                                                <form action="{{ route('nilai.dosen', $jdwl->kode_jadwal) }}" method="get" class="float-left">
                                                    <button type="submit" class="btn btn-icon btn-primary "><i class="fas fa-portrait"></i> Kehadiran</button>
                                                    </form>

                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody> --}}
                            </table>


                        </div>
                    </div>

                    {{-- tablde end --}}


                </div>

            </div>


        </div>





    @endsection
