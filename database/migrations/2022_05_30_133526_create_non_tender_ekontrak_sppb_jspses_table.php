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
        Schema::create('non_tender_ekontrak_sppb_jspses', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_anggaran')->nullable();
            $table->bigInteger('kd_lpse')->nullable();
            $table->bigInteger('kd_nontender')->nullable();
            $table->longText('no_sppbj')->nullable();
            $table->dateTime('tgl_sppbj')->nullable();
            $table->dateTime('tgl_kirim_sppbj')->nullable();
            $table->longText('nilai_kontrak_sppbj')->nullable();
            $table->longText('nilai_jaminan_pelaksanaan_sppbj')->nullable();
            $table->longText('status_sppbj')->nullable();
            $table->bigInteger('kd_penyedia')->nullable();
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
        Schema::dropIfExists('non_tender_ekontrak_sppb_jspses');
    }
};
