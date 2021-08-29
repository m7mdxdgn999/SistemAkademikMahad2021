@extends('layouts.admin.master')
@section('title', 'Input Data Mahasiswa')

@section('content')
    <section class="section">

        {{-- header start --}}
        <div class="section-header">
            <h1>Input Data Mahasiswa</h1>
        </div>
        {{-- header end --}}

        {{-- body start --}}
        <div class="section-body">

            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Mahasiswa</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.mahasiswa.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nama_mahasiswa">Nama Lengkap</label>
                                            <input type="text" class="form-control @error('nama_mahasiswa') is-invalid                                                    
                                                @enderror" 
                                                name="nama_mahasiswa">
                                            @error('nama_mahasiswa')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control @error('email') is-invalid                                                    
                                                @enderror" 
                                                name="email">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="fakultas_jurusan"> Fakultas/ Jurusan</label>
                                            <input type="text" class="form-control @error('fakultas_jurusan') is-invalid @enderror " 
                                                 name="fakultas_jurusan">
                                            @error('fakultas_jurusan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="tempat_tanggal_lahir">Tempat dan tanggal lahir</label>
                                            <input type="text" class="form-control @error('tempat_tanggal_lahir') is-invalid @enderror " 
                                                name="tempat_tanggal_lahir">
                                            @error('tempat_tanggal_lahir')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class=" mb-3">
                                            <label for="nama_org_tua">Nama Orang Tua</label>
                                            <input type="text" class="form-control @error('nama_org_tua') is-invalid @enderror" 
                                                name="nama_org_tua">
                                            @error('nama_org_tua')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat_lengkap">Alamat</label>
                                            <input type="text" class="form-control @error('alamat_lengkap') is-invalid @enderror"
                                                name="alamat_lengkap">
                                            @error('alamat_lengkap')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="semester_aktif">Semester Aktif</label>
                                            <select class="form-control" name="semester_aktif" >
                                                <option value="1">Ganjil</option>
                                                <option value="2">Genap </option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nim">NIM</label>
                                            <input type="text" class="form-control @error('nim') is-invalid @enderror " name="nim">
                                            @error('nim')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror " name="password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_hp_mahasiswa">No hp</label>
                                            <input type="text" class="form-control @error('no_hp_mahasiswa') is-invalid @enderror " 
                                                name="no_hp_mahasiswa">
                                            @error('no_hp_mahasiswa')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="jalur_masuk">Jalur
                                                Masuk:</label>
                                            <select class="form-control" name="jalur_masuk" >
                                                <option value="SNMPTN">SNMPTN</option>
                                                <option value="SPAN PTKIN">SPAN PTKIN </option>
                                                <option value="SBMPTN">SBMPTN</option>
                                                <option value="UMPTKIN">UMPTKIN</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_hp_org_tua">No Hp Orang Tua / Wali</label>
                                            <input type="text" class="form-control @error('no_hp_org_tua') is-invalid @enderror " placeholder="No HP Orang Tua/Wali"
                                                name="no_hp_org_tua">
                                        </div>
                                        <div class="mb-3">
                                            <label for="kode_mabna">Mabna:</label>                                    
                                            <select class="form-control"  name="kode_mabna">
                                                @foreach($mabna as $mbn)
                                                <option value="{{ $mbn->kode_mabna }}">{{ $mbn->nama_mabna }}</option>
                                                @endforeach
                                            </select>                                            

                                        </div>

                                        <div class="mb-3">
                                            <label for="kode_tahun_akademik">Tahun Akademik:</label>  
                                            <select class="form-control"  name="kode_tahun_akademik">
                                                @foreach($tahun_akademik as $thn)
                                                <option value="{{ $thn->kode_tahun_akademik }}">{{ $thn->tahun_akademik }}</option>
                                                @endforeach
                                            </select>                                            

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
