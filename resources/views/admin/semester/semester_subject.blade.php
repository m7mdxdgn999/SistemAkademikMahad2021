@extends('layouts.master')
@section('title', 'Setting Semester')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1> Setting Semester Subject Aktif</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                <div class="breadcrumb-item">Form</div>
            </div>
        </div>

        <div class="section-body">

            <a href="{{ route('semester.create') }}" class="btn btn-icon icon-left btn-primary"><i
                    class="far fa-edit"></i> Registrasikan Semua Program Studi</a>

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
                                    <th scope="col">Pembinaan</th>
                                    <th scope="col">Mabna</th>
                                    <th scope="col">Tgl Mulai KRS</th>
                                    <th scope="col">Tgl Selesai KRS</th>
                                    <th scope="col">Mulai Input Nilai</th>
                                    <th scope="col">Selesai Input Nilai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($semestersubject as $listsemestersubject)
                                    <tr>
                                        <td>{{ $listsemestersubject->kode_smt }}</td>
                                        <td>@if($listsemestersubject->smt_sbj_is_aktif==1) 
                                            <a href="{{{ URL::to('kelas/'.$listsemestersubject->kode_pembinaan.'/prodi') }}}">
                                              <span class="label label-info"><i class="fa fa-list"> {{$listsemestersubject->nama_pembinaan}} </i></span>
                                              </a>
                                            @else
                                            {{$listsemestersubject->nama_pembinaan}}
                                            @endif </td>
                                        <td>{{ $listsemestersubject->smt_sbj_tgl_mulai_krs}}</td>
                                        <td>{{ $listsemestersubject->smt_sbj_tgl_selesai_krs}}</td>
                                        <td>{{ $listsemestersubject->smt_sbj_tgl_mulai_input_nilai}}</td>
                                        <td>{{ $listsemestersubject->smt_sbj_tgl_selesai_input_nilai }}</td>
                                        <td>@if($listsemestersubject->smt_sbj_is_aktif==0) 
                               
                                            <span class="label label-danger"><i class="fa fa-check"> Tidak Aktif </i></span>
                                            
                                          @else
                                             <span class="label label-success"><i class="fa fa-check-circle"> Aktif </i></span>
                                            </a>
                  
                                          @endif</td>
                                        
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
                                                    <a href="{{ URL::to('semester/' . $itemSemester->kode_smt . '/aktif') }}">
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
