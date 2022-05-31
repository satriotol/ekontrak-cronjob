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
        Schema::create('pp_per_non_tender_spses', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_anggaran')->nullable();
            $table->bigInteger('kd_nontender')->nullable();
            $table->bigInteger('kd_lpse')->nullable();
            $table->dateTime('pp_tgl_awal')->nullable();
            $table->longText('pp_tgl_akhir')->nullable();
            $table->longText('pp_pembuat_sk')->nullable();
            $table->longText('pp_nomor_sk')->nullable();
            $table->longText('nama_pegawai')->nullable();
            $table->bigInteger('nip_pegawai')->nullable();
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
        Schema::dropIfExists('pp_per_non_tender_spses');
    }
};
