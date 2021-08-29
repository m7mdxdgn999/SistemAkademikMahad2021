@extends('layouts.admin.master')
@section('title', 'Jadwal Pembinaan')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Jadwal Pembinaan</h1>
        </div>

        <div class="section-body">
            <a href="{{ route('admin.jadwal.create') }}" class="btn btn-icon icon-left btn-primary"
                style="margin-bottom:30px"><i class="far fa-edit"></i>
                Tambah
                Jadwal</a>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.jadwal.index') }}" method="get">
                                @csrf
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th scope="col">Mabna</th>
                                        <th scope="col">
                                            {{ Form::select('kode_mabna', $mabna, $mabna_terpilih, ['class' => 'form-control']) }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Semester</th>
                                        <th scope="col">
                                            {{ Form::select('semester', ['genap' => 'Genap', 'ganjil' => 'Ganjil'], $semester_terpilih, ['class' => 'form-control']) }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <th><button type="submit" class="btn btn-icon btn-success"><i
                                                    class="fas fa-sync-alt"></i>Refresh Data</button></th>
                                    </tr>

                                </table>
                            </form>
                            <div class="col-12 col-md-12 col-lg-12">
                                <table class="table table-borderless text-center ">
                                    <thead>
                                        <tr>
                                            <th>Hari</th>
                                            <th>Jam</th>
                                            <th>Pembinaan </th>
                                            <th>Dosen </th>
                                            <th>Ruang</th>
                                            <th width="140">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jadwal as $jdwl)
                                            <tr>
                                                <td>{{ $jdwl->hari }}</td>
                                                <td>{{ $jdwl->jam }}</td>
                                                <td>{{ $jdwl->nama_pembinaan }}</td>
                                                <td>{{ $jdwl->nama_dosen }}</td>
                                                <td>{{ $jdwl->ruang }}</td>
                                                <td>
                                                    <form action="{{ route('admin.jadwal.edit', $jdwl->kode_jadwal) }}"
                                                        class="float-left" method="get">
                                                        <button type="submit" class="btn btn-icon btn-primary "><i
                                                                class="far fa-edit"></i></button>
                                                    </form>
                                                    <form id=deleteForm class="float-right" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button
                                                            href="{{ route('admin.jadwal.destroy', $jdwl->kode_jadwal) }}"
                                                            type="submit" class="btn btn-icon btn-danger" id="delete"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- tablde end --}}

        </div>
        </div>
    </section>
@endsection
@push('scripts')

    {{-- boostrap notify --}}
    <script src="{{ asset('assets/plugins/bs-notify-min.js') }}"></script>
    @include('layouts.admin.alert')

    {{-- sweet alert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('button#delete').on('click', function(e) {
            e.preventDefault();

            var href = $(this).attr('href');


            Swal.fire({
                title: 'Apakah Kamu yakin hapus data ini?',
                text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus saja!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm').action = href;
                    document.getElementById('deleteForm').submit();

                    Swal.fire(
                        'Terhapus!',
                        'Data Berhasil dihapus.',
                        'success'
                    )
                }
            })
        })

    </script>

@endpush
