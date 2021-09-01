@extends('layouts.mahasiswa.master')
@section('title', 'KRS')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kartu Rencana Studi</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    {{-- table start --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                
                                    <div class="col-6 col-md-6 col-lg-6">
                                        <div class="card-header">
                                            <h4>Daftar Pembinaan Kontrak</h4>
                                        </div>
                                        <table class="table table-bordered table-hover " id="datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Kode Pembinaan</th>
                                                    <th scope="col">Nama Pembinaan</th>
                                                    <th scope="col" >Aksi</th>
                                                </tr>
                                            </thead>
                                        </table>    

                                    </div>
                                
                                <div class="col-6 col-md-6 col-lg-6">
                                    <div class="card-header">
                                        <h4>Daftar Pembinaan Yang Anda Pilih</h4>
                                    </div>
                                    <table class="table table-bordered table-hover " id="krs">
                                        <thead>
                                            <tr>
                                                <th scope="col">Kode Pembinaan</th>
                                                <th scope="col">Nama Pembinaan</th>
                                                <th scope="col" width="80">Aksi</th>
                                            </tr>
                                        </thead>
                                        {{-- <tbody>
                                            @foreach ($krs as $kr)
                                                <tr>
                                                    <td>{{ $kr->kode_pembinaan }}</td>
                                                    <td>{{ $kr->nama_pembinaan }}</td>
                                                    <td>
                                                        <form action=""
                                                            class="float-right" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-icon btn-danger"><i
                                                                    class="fas fa-trash"></i></button>
                                                        </form>

                                                    </td>
        
                                                </tr>
                                            @endforeach
                                        </tbody> --}}
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- tablde end --}}
                </div>

            </div>


        </div>
    </section>

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
                ajax: '{{ route('mahasiswa.pembinaan.data') }}',
                columns: [{
                        data: 'kode_pembinaan'
                    },
                    {
                        data: 'nama_pembinaan'
                    },
                    {
                        data: 'action'
                    }
                ]
            });
        });
    </script>

<script>
    $(function() {
        $('#krs').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('mahasiswa.krs.data') }}',
            columns: [{
                    data: 'kode_pembinaan'
                },
                {
                    data: 'pembinaan'
                },
                {
                    data: 'action'
                }
            ]
        });
    });
</script>
@endpush
