<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krs', function (Blueprint $table) {
            $table->bigIncrements('kode_krs');
            $table->string('nim');
            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->string('kode_tahun_akademik');
            $table->foreign('kode_tahun_akademik')->references('kode_tahun_akademik')->on('tahun_akademik');
            $table->string('kode_pembinaan')->unique();
            $table->foreign('kode_pembinaan')->references('kode_pembinaan')->on('pembinaan');
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
        Schema::dropIfExists('krs');
    }
}
