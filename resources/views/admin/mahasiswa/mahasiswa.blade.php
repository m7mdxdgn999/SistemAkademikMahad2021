@extends('layouts.admin.master')
@section('title', 'Admin Panel')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Mahasiswa</h1>
        </div>

        <div class="section-body">

            <a href="{{ route('admin.mahasiswa.create') }}" class="btn btn-icon icon-left btn-primary"
                style="margin-bottom:30px"><i class="far fa-edit"></i>
                Tambah
                Mahasiswa</a>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    {{-- table start --}}
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th scope="col" width="100">NIM</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Mabna</th>
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
                ajax: '{{ route('admin.mahasiswa.data') }}',
                columns: [{
                        data: 'nim'
                    },
                    {
                        data: 'nama_mahasiswa'
                    },
                    {
                        data: 'mabna'
                    },        
                    {
                        data: 'action'
                    },
                ]
            });
        });

    </script>
@endpush
