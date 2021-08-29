@extends('layouts.admin.master')
@section('title', 'Edit Data Tahun Akademik')

@section('content')
    <section class="section">

        {{-- header start --}}
        <div class="section-header">
            <h1>Edit Data Tahun Akademik</h1>

        </div>
        {{-- header end --}}

        {{-- body start --}}
        <div class="section-body">  
            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Input Tahun Akademik</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.tahun_akademik.update', $tahunAkademik) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_tahun_akademik">Kode Tahun Akademik</label>
                                            <input type="text" class="form-control @error('kode_tahun_akademik') is-invalid                                                    
                                                    @enderror" 
                                                name="kode_tahun_akademik"  @if (old('kode_tahun_akademik')) value="{{ old('kode_tahun_akademik') }}" @else value="{{ $tahunAkademik->kode_tahun_akademik }}" @endif>
                                            @error('kode_tahun_akademik')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="tahun_akademik">Tahun Akademik</label>
                                            <input type="text"
                                                class="form-control @error('tahun_akademik') is-invalid @enderror "
                                                 name="tahun_akademik" @if (old('tahun_akademik')) value="{{ old('tahun_akademik') }}" @else value="{{ $tahunAkademik->tahun_akademik }}" @endif>
                                            @error('tahun_akademik')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status">
                                            <option value="aktif">Akif</option>
                                            <option value="tidak aktif">Tidak Aktif </option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label >Periode Pembinaan</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" placeholder="tanggal awal pembinaan" name="tanggal_awal_pembinaan" @if (old('tanggal_awal_pembinaan')) value="{{ old('tanggal_awal_pembinaan') }}" @else value="{{ $tahunAkademik->tanggal_awal_pembinaan }}" @endif>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" placeholder="tanggal akhir pembinaan" name="tanggal_akhir_pembinaan" @if (old('tanggal_akhir_pembinaan')) value="{{ old('tanggal_akhir_pembinaan') }}" @else value="{{ $tahunAkademik->tanggal_akhir_pembinaan }}" @endif>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label style="margin-top: 10px" >Periode UTS</label>
                                        <div class="row">                                            
                                            <div class="col-md-6">                                                
                                                <input type="date" class="form-control" placeholder="tanggal awal uts" name="tanggal_awal_uts" @if (old('tanggal_awal_uts')) value="{{ old('tanggal_awal_uts') }}" @else value="{{ $tahunAkademik->tanggal_awal_uts }}" @endif >
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" placeholder="tanggal akhir uts" name="tanggal_akhir_uts" @if (old('tanggal_akhir_uts')) value="{{ old('tanggal_akhir_uts') }}" @else value="{{ $tahunAkademik->tanggal_akhir_uts }}" @endif>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">  
                                        <label style="margin-top: 10px">Periode UAS</label>                                      
                                        <div class="row">
                                            <div class="col-md-6">                                                
                                                <input type="date" class="form-control" placeholder="tanggal awal uas" name="tanggal_awal_uas" @if (old('tanggal_awal_uas')) value="{{ old('tanggal_awal_uas') }}" @else value="{{ $tahunAkademik->tanggal_awal_uas }}" @endif>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" placeholder="tanggal akhir uas" name="tanggal_akhir_uas" @if (old('tanggal_akhir_uas')) value="{{ old('tanggal_akhir_uas') }}" @else value="{{ $tahunAkademik->tanggal_akhir_uas }}" @endif>
                                            </div>
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
     
        </div>
        {{-- body end --}}
    </section>
@endsection
