<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLokasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_lokasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TempatKesehatan');
            $table->integer('idFasilitas')->unsigned();
            $table->integer('idJenis')->unsigned();
            $table->string('Alamat');
            $table->string('noTelpon');
            $table->string('lokasi');
            $table->timestamps();
            $table->foreign('idFasilitas')->references('id')->on('table_fasilitas');
            $table->foreign('idJenis')->references('id')->on('table_jenis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_lokasi');
    }
}
