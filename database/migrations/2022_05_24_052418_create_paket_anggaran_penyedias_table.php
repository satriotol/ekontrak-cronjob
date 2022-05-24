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
        Schema::create('paket_anggaran_penyedias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('koderup');
            $table->bigInteger('id_rup_client')->nullable();
            $table->bigInteger('kodekomponen')->nullable();
            $table->bigInteger('kodekegiatan');
            $table->bigInteger('pagu');
            $table->longText('mak');
            $table->string('sumberdana');
            $table->bigInteger('kodeobjekakun');
            $table->year('tahun_anggaran_dana');
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
        Schema::dropIfExists('paket_anggaran_penyedias');
    }
};
