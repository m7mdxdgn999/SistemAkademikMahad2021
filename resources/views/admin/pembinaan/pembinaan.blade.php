@extends('layouts.admin.master')
@section('title', 'Pembinaan')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Pembinaan</h1>

        </div>

        <div class="section-body">

            <a href="{{ route('admin.pembinaan.create') }}" class="btn btn-icon icon-left btn-primary" id="tambahPembinaan" style="margin-bottom:30px"><i
                    class="far fa-edit"></i>
                Tambah
                Pembinaan</a>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    {{-- table start --}}
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Pembinaan</th>
                                        <th scope="col">Nama Pembinaan</th>
                                        <th scope="col">Aksi</th>
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
                ajax: '{{ route('admin.pembinaan.data') }}',
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
@endpush
