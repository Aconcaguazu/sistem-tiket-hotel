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
        Schema::create('tamu', function (Blueprint $table) {
            $table->id();
            $table->integer('kd_tamu');
            $table->string('nm_tamu');
            $table->string('alamat');
            $table->string('kota');
            $table->integer('no_telp');
            $table->string('pekerjaan');
            $table->string('kebangsaan');
            $table->date('tgl_lahir');
            $table->integer('no_ktp');
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
        Schema::dropIfExists('tamu');
    }
};
