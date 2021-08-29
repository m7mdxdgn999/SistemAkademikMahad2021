@extends('layouts.admin.master')
@section('title', 'Admin Panel')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Profile</h1>
        </div>

        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}"
                                class="rounded-circle profile-widget-picture">
                            <div class="profile-widget-items">
                            </div>
                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name">{{ $mahasiswa->nama_mahasiswa }}<div
                                    class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div>{{ $mahasiswa->mabna->nama_mabna }}
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post" class="needs-validation" novalidate="">
                            <div class="card-header">
                                <h4>Biodata</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="nama_mahasiswa">Nama Lengkap</label>
                                        <input type="text" class="form-control"
                                             name="nama_mahasiswa" value="{{ $mahasiswa->nama_mahasiswa }}"  readonly>

                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="fakultas_jurusan"> Fakultas/ Jurusan</label>
                                        <input type="text" class="form-control"               
                                            name="fakultas_jurusan"  value="{{ $mahasiswa->fakultas_jurusan }}" readonly>
             
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="tempat_tanggal_lahir">Tempat dan tanggal lahir</label>
                                        <input type="text"
                                            class="form-control"
                                            name="tempat_tanggal_lahir"  value="{{ $mahasiswa->tempat_tanggal_lahir }}"  readonly>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="nama_org_tua">Nama Orang Tua</label>
                                        <input type="text" class="form-control"
                                            name="nama_org_tua" value="{{ $mahasiswa->nama_org_tua }}"  readonly>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="alamat_lengkap">Alamat</label>
                                        <input type="text"
                                            class="form-control"
                                            name="alamat_lengkap"  value="{{ $mahasiswa->alamat_lengkap }}" readonly>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="nim">NIM</label>
                                        <input type="text" class="form-control" 
                                            name="nim" value="{{ $mahasiswa->nim }}" readonly>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="no_hp_mahasiswa">No hp</label>
                                        <input type="text" class="form-control"
                                             name="no_hp_mahasiswa" value="{{ $mahasiswa->no_hp_mahasiswa }}" readonly>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="no_hp_org_tua">No Hp Orang Tua / Wali</label>
                                        <input type="text" class="form-control"  name="no_hp_org_tua" value="{{ $mahasiswa->no_hp_org_tua }}" readonly> 
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="jalur_masuk">Jalur Masuk:</label>
                                        <input type="text"
                                            class="form-control"
                                             name="jalur_masuk" value="{{ $mahasiswa->jalur_masuk }}" readonly>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="kode_mabna">Mabna:</label>
                                        <input type="text" class="form-control" name="kode_mabna" value="{{ $mahasiswa->mabna->nama_mabna }}"  readonly>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="kode_tahun_akademik">Tahun Akademik:</label>
                                        <input type="text" class="form-control" name="kode_tahun_akademik"  value="{{ $mahasiswa->tahun_akademik->tahun_akademik }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Cetak</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection


