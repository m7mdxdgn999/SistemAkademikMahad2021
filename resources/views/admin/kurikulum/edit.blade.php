@extends('layouts.admin.master')
@section('title', 'Edit Data Kurikulum')

@section('content')
    <section class="section">

        {{-- header start --}}
        <div class="section-header">
            <h1>Edit Data Kurikulum</h1>

        </div>
        {{-- header end --}}

        {{-- body start --}}
        <div class="section-body">

            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Kurikulum</h4>
                        </div>
                        <div class="card-body">
                            
                            <form action="{{ route('admin.kurikulum.update', $kurikulum) }}" method="post">
                                                          
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_kurikulum">Kode Kurikulum</label>                                            
                                            <input type="text"
                                            class="form-control @error('kode_kurikulum') is-invalid @enderror "                                            
                                            name="kode_kurikulum" @if (old('kode_kurikulum')) value="{{ old('kode_kurikulum') }}" @else value="{{ $kurikulum->kode_kurikulum}}" @endif>
                                        @error('kode_kurikulum')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror                                         
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_mabna">Mabna</label>
                                            <select class="form-control"  name="kode_mabna">
                                                @foreach($mabna as $mbn)
                                                <option value="{{ $mbn->kode_mabna }}" @if($mbn->kode_mabna==$kurikulum->kode_mabna)
                                                    selected
                                                @endif>{{ $mbn->nama_mabna }}</option>
                                                @endforeach
                                            </select>      
                                            @error('kode_mabna')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_pembinaan">Pembiaan</label>
                                            <select class="form-control"  name="kode_pembinaan">
                                                @foreach($pembinaan as $pem)
                                                <option value="{{ $pem->kode_pembinaan }}" @if($pem->kode_pembinaan==$kurikulum->kode_mabna)
                                                    selected
                                                @endif>{{ $pem->nama_pembinaan }}</option>
                                                @endforeach
                                            </select>      
                                            @error('kode_mabna')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="semester">Semester</label>
                                            {{ Form::select('semester',['genap'=>'Genap','ganjil'=>'Ganjil'],$kurikulum->semester,['class'=>'form-control']) }}
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
