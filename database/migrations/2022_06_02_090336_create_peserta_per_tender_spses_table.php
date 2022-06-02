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
        Schema::create('peserta_per_tender_spses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kd_tender')->nullable();
            $table->bigInteger('kd_lpse')->nullable();
            $table->bigInteger('kd_peserta')->nullable();
            $table->bigInteger('kd_penyedia')->nullable();
            $table->longText('nama_penyedia')->nullable();
            $table->longText('npwp_penyedia')->nullable();
            $table->longText('nilai_penawaran')->nullable();
            $table->longText('nilai_terkoreksi')->nullable();
            $table->longText('pemenang')->nullable();
            $table->longText('pemenang_terverifikasi')->nullable();
            $table->longText('alasan')->nullable();
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
        Schema::dropIfExists('peserta_per_tender_spses');
    }
};
