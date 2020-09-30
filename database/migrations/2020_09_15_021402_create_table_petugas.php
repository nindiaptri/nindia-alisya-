<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePetugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_petugas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NamaPetugas');
            $table->date('TglLahir');
            $table->string('Alamat');
            $table->string('Jabatan');
            $table->string('Nohp');
            $table->string('Username');
            $table->string('password');
            $table->integer('idLevel')->unsigned();
            $table->string('photo');
            $table->timestamps();
            $table->foreign('idLevel')->references('id')->on('table_levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_petugas');
    }
}
