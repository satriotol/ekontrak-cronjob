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
        Schema::create('jadwal_per_non_tender_spses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kd_nontender')->nullable();
            $table->bigInteger('kd_tahapan')->nullable();
            $table->longText('nama_tahapan')->nullable();
            $table->bigInteger('kd_akt')->nullable();
            $table->longText('nama_akt')->nullable();
            $table->dateTime('tanggal_awal')->nullable();
            $table->dateTime('tanggal_akhir')->nullable();
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
        Schema::dropIfExists('jadwal_per_non_tender_spses');
    }
};
