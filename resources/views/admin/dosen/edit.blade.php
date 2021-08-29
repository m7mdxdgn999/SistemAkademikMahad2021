@extends('layouts.admin.master')
@section('title', 'Edit Data Dosen')

@section('content')
    <section class="section">

        {{-- header start --}}
        <div class="section-header">
            <h1>Edit Data Dosen</h1>

        </div>
        {{-- header end --}}

        {{-- body start --}}
        <div class="section-body">

            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Dosen</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.dosen.update',$dosen) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nip">NIP</label>
                                            <input type="text" class="form-control @error('nip') is-invalid                                                    
                                                        @enderror" 
                                                name="nip" @if (old('nip')) value="{{ old('nip') }}" @else value="{{ $dosen->nip }}" @endif>
                                            @error('nip')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="kode_dosen"> Kode Dosen</label>
                                            <input type="text"
                                                class="form-control @error('kode_dosen') is-invalid @enderror "                                            
                                                name="kode_dosen" @if (old('kode_dosen')) value="{{ old('kode_dosen') }}" @else value="{{ $dosen->kode_dosen}}" @endif>
                                            @error('kode_dosen')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_dosen"> Nama Dosen</label>
                                            <input type="text"
                                                class="form-control @error('nama_dosen') is-invalid @enderror "                                                 
                                                name="nama_dosen" @if (old('nama_dosen')) value="{{ old('nama_dosen') }}" @else value="{{ $dosen->nama_dosen}}" @endif>
                                            @error('nama_dosen')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="kode_mabna">Mabna</label>
                                            <select class="form-control"  name="kode_mabna">
                                                @foreach($mabna as $mbn)
                                                <option value="{{ $mbn->kode_mabna }}" @if($mbn->kode_mabna==$dosen->kode_mabna)
                                                    selected
                                                @endif>{{ $mbn->nama_mabna }}</option>
                                                @endforeach
                                            </select>      
                                            @error('kode_mabna')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="email"> Email</label>
                                            <input type="text"
                                                class="form-control @error('email') is-invalid @enderror "
                                                 
                                                name="email" @if (old('email')) value="{{ old('email') }}" @else value="{{ $dosen->email}}" @endif>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password"> Password</label>
                                            <input type="text"
                                                class="form-control @error('password') is-invalid @enderror "
                                                 
                                                name="password" >
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_hp_dosen"> No Hp</label>
                                            <input type="text"
                                                class="form-control @error('no_hp_dosen') is-invalid @enderror "
                                                 placeholder="No Hp"
                                                name="no_hp_dosen" @if (old('no_hp_dosen')) value="{{ old('no_hp_dosen') }}" @else value="{{ $dosen->no_hp_dosen}}" @endif>
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

@push('page-scripts')

@endpush
