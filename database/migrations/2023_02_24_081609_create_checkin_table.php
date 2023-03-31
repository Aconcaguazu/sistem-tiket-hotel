<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkin', function (Blueprint $table) {
            $table->id();
            $table->integer('no_checkin');
            $table->integer('kd_tamu');
            $table->integer('kd_kamar');
            $table->date('tgl_masuk');
            $table->integer('uang_muka');
            $table->date('tgl_keluar');
            $table->integer('extrabed');
            $table->integer('tarif_kamar');
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
        Schema::dropIfExists('checkin');
    }
};
