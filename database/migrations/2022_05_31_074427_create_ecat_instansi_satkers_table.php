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
        Schema::create('ecat_instansi_satkers', function (Blueprint $table) {
            $table->id();
            $table->longText('kd_klpd')->nullable();
            $table->longText('nama_klpd')->nullable();
            $table->longText('jenis_klpd')->nullable();
            $table->bigInteger('kd_satker')->nullable();
            $table->longText('kd_satker_str')->nullable();
            $table->longText('nama_satker')->nullable();
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
        Schema::dropIfExists('ecat_instansi_satkers');
    }
};
