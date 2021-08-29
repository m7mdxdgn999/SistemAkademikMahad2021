@extends('layouts.master')
@section('title', 'Setting Semester')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Setting Semester Aktif</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                <div class="breadcrumb-item">Form</div>
            </div>
        </div>

        <div class="section-body">

            <a href="{{ route('semester.create') }}" class="btn btn-icon icon-left btn-primary"><i
                    class="far fa-edit"></i> Tambah
                Data</a>

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

                    {{-- table start --}}
                    <div class="card-body">
                        <table class="table table-borderless text-center ">
                            <thead>
                                <tr>
                                    <th scope="col">Kode Semester</th>
                                    <th scope="col">Tanggal Mulai</th>
                                    <th scope="col">Tanggal Selesai</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Tipe (Ganjil/Genap)</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($semester as $itemSemester)
                                    <tr>
                                        <td>{{ $itemSemester->kode_smt }}</td>
                                        <td>{{ $itemSemester->tgl_mulai_smt }}</td>
                                        <td>{{ $itemSemester->tgl_selesai_smt }}</td>
                                        <td>{{ $itemSemester->thn_smt }}</td>
                                        <td>{{ $itemSemester->nama_smt_id == 1 ? 'Ganjil' : 'Genap' }}</td>
                                        <td>{{ $itemSemester->smt_status == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                                        <td>

                                            <form action="{{ route('semester.destroy', $itemSemester->kode_smt) }}" class="float-start" style="margin:2px"                                                method="post"
                                                onclick="return confirm('Apakah anda yakin akan menghapus Semester {{ $itemSemester->kode_smt }} : {{ $itemSemester->thn_smt . $itemSemester->nama_smt_id == 1 ? 'Ganjil' : 'Genap' }} ?')">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger  ">Delete</button>
                                            </form>

                                            <div class="float-start">
                                                @csrf
                                                @if ($itemSemester->smt_status == 0)
                                                    <a href=" {{ route('semester.aktif', $itemSemester->kode_smt) }}  ">
                                                        <span class="btn btn-primary"><i class="fa fa-check"> Aktifkan!
                                                            </i></span>
                                                    </a>
                                                @else
                                                    <span class="btn btn-primary"><i class="fa fa-check-circle"> Aktif
                                                        </i></span>
                                                    </a>
                                                @endif
                                            </div>

                                        </td>

                                        </form>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                    {{-- tablde end --}}


                </div>

            </div>


        </div>
    </section>
@endsection

@push('page-scripts')
    <script src=" {{ asset('assets/js/page/modules-sweetalert.js') }}"></script>
@endpush

@push('after-scripts')


@endpush
