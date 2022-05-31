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
        Schema::create('history_kaji_ulang_rup_penyedias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tahun_anggaran')->nullable();
            $table->longText('kd_klpd')->nullable();
            $table->bigInteger('kd_rup_lama')->nullable();
            $table->bigInteger('kd_rup_baru')->nullable();
            $table->longText('jenis_paket')->nullable();
            $table->longText('jenis_revisi')->nullable();
            $table->longText('alasan_kajiulang')->nullable();
            $table->dateTime('tgl_kaji_ulang')->nullable();
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
        Schema::dropIfExists('history_kaji_ulang_rup_penyedias');
    }
};
