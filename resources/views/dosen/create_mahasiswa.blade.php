@extends('layouts.dosen.master')
@section('title', 'Input Data Dosen')

@section('content')
    <section class="section">
        {{-- header start --}}
        <div class="section-header">
            <h1>Input Data Mahasiswa</h1>
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

                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- {{ Form::hidden('kode_tahun_akademik',$tahun_akademik->kode_tahun_akademik) }} --}}
                                       
                                        <div class="mb-3">
                                            <label for="nim">Mahasiswa</label>
                                            <select class="form-control"  name="nim">
                                                @foreach($mahasiswa as $mhs)
                                                <option value="{{ $mhs->nim }}">{{ $mhs->nama_mahasiswa }}</option>
                                                @endforeach
                                            </select>      
                                            @error('kode_mabna')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="kode_pembinaan">Pembinaan</label>
                                           <input type="text" readonly value="{{ $jadwal->kode_pembinaan}}">
                                               
                                        </div>

                                        <div class="mb-3">
                                            <label for="kode_dosen">Dosen</label>
                                            <input type="text" readonly value="{{ $jadwal->nama_dosen}}">
                                                                       
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

