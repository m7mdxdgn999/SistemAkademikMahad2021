@extends('layouts.admin.master')
@section('title', 'Mabna')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Mabna</h1>
        </div>

        <div class="section-body">

            <a href="{{ route('admin.mabna.create') }}" class="btn btn-icon icon-left btn-primary"
                style="margin-bottom:30px"><i class="far fa-edit"></i> Tambah
                Mabna</a>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">                   
                    {{-- table start --}}
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover " id="datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Mabna</th>
                                        <th scope="col">Nama Mabna</th>
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
                ajax: '{{ route('admin.mabna.data') }}',
                columns: [{
                        data: 'kode_mabna'
                    },
                    {
                        data: 'nama_mabna'
                    },
                    {
                        data: 'action'
                    }
                ]
            });
        });

    </script>
@endpush
