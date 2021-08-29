@extends('layouts.admin.master')
@section('title', 'Input Data Mabna')

@section('content')
    <section class="section">

        {{-- header start --}}
        <div class="section-header">
            <h1>Input Data Mabna</h1>
        </div>
        {{-- header end --}}

        {{-- body start --}}
        <div class="section-body">

            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Input Data Mabna</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.mabna.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_mabna">Kode Mabna</label>
                                            <input type="text" class="form-control @error('kode_mabna') is-invalid                                                    
                                                @enderror"  name="kode_mabna">
                                            @error('kode_mabna')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nama_mabna">Nama Mabna</label>
                                            <input type="text" class="form-control @error('nama_mabna') is-invalid @enderror "  name="nama_mabna">
                                            @error('nama_mabna')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit" id="submit"
                                        name="submit">Submit</button>
                                    
                                </div>
                            </form>
                        </div>

                    </div>

                </div>


            </div>
            {{-- body end --}}
    </section>
@endsection

@push('page-scripts')

@endpush
