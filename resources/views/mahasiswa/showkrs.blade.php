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

                                <h2>{{ $pembinaan->nama_pembinaan }}</h2>
                                <form action="{{ route('tambahkrs') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ $pembinaan->kode_pembinaan }}" name="kode_pembinaan">
                                    <input type="submit" >
                                </form>


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
