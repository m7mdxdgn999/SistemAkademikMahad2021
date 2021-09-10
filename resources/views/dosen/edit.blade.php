@extends('layouts.dosen.master')
@section('title', 'Edit Nilai')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Edit Nilai</h1>

        </div>

        <div class="section-body">


            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    {{-- table start --}}
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('dosen.update.nilai',$khs) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nilai_kehadiran">Nilai Kehadiran</label>
                                            <input type="text" class="form-control @error('nip') is-invalid                                                    
                                                        @enderror"  
                                                name="nilai_kehadiran" @if (old('nilai_kehadiran')) value="{{ old('nilai_kehadiran') }}" @else value="{{ $khs->nilai_kehadiran }}" @endif>
                                            @error('nilai_kehadiran')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="nilai_uts"> Nilai UTS</label>
                                            <input type="text"
                                                class="form-control @error('nilai_uts') is-invalid @enderror "
                                                 placeholder="Kode Dosen"
                                                name="nilai_uts" @if (old('nilai_uts')) value="{{ old('nilai_uts') }}" @else value="{{ $khs->nilai_uts}}" @endif>
                                            @error('nilai_uts')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="nilai_uas"> Nilai UAS</label>
                                            <input type="text"
                                                class="form-control @error('nilai_uas') is-invalid @enderror "
                                                 placeholder="Nama Dosen"
                                                name="nilai_uas" @if (old('nilai_uas')) value="{{ old('nilai_uas') }}" @else value="{{ $khs->nilai_uas}}" @endif>
                                            @error('nilai_uas')
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

                    {{-- tablde end --}}


                </div>

            </div>


        </div>





    @endsection

    <script >
        function simpan_nilai(id_khs)
        {
            var nilai_uas = $("#uas-"+id_khs).val();
            var nilai_uts = $("#uts-"+id_khs).val();
            var nilai_kehadiran = $("#kehadiran-"+id_khs).val();

            
            console.log(nilai_uas);
            console.log(nilai_uts);
            console.log(nilai_kehadiran);

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.post("/nilai/update_nilai/update",
            {
            id_khs : id_khs,
            nilai_uas : nilai_uas,
            nilai_uts:nilai_uts,
            nilai_kehadiran:nilai_kehadiran,
            _token: CSRF_TOKEN
        },


        function(data, status){
        //   alert('sukses')
      });
        }
    </script>
