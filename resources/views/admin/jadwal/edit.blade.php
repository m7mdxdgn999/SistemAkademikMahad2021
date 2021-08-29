@extends('layouts.admin.master')
@section('title', 'Edit Data Jadwal Pembinaan')

@section('content')
    <section class="section">

        {{-- header start --}}
        <div class="section-header">
            <h1>Edit Data Jadwal Pembinaan</h1>
        </div>
        {{-- header end --}}
        {{-- body start --}}
        <div class="section-body">
            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Jadwal Pembinaan</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.jadwal.update',$jadwal) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_jadwal">Kode Jadwal</label>
                                            <input type="text" class="form-control @error('kode_jadwal') is-invalid @enderror "  name="kode_jadwal" value="{{ $jadwal->kode_jadwal }}">
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
                                                <option value="{{ $mbn->kode_mabna }}" @if($mbn->kode_mabna==$jadwal->kode_mabna)
                                                    selected
                                                @endif>{{ $mbn->nama_mabna }}</option>
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
                                                <option value="{{ $pem->kode_pembinaan }}" @if($pem->kode_pembinaan==$jadwal->kode_pembinaan)
                                                    selected
                                                @endif>{{ $pem->nama_pembinaan }}</option>
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
                                            {{ Form::select('semester',['genap'=>'Genap','ganjil'=>'Ganjil'],$jadwal->semester,['class'=>'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_dosen">Musyrif</label>
                                            <select class="form-control"  name="kode_dosen">
                                                @foreach($dosen as $dsn)
                                                <option value="{{ $dsn->id }}" @if($dsn->id==$jadwal->kode_dosen)
                                                    selected
                                                @endif>{{ $dsn->nama_dosen }}</option>
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
                                            <input type="text" class="form-control @error('jam') is-invalid @enderror "  name="ruang" @if (old('ruang')) value="{{ old('ruang') }}" @else value="{{ $jadwal->ruang}}" @endif>
                                            @error('ruang')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="jam"> Jam</label>
                                            <input type="text" class="form-control @error('jam') is-invalid @enderror "  name="jam"  @if (old('jam')) value="{{ old('jam') }}" @else value="{{ $jadwal->jam}}" @endif>
                                            @error('jam')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="hari"> Hari</label>
                                            <input type="text" class="form-control @error('hari') is-invalid @enderror "   name="hari"  @if (old('hari')) value="{{ old('hari') }}" @else value="{{ $jadwal->hari}}" @endif>
                                            @error('hari')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>



                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary mr-1">Submit</button>         
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
