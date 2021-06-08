<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStasiunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stasiun', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kereta');
            $table->string('nama_stasiun');
            $table->string('tujuan');
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
        Schema::dropIfExists('stasiun');
    }
}
