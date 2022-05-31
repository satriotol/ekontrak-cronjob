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
        Schema::create('pokja_per_tender_spses', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_anggaran')->nullable();
            $table->bigInteger('kd_tender')->nullable();
            $table->bigInteger('kd_lpse')->nullable();
            $table->longText('kd_klpd')->nullable();
            $table->longText('nama_klpd')->nullable();
            $table->bigInteger('kd_satker')->nullable();
            $table->longText('kd_satker_str')->nullable();
            $table->longText('nama_satker')->nullable();
            $table->longText('nama_pokja')->nullable();
            $table->longText('no_sk_pokja')->nullable();
            $table->year('tahun_pokja')->nullable();
            $table->longText('nama_pegawai')->nullable();
            $table->longText('nip_pegawai')->nullable();
            $table->longText('email_pegawai')->nullable();
            $table->longText('username')->nullable();
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
        Schema::dropIfExists('pokja_per_tender_spses');
    }
};
