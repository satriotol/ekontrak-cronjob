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
        Schema::create('rinci_objek_akun_master_rups', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_program')->nullable();
            $table->bigInteger('id_kegiatan')->nullable();
            $table->bigInteger('id_table')->nullable();
            $table->longText('kode_rinciobjekakund')->nullable();
            $table->longText('uraian_rinciobjekakun')->nullable();
            $table->bigInteger('pagu')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->bigInteger('id_client')->nullable();
            $table->bigInteger('id_objekakun')->nullable();
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
        Schema::dropIfExists('rinci_objek_akun_master_rups');
    }
};
