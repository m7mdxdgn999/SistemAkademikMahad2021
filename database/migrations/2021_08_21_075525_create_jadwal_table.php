<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->string('kode_jadwal')->primary();
            $table->string('hari');
            $table->string('jam');
            $table->string('kode_mabna');
            $table->foreign('kode_mabna')->references('kode_mabna')->on('mabna');
            $table->string('kode_pembinaan'); 
            $table->foreign('kode_pembinaan')->references('kode_pembinaan')->on('pembinaan');
            $table->string('kode_dosen'); 
            $table->foreign('kode_dosen')->references('kode_dosen')->on('dosen');
            $table->string('kode_tahun_akademik'); 
            $table->foreign('kode_tahun_akademik')->references('kode_tahun_akademik')->on('tahun_akademik');
            $table->string('ruang'); 
            $table->string('semester');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_jadwal');
    }
}
