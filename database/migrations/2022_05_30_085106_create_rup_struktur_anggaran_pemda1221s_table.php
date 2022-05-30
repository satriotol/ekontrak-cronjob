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
        Schema::create('rup_struktur_anggaran_pemda1221s', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_anggaran')->nullable();
            $table->string('kd_klpd')->nullable();
            $table->string('nama_klpd')->nullable();
            $table->unsignedBigInteger('kd_satker')->nullable();
            $table->longText('kd_satker_str')->nullable();
            $table->longText('nama_satker')->nullable();
            $table->bigInteger('belanja_operasi')->nullable();
            $table->bigInteger('belanja_modal')->nullable();
            $table->bigInteger('belanja_btt')->nullable();
            $table->bigInteger('belanja_non_pengadaan')->nullable();
            $table->bigInteger('belanja_pengadaan')->nullable();
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
        Schema::dropIfExists('rup_struktur_anggaran_pemda1221s');
    }
};
