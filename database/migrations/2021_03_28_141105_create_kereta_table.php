<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeretaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kereta', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kereta');
            $table->string('nama_kereta');
            $table->string('tujuan_kereta');
            $table->string('jalur_kereta');
            $table->string('waktu_berangkat');
            $table->string('waktu_sampai');
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
        Schema::dropIfExists('kereta');
    }
}
