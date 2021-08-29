@extends('layouts.admin.master')
@section('title', 'Input Data Jadwal Pembinaan')

@section('content')
    <section class="section">

        {{-- header start --}}
        <div class="section-header">
            <h1>Input Data Jadwal Pembinaan</h1>

        </div>
        {{-- header end --}}

        {{-- body start --}}
        <div class="section-body">

            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Input Data Jadwal Pembinaan</h4>
                        </div>
                        <div class="card-body">


                            <form action="{{ route('admin.jadwal.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_jadwal">Kode Jadwal</label>
                                            <input type="text" class="form-control @error('kode_jadwal') is-invalid @enderror "  name="kode_jadwal">
                                            @error('kode_jadwal')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
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
                                            {{ Form::hidden('kode_tahun_akademik',$tahun_akademik->kode_tahun_akademik) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_pembinaan">Pembinaan</label>
                                            <select class="form-control"  name="kode_pembinaan">
                                                @foreach($pembinaan as $pem)
                                                <option value="{{ $pem->kode_pembinaan }}">{{ $pem->nama_pembinaan }}</option>
                                                @endforeach
                                            </select>      
                                            @error('kode_pembinaan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror                   
                                               
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="semester">Semester</label>
                                            <select class="form-control"  name="semester">                                                
                                                <option value="genap">Genap</option>
                                                <option value="ganjil">Ganjil</option>                                                  
                                            </select>  
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_dosen">Dosen</label>
                                            <select class="form-control"  name="kode_dosen">
                                                @foreach($dosen as $dsn)
                                                <option value="{{ $dsn->id }}">{{ $dsn->nama_dosen }}</option>
                                                @endforeach
                                            </select>      
                                            @error('kode_dosen')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror                                                
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="ruang">Ruangang</label>
                                            <input type="text" class="form-control @error('jam') is-invalid @enderror "  name="ruang">
                                            @error('ruang')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="jam"> Jam</label>
                                            <input type="text" class="form-control @error('jam') is-invalid @enderror "  name="jam">
                                            @error('nip')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="hari"> Hari</label>
                                            <input type="text" class="form-control @error('hari') is-invalid @enderror "  name="hari">
                                            @error('nip')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>



                                </div>

                                <div class="card-footer text-right">
                                    {{ Form::submit('Submit',['class'=>'btn btn-primary mr-1']) }}
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
