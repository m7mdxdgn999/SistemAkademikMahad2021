@extends('layouts.mahasiswa.master')
@section('title', 'KRS')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>KRS</h1>

        </div>

        <div class="section-body">

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
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                
                                    <div class="col-6 col-md-6 col-lg-6">
                                        <div class="card-header">
                                            <h4>Daftar Pembinaan Kontrak</h4>
                                        </div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Kode Pembinaan</th>
                                                    <th scope="col">Nama Pembinaan</th>
                                                    <th scope="col" width="140">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @csrf
                                                @foreach ($pembinaan as $pmbn)
                                                    <tr>
                                                        <td>{{ $pmbn->kode_pembinaan }}</td>
                                                        <td>{{ $pmbn->nama_pembinaan }}</td>
                                                        <td>
                                                            <form action="{{ route('showkrs',$pmbn->kode_pembinaan) }}" method="get">
                                                            {{-- <form action="{{ route('tambahkrs') }}" method="post"> --}}
                                                            @csrf
                                                            {{-- <input type="hidden" value="{{ $pmbn->kode_pembinaan }}" name="kode_pembinaan"> --}}
                                                            <button type="submit" class="btn btn-icon btn-primary" ><i
                                                                    class="far fa-edit"></i>
                                                                Ambil</button>
                                                            </form>
                                                        </td>

                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <div>
                                            showing
                                            {{ $pembinaan->firstItem() }}
                                            to
                                            {{ $pembinaan->lastItem() }}
                                            of
                                            {{ $pembinaan->total() }}
                                            entries
                                        </div>
                                        <div class="float-right">
                                            {{ $pembinaan->links() }}
                                        </div>
                                    </div>
                                
                                <div class="col-6 col-md-6 col-lg-6">
                                    <div class="card-header">
                                        <h4>Daftar Pembinaan Yang Anda Pilih</h4>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Kode Pembinaan</th>
                                                <th scope="col">Nama Pembinaan</th>
                                                <th scope="col" width="80">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                        </tbody>
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

    <script>
        // function tambah_krs(kode_pembinaan){
        // alert(kode_pembinaan);         
        // }

    </script>
@endsection

@push('page-scripts')
    <script src=" {{ asset('assets/js/page/modules-sweetalert.js') }}"></script>
@endpush

@push('after-scripts')

@endpush
