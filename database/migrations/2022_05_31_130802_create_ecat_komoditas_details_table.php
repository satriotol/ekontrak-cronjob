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
        Schema::create('ecat_komoditas_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kd_komoditas')->nullable();
            $table->longText('nama_komoditas')->nullable();
            $table->longText('jenis_katalog')->nullable();
            $table->longText('nama_instansi_katalog')->nullable();
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
        Schema::dropIfExists('ecat_komoditas_details');
    }
};
