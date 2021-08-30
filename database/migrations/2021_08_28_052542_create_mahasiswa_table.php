<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim')->primary();  
            $table->string('nama_mahasiswa');                
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('kode_tahun_akademik');
            $table->foreign('kode_tahun_akademik')->references('kode_tahun_akademik')->on('tahun_akademik');
            $table->integer('semester_aktif');            
            $table->string('fakultas_jurusan'); 
            $table->string('no_hp_mahasiswa'); 
            $table->string('tempat_tanggal_lahir');
            $table->string('jalur_masuk');
            $table->string('nama_org_tua');
            $table->integer('no_hp_org_tua');
            $table->text('alamat_lengkap');
            $table->string('kode_mabna');
            $table->foreign('kode_mabna')->references('kode_mabna')->on('mabna');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
