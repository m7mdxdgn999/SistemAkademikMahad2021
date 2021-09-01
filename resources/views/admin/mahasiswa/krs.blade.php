@extends('layouts.admin.master')
@section('title', 'Krs Mahasiswa')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Krs Mahasiswa</h1>
        </div>

        <div class="section-body">


            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    {{-- table start --}}
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th scope="col" width="100">kode_krs</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Pembinaan</th>
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
                ajax: '{{ route('admin.mahasiswa.krs.data') }}',
                columns: [
                    {
                        data: 'DT_RowIndex', orderable:false, searchable:false
                    },
                    {
                        data: 'nim'
                    },
                    {
                        data: 'mahasiswa'
                    },
                    {
                        data: 'pembinaan'
                    },        
                    {
                        data: 'action'
                    },
                ]
            });
        });

    </script>
@endpush
