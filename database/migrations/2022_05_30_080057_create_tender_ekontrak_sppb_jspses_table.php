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
        Schema::create('tender_ekontrak_sppb_jspses', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_anggaran')->nullable();
            $table->unsignedBigInteger('kd_lpse')->nullable();
            $table->unsignedBigInteger('kd_tender')->nullable();
            $table->longText('no_sppbj')->nullable();
            $table->dateTime('tgl_sppbj')->nullable();
            $table->dateTime('tgl_kirim_sppbj')->nullable();
            $table->bigInteger('nilai_kontrak_sppbj')->nullable();
            $table->bigInteger('nilai_jaminan_pelaksanaan_sppbj')->nullable();
            $table->longText('status_sppbj')->nullable();
            $table->unsignedBigInteger('kd_penyedia')->nullable();
            $table->longText('nama_penyedia')->nullable();
            $table->longText('npwp_penyedia')->nullable();
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
        Schema::dropIfExists('tender_ekontrak_sppb_jspses');
    }
};
