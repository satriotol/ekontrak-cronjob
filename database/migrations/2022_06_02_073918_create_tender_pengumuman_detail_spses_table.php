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
        Schema::create('tender_pengumuman_detail_spses', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_anggaran')->nullable();
            $table->longText('kd_klpd')->nullable();
            $table->longText('nama_klpd')->nullable();
            $table->longText('jenis_klpd')->nullable();
            $table->bigInteger('kd_lpse')->nullable();
            $table->longText('nama_lpse')->nullable();
            $table->longText('kd_satker')->nullable();
            $table->longText('nama_satker')->nullable();
            $table->bigInteger('kd_tender')->nullable();
            $table->bigInteger('kd_paket')->nullable();
            $table->longText('kd_rup_paket')->nullable();
            $table->longText('nama_paket')->nullable();
            $table->bigInteger('pagu')->nullable();
            $table->bigInteger('hps')->nullable();
            $table->longText('ang')->nullable();
            $table->longText('jenis_pengadaan')->nullable();
            $table->longText('mtd_pemilihan')->nullable();
            $table->longText('mtd_evaluasi')->nullable();
            $table->longText('mtd_kualifikasi')->nullable();
            $table->longText('kontrak_pembayaran')->nullable();
            $table->longText('kontrak_tahun')->nullable();
            $table->longText('jenis_kontrak')->nullable();
            $table->longText('nama_status_tender')->nullable();
            $table->bigInteger('versi_tender')->nullable();
            $table->longText('ket_diulang')->nullable();
            $table->longText('ket_ditutup')->nullable();
            $table->dateTime('tgl_buat_paket')->nullable();
            $table->dateTime('tgl_kolektif_kolegial')->nullable();
            $table->dateTime('tgl_pengumuman_tender')->nullable();
            $table->longText('url_lpse')->nullable();
            $table->longText('kualifikasi_paket')->nullable();
            $table->longText('lokasi_pekerjaan')->nullable();
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
        Schema::dropIfExists('tender_pengumuman_detail_spses');
    }
};
