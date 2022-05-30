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
        Schema::create('non_tender_pengumuman_detail_spses', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_anggaran')->nullable();
            $table->longText('kd_klpd')->nullable();
            $table->longText('nama_klpd')->nullable();
            $table->longText('jenis_klpd')->nullable();
            $table->longText('kd_satker')->nullable();
            $table->longText('nama_satker')->nullable();
            $table->bigInteger('kd_lpse')->nullable();
            $table->longText('nama_lpse')->nullable();
            $table->bigInteger('kd_nontender')->nullable();
            $table->longText('kd_rup_paket')->nullable();
            $table->longText('nama_paket')->nullable();
            $table->longText('pagu')->nullable();
            $table->longText('hps')->nullable();
            $table->longText('anggaran')->nullable();
            $table->longText('kualifikasi_paket')->nullable();
            $table->longText('kategori_pengadaan')->nullable();
            $table->longText('metode_pengadaan')->nullable();
            $table->date('tanggal_buat_paket')->nullable();
            $table->longText('tanggal_pengumuman_nontender')->nullable();
            $table->longText('nama_status_nontender')->nullable();
            $table->bigInteger('versi_nontender')->nullable();
            $table->longText('ket_diulang')->nullable();
            $table->longText('ket_ditutup')->nullable();
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
        Schema::dropIfExists('non_tender_pengumuman_detail_spses');
    }
};
