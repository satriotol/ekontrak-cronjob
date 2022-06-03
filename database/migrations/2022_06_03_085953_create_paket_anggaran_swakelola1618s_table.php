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
        Schema::create('paket_anggaran_swakelola1618s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('koderup')->nullable();
            $table->longText('id_rup_client')->nullable();
            $table->longText('kodekomponen')->nullable();
            $table->bigInteger('kodekegiatan')->nullable();
            $table->longText('pagu')->nullable();
            $table->longText('sumberdana')->nullable();
            $table->year('tahun_anggaran_dana')->nullable();
            $table->bigInteger('kodeobjekakun')->nullable();
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
        Schema::dropIfExists('paket_anggaran_swakelola1618s');
    }
};
