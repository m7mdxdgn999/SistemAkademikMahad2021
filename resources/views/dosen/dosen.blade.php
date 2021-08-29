@extends('layouts.dosen.master')
@section('title', 'Jadwal Mengajar')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Jadwal Mengajar</h1>
        </div>

        <div class="section-body">


            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    {{-- table start --}}
                    <div class="card">
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr><th scope="col">Pembinaan</th>
                                        <th scope="col">Hari</th>
                                        <th scope="col">Jam</th>
                                        <th scope="col">Ruang</th>
                                        <th scope="col">Mabna</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                {{-- <tbody>
                                    @foreach ($jadwal as $jdwl)
                                        <tr>
                                            <td>{{ $jdwl->nama_pembinaan }}</td>
                                            <td>{{ $jdwl->hari }}</td>
                                            <td>{{ $jdwl->jam }}</td>
                                            <td>{{ $jdwl->ruang }}</td>
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
    </section>
@endsection
