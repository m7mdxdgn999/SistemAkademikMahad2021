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
                            <table class="table table-bordered table-hover " id="datatable">
                                <thead>
                                    <tr><th scope="col">Pembinaan</th>
                                        <th scope="col">Hari</th>
                                        <th scope="col">Jam</th>
                                        <th scope="col">Ruang</th>
                                        <th scope="col">Mabna</th>
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
            ajax: '{{ route('dosen.jadwal.data') }}',
            columns: [{
                    data: 'nama_pembinaan'
                },
                {
                    data: 'hari'
                },
                {
                    data: 'jam'
                },
                {
                    data: 'ruang'
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
