@extends('layouts.admin.master')
@section('title', 'Tahun Akademik')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tahun Akademik</h1>
        </div>

        <div class="section-body">
            <a href="{{ route('admin.tahun_akademik.create') }}" class="btn btn-icon icon-left btn-primary"
                style="margin-bottom:30px"><i class="far fa-edit"></i> Tambah
                Tahun Akadmik</a>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    {{-- table start --}}
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover " id="datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Tahun Akademik</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" width="140">Aksi</th>
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
                ajax: '{{ route('admin.tahun_akademik.data') }}',
                columns: [{
                        data: 'kode_tahun_akademik'
                    },
                    {
                        data: 'tahun_akademik'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'action'
                    }

                ]
            });
        });

    </script>
@endpush
