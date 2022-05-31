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
        Schema::create('pencatatan_non_tender_spses', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_anggaran')->nullable();
            $table->longText('kd_klpd')->nullable();
            $table->longText('nama_klpd')->nullable();
            $table->longText('jenis_klpd')->nullable();
            $table->longText('kd_satker')->nullable();
            $table->longText('kd_satker_str')->nullable();
            $table->longText('nama_satker')->nullable();
            $table->bigInteger('kd_lpse')->nullable();
            $table->longText('nama_lpse')->nullable();
            $table->bigInteger('kd_nontender_pct')->nullable();
            $table->bigInteger('kd_pkt_dce')->nullable();
            $table->longText('kd_rup_paket')->nullable();
            $table->longText('nama_paket')->nullable();
            $table->bigInteger('pagu')->nullable();
            $table->bigInteger('total_realisasi')->nullable();
            $table->longText('ang')->nullable();
            $table->longText('uraian_pekerjaan')->nullable();
            $table->longText('informasi_lainnya')->nullable();
            $table->bigInteger('kd_kategori_pengadaan')->nullable();
            $table->longText('kategori_pengadaan')->nullable();
            $table->bigInteger('kd_mtd_pemilihan')->nullable();
            $table->longText('mtd_pemilihan_v1')->nullable();
            $table->longText('mtd_pemilihan_v2')->nullable();
            $table->bigInteger('kd_bukti_pembayaran')->nullable();
            $table->longText('bukti_pembayaran')->nullable();
            $table->bigInteger('kd_status_nontender_pct')->nullable();
            $table->longText('status_nontender_pct')->nullable();
            $table->bigInteger('kd_status_pkt_dce')->nullable();
            $table->longText('status_pkt_dce')->nullable();
            $table->longText('nip_ppk')->nullable();
            $table->longText('nama_ppk')->nullable();
            $table->dateTime('tgl_buat_paket')->nullable();
            $table->dateTime('tgl_mulai_paket')->nullable();
            $table->dateTime('tgl_selesai_paket')->nullable();
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
        Schema::dropIfExists('pencatatan_non_tender_spses');
    }
};
