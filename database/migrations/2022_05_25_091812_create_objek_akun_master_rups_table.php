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
        Schema::create('objek_akun_master_rups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_table');
            $table->unsignedBigInteger('id_program')->nullable();
            $table->unsignedBigInteger('id_kegiatan')->nullable();
            $table->string('kode_objekakund')->nullable();
            $table->longText('uraian_objekakun')->nullable();
            $table->bigInteger('pagu')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedBigInteger('id_client')->nullable();
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
        Schema::dropIfExists('objek_akun_master_rups');
    }
};
