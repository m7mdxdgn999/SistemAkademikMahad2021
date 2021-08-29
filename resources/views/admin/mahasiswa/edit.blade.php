@extends('layouts.admin.master')
@section('title', 'Edit Data Mahasantri')

@section('content')
    <section class="section">

        {{-- header start --}}
        <div class="section-header">
            <h1>Edit Data Mahasantri</h1>
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

                            <form action="{{ route('admin.mahasiswa.update',$mahasiswa) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nama_mahasiswa">Nama Lengkap</label>
                                            <input type="text" class="form-control @error('nama_mahasiswa') is-invalid                                                    
                                                        @enderror" 
                                                name="nama_mahasiswa" @if (old('nama_mahasiswa')) value="{{ old('nama_mahasiswa') }}" @else value="{{ $mahasiswa->nama_mahasiswa }}" @endif>
                                            @error('nama_mahasiswa')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control @error('email') is-invalid                                                    
                                                @enderror" 
                                                name="email"  @if (old('email')) value="{{ old('email') }}" @else value="{{ $mahasiswa->email }}" @endif>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="fakultas_jurusan"> Fakultas/ Jurusan</label>
                                            <input type="text"
                                                class="form-control @error('fakultas_jurusan') is-invalid @enderror "
                                                name="fakultas_jurusan" @if (old('fakultas_jurusan')) value="{{ old('fakultas_jurusan') }}" @else value="{{ $mahasiswa->fakultas_jurusan }}" @endif>
                                            @error('fakultas_jurusan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="tempat_tanggal_lahir">Tempat dan tanggal lahir</label>
                                            <input type="text"
                                                class="form-control @error('tempat_tanggal_lahir') is-invalid @enderror "
                                                name="tempat_tanggal_lahir" @if (old('tempat_tanggal_lahir')) value="{{ old('tempat_tanggal_lahir') }}" @else value="{{ $mahasiswa->tempat_tanggal_lahir }}" @endif>
                                            @error('tempat_tanggal_lahir')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class=" mb-3">
                                            <label for="nama_org_tua">Nama Orang Tua</label>
                                            <input type="text"
                                                class="form-control @error('nama_org_tua') is-invalid @enderror"
                                                name="nama_org_tua" @if (old('nama_org_tuar')) value="{{ old('nama_org_tua') }}" @else value="{{ $mahasiswa->nama_org_tua }}" @endif>
                                            @error('nama_org_tua')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat_lengkap">Alamat</label>
                                            <input type="text"
                                                class="form-control @error('alamat_lengkap') is-invalid @enderror"
                                                name="alamat_lengkap" @if (old('alamat_lengkap')) value="{{ old('alamat_lengkap') }}" @else value="{{ $mahasiswa->alamat_lengkap }}" @endif>
                                            @error('alamat_lengkap')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="semester_aktif">Semester Aktif</label>
                                            {{ Form::select('semester_aktif',['1'=>'Ganjil','2'=>'Genap'],$mahasiswa->semester_aktif,['class'=>'form-control']) }}
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nim">NIM</label>
                                            <input type="text" class="form-control @error('nim') is-invalid @enderror "
                                                name="nim" @if (old('nim')) value="{{ old('nim') }}" @else value="{{ $mahasiswa->nim }}" @endif>
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
                                            <input type="text"
                                                class="form-control @error('no_hp_mahasiswa') is-invalid @enderror "
                                                 name="no_hp_mahasiswa" @if (old('no_hp_mahasiswa')) value="{{ old('no_hp_mahasiswa') }}" @else value="{{ $mahasiswa->no_hp_mahasiswa }}" @endif>
                                            @error('no_hp_mahasiswa')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="jalur_masuk">Jalur
                                                Masuk:</label>
                                            {{ Form::select('jalur_masuk',['SNMPTN'=>'SNMPTN','SPAN PTKIN'=>'SPAN PTKIN','SBMPTN'=>'SBMPTN','UMPTKIN'=>'UMPTKIN'],$mahasiswa->jalur_masuk,['class'=>'form-control']) }}
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_hp_org_tua">No Hp Orang Tua / Wali</label>
                                            <input type="text"
                                                class="form-control @error('no_hp_org_tua') is-invalid @enderror "
                                                 name="no_hp_org_tua" @if (old('no_hp_org_tua')) value="{{ old('no_hp_org_tua') }}" @else value="{{ $mahasiswa->no_hp_org_tua }}" @endif>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kode_mabna">Mabna:</label>
                                            <select class="form-control"  name="kode_mabna">
                                                @foreach($mabna as $mbn)
                                                <option value="{{ $mbn->kode_mabna }}" @if($mbn->kode_mabna==$mahasiswa->kode_mabna)
                                                    selected
                                                @endif>{{ $mbn->nama_mabna }}</option>
                                                @endforeach
                                            </select>      
                                            @error('kode_mabna')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="kode_tahun_akademik">Tahun Akademik:</label>  
                                            <select class="form-control"  name="kode_tahun_akademik">
                                                @foreach($tahun_akademik as $thn)
                                                <option value="{{ $thn->kode_tahun_akademik }}" @if($thn->kode_tahun_akademik==$mahasiswa->kode_tahun_akademik)
                                                    selected
                                                @endif>{{ $thn->tahun_akademik }}</option>
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
