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
        Schema::create('rup_struktur_anggaran_kl1221s', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_anggaran')->nullable();
            $table->longText('kd_klpd')->nullable();
            $table->longText('nama_klpd')->nullable();
            $table->bigInteger('kd_satker')->nullable();
            $table->longText('kd_satker_str')->nullable();
            $table->longText('nama_satker')->nullable();
            $table->bigInteger('belanja_pegawai')->nullable();
            $table->bigInteger('belanja_barjas')->nullable();
            $table->bigInteger('belanja_modal')->nullable();
            $table->bigInteger('belanja_pengadaan_sosial')->nullable();
            $table->bigInteger('belanja_nonpengadaan_sosial')->nullable();
            $table->bigInteger('total_belanja_sosial')->nullable();
            $table->bigInteger('belanja_pengadaan_hibah')->nullable();
            $table->bigInteger('belanja_nonpengadaan_hibah')->nullable();
            $table->bigInteger('total_belanja_hibah')->nullable();
            $table->bigInteger('belanja_pengadaan_lainnya')->nullable();
            $table->bigInteger('belanja_nonpengadaan_lainnya')->nullable();
            $table->bigInteger('total_belanja_lainnya')->nullable();
            $table->bigInteger('total_belanja')->nullable();
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
        Schema::dropIfExists('rup_struktur_anggaran_kl1221s');
    }
};
