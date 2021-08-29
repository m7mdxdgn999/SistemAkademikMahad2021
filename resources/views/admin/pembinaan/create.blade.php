@extends('layouts.admin.master')
@section('title', 'Input  Data Pembinaan')


@section('content')
    <section class="section">



        {{-- header start --}}
        <div class="section-header">
            <h1>Input  Data Pembinaan</h1>

        </div>
        {{-- header end --}}

        {{-- body start --}}
        <div class="section-body">

            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Pembinaan</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.pembinaan.store') }}" method="post">                          
                            
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="kode_pembinaan">Kode Pembinaan</label>
                                            <input type="text" class="form-control @error('kode_pembinaan') is-invalid @enderror "  name="kode_pembinaan">
                                            @error('kode_pembinaan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_pembinaan">Nama Pembinaaan</label>
                                            <input type="text" class="form-control @error('nama_pembinaan') is-invalid @enderror "  name="nama_pembinaan">
                                            @error('nama_pembinaan')
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
<script>
    function random_function()
    {
        var a=document.getElementById("kode_pembinaan").value;
        if(a==="01")
        {
            var arr=["Figh"];
        }
        else if(a==="02")
        {
            var arr=["Tafsir"];
        }
        else if(a==="03")
        {
            var arr=["Haditsh"];
        }
        else if(a==="04")
        {
            var arr=["English"];
        }
        else (a==="05")
        {
            var arr=["Arabic"];
        }
        var string="";
     
        for(i=0;i<arr.length;i++)
        {
            string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
        }
        document.getElementById("nama_pembinaan").innerHTML=string;
    }
</script>
@push('page-scripts')

@endpush
