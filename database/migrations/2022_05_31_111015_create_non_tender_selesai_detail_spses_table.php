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
        Schema::create('non_tender_selesai_detail_spses', function (Blueprint $table) {
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
            $table->bigInteger('pagu')->nullable();
            $table->bigInteger('hps')->nullable();
            $table->bigInteger('nilai_penawaran')->nullable();
            $table->bigInteger('nilai_terkoreksi')->nullable();
            $table->bigInteger('nilai_negosiasi')->nullable();
            $table->bigInteger('nilai_kontrak')->nullable();
            $table->longText('anggaran')->nullable();
            $table->longText('kualifikasi_paket')->nullable();
            $table->longText('kategori_pengadaan')->nullable();
            $table->longText('metode_pengadaan')->nullable();
            $table->date('tanggal_buat_paket')->nullable();
            $table->dateTime('tanggal_pengumuman_nontender')->nullable();
            $table->dateTime('tanggal_selesai_nontender')->nullable();
            $table->bigInteger('kd_penyedia')->nullable();
            $table->longText('nama_penyedia')->nullable();
            $table->longText('npwp_penyedia')->nullable();
            $table->longText('kode_mak')->nullable();
            $table->bigInteger('nilai_pdn_kontrak')->nullable();
            $table->bigInteger('nilai_umk_kontrak')->nullable();
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
        Schema::dropIfExists('non_tender_selesai_detail_spses');
    }
};
