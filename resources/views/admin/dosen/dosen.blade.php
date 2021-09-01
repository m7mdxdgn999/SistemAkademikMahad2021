@extends('layouts.admin.master')
@section('title', 'Dosen')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dosen</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route("admin.dosen.index") }}">Dosen</a></div>
            </div>

        </div>

        <div class="section-body">

            <a href="{{ route('admin.dosen.create') }}" class="btn btn-icon icon-left btn-primary" style="margin-bottom:30px"><i
                    class="far fa-edit"></i>
                Tambah
                Dosen</a>

            <a href="{{ route('admin.export.excel') }}" class="btn btn-icon icon-left btn-success" style="margin-bottom:30px"><i
                    class="far fa-file-excel"></i>
                Export Ke Excel</a>

            <a href="{{ route('admin.export.pdf') }}" class="btn btn-icon icon-left btn-success" style="margin-bottom:30px"><i
                    class="far fa-file-excel"></i>
                Export Ke Pdf</a>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">                
              
                    {{-- table start --}}
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover " id="datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Dosen</th>
                                        <th scope="col">NIP</th>
                                        <th scope="col">Nama Dosen</th>
                                        <th scope="col">Mabna</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">No Hp</th>
                                        <th scope="col" >Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    {{-- tablde end --}}
                </div>
            </div>
        </div>
    </section>
    {{-- unutk keperluan sweet alert --}}
    <form action="" method="post" id=deleteForm>
        @csrf
        @method('delete')
        <input type="submit" style="display:none">
    </form>
    @endsection
    @push('scripts')

        {{-- boostrap notify --}}
        <script src="{{ asset('assets/plugins/bs-notify-min.js') }}"></script>
        @include('layouts.admin.alert')


        <script>
            $(function() {
                $('#datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('admin.dosen.data') }}',
                    columns: [{
                            data: 'kode_dosen'
                        },
                        {
                            data: 'nip'
                        },
                        {
                            data: 'nama_dosen'
                        },
                        {
                            data: 'mabna'
                        },
                        {
                            data: 'email'
                        },
                        {
                            data: 'no_hp_dosen'
                        },
                        {
                            data: 'action'
                        }
                    ]
                });
            });

        </script>
    @endpush
