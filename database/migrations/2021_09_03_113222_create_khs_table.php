<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khs', function (Blueprint $table) {
            $table->bigIncrements('kode_nilai');
            $table->string('nim');
            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->string('kode_tahun_akademik');
            $table->foreign('kode_tahun_akademik')->references('kode_tahun_akademik')->on('tahun_akademik');
            $table->string('kode_pembinaan');
            $table->foreign('kode_pembinaan')->references('kode_pembinaan')->on('pembinaan');
            $table->string('kode_dosen'); 
            $table->foreign('kode_dosen')->references('kode_dosen')->on('dosen');
            $table->integer('nilai_kehadiran');
            $table->integer('nilai_uts');
            $table->integer('nilai_uas');
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
        Schema::dropIfExists('khs');
    }
}
