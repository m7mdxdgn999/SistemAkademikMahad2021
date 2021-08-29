<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKurikulumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurikulum', function (Blueprint $table) {
            $table->string('kode_kurikulum')->primary();
            $table->string('kode_mabna');
            $table->foreign('kode_mabna')->references('kode_mabna')->on('mabna'); 
            $table->string('kode_pembinaan'); 
            $table->foreign('kode_pembinaan')->references('kode_pembinaan')->on('pembinaan'); //kode_pembinaan
            $table->enum('semester', ['genap', 'ganjil']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kurikulum');
    }
}
