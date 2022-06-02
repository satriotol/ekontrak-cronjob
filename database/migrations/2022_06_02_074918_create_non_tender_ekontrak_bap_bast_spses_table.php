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
        Schema::create('non_tender_ekontrak_bap_bast_spses', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_anggaran')->nullable();
            $table->bigInteger('kd_lpse')->nullable();
            $table->bigInteger('kd_tender')->nullable();
            $table->longText('no_kontrak')->nullable();
            $table->dateTime('tgl_kontrak')->nullable();
            $table->bigInteger('nilai_kontrak')->nullable();
            $table->longText('cara_pembayaran_kontrak')->nullable();
            $table->longText('kontrak_tipe_penyedia')->nullable();
            $table->longText('wakil_sah_penyedia_kontrak')->nullable();
            $table->longText('jabatan_wakil_penyedia_kontrak')->nullable();
            $table->longText('no_spmk')->nullable();
            $table->longText('tgl_spmk')->nullable();
            $table->longText('waktu_penyelesaian_spmk')->nullable();
            $table->longText('tgl_mulai_kerja_spmk')->nullable();
            $table->longText('tgl_selesai_kerja_spmk')->nullable();
            $table->longText('no_bast')->nullable();
            $table->longText('tgl_bast')->nullable();
            $table->longText('no_bap')->nullable();
            $table->longText('tgl_bap')->nullable();
            $table->longText('besar_pembayaran_bap')->nullable();
            $table->longText('progres_fisik_bap')->nullable();
            $table->longText('no_spk')->nullable();
            $table->longText('tgl_spk')->nullable();
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
        Schema::dropIfExists('non_tender_ekontrak_bap_bast_spses');
    }
};
