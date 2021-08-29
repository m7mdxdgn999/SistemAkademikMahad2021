@extends('layouts.master')
@section('title', 'Tmabah Semester')

@section('content')
    <section class="section">

        {{-- header start --}}
        <div class="section-header">
            <h1>Semester-Tambah</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                <div class="breadcrumb-item">Form</div>
            </div>
        </div>
        {{-- header end --}}

        {{-- body start --}}
        <div class="section-body">

            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Senester</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('semester.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_smt">Kode Semester</label>
                                            <input type="text" class="form-control @error('kode_smt') is-invalid                                                    
                                                @enderror" id="kode_smt" placeholder=""
                                                name="kode_smt">
                                            @error('kode_smt')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="tgl_mulai_smt">Tanggal Mulai</label>
                                            <input type="text" class="form-control @error('tgl_mulai_smt') is-invalid @enderror " id="tgl_mulai_smt" placeholder="" name="tgl_mulai_smt">
                                            @error('tgl_mulai_smt')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="tgl_selesai_smt">Tanggal Selesai</label>
                                            <input type="text" class="form-control @error('tgl_selesai_smt') is-invalid @enderror " id="tgl_selesai_smt	" placeholder="" name="tgl_selesai_smt">
                                            @error('tgl_selesai_smt')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="thn_smt">Tahun</label>
                                            <input type="text" class="form-control @error('thn_smt') is-invalid @enderror " id="thn_smt" placeholder="" name="thn_smt">
                                            @error('thn_smt')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nama_smt_id">Ganjil / Genap</label>
                                            <select class="form-select" id="nama_smt_id" name="nama_smt_id">
                                                <option value="1">Ganjil</option>
                                                <option value="2">Genap</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="smt_status">Aktif / tidak Aktif</label>
                                            <select class="form-select" id="smt_status" name="smt_status">
                                                <option value="0">tidak Aktif</option>
                                                <option value="1">Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit" id="submit"
                                        name="submit">Submit</button>
                                    <button class="btn btn-secondary" type="reset">Reset</button>
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
