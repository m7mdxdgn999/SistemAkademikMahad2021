@extends('layouts.admin.master')
@section('title', 'Input Data Kurikulum')

@section('content')
    <section class="section">

        {{-- header start --}}
        <div class="section-header">
            <h1>Input Data Kurikulum</h1>

        </div>
        {{-- header end --}}

        {{-- body start --}}
        <div class="section-body">

            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Input Data Kurikulum</h4>
                        </div>
                        <div class="card-body">

                            {{-- {{ Form::open(['route' => 'curriculum.store']) }} --}}
                            <form action="{{ route('admin.kurikulum.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_kurikulum">Kode Kurikulum</label>
                                            <input type="text" class="form-control @error('kode_kurikulum') is-invalid                                                  
                                                @enderror" 
                                                name="kode_kurikulum">                                               
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
                                                <option value="{{ $mbn->kode_mabna }}">{{ $mbn->nama_mabna }}</option>
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
                                            <select class="form-control form-control-sm" name="semester">                                                     
                                                    <option value="genap">Genap</option>
                                                    <option value="ganjil">Ganjil</option>                                                                                          
                                            </select>
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


