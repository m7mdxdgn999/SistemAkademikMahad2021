@extends('layouts.admin.master')
@section('title', 'Input Data Dosen')


@section('content')
    <section class="section">
        {{-- header start --}}
        <div class="section-header">
            <h1>Input Data Dosen</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('admin.dosen.index') }}">Dosen</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.dosen.create') }}">Tambah</a></div>
            </div>
        </div>
        {{-- header end --}}

        {{-- body start --}}
        <div class="section-body">

            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Input Data Dosen</h4>
                        </div>
                        <div class="card-body">                            

                            <form action="{{ route('admin.dosen.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="nip">NIP</label>
                                            <input type="text" class="form-control @error('nip') is-invalid @enderror "   name="nip">
                                            @error('nip')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="kode_dosen">Kode Dosen</label>
                                            <input type="text" class="form-control @error('kode_dosen') is-invalid @enderror "   name="kode_dosen">
                                            @error('kode_dosen')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_dosen">Nama Dosen</label>
                                            <input type="text" class="form-control @error('nama_dosen') is-invalid @enderror "  name="nama_dosen">
                                            @error('nama_dosen')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="kode_mabna">Mabna</label>
                                            <select class="form-control"  name="kode_mabna">
                                                @foreach($mabna as $mbn)
                                                <option value="{{ $mbn->kode_mabna }}">{{ $mbn->nama_mabna }}</option>
                                                @endforeach
                                            </select>      
                                            @error('kode_mabna')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror "   name="email">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror "   name="password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_hp_dosen">No Hp</label>
                                            <input type="text" class="form-control @error('no_hp_dosen') is-invalid @enderror "   name="no_hp_dosen">
                                            @error('no_hp_dosen')
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

