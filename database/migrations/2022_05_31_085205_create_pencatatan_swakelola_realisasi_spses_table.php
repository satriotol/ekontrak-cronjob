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
        Schema::create('pencatatan_swakelola_realisasi_spses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kd_lpse')->nullable();
            $table->bigInteger('kd_swakelola_pct')->nullable();
            $table->bigInteger('kd_realisasi_sw_pct')->nullable();
            $table->bigInteger('kd_jenis_realisasi')->nullable();
            $table->longText('jenis_realisasi')->nullable();
            $table->bigInteger('nilai_realiasi')->nullable();
            $table->dateTime('tgl_realisasi')->nullable();
            $table->longText('keterangan')->nullable();
            $table->longText('no_dok_realisasi')->nullable();
            $table->longText('nama_dok_realisasi')->nullable();
            $table->longText('is_penyedia')->nullable();
            $table->longText('kd_penyedia')->nullable();
            $table->longText('nama_penyedia')->nullable();
            $table->longText('npwp_penyedia')->nullable();
            $table->bigInteger('kd_non_penyedia')->nullable();
            $table->longText('nama_non_penyedia')->nullable();
            $table->longText('npwp_non_penyedia')->nullable();
            $table->dateTime('realisasi_auditupdate')->nullable();
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
        Schema::dropIfExists('pencatatan_swakelola_realisasi_spses');
    }
};
