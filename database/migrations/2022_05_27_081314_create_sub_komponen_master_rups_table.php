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
        Schema::create('sub_komponen_master_rups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_program')->nullable();
            $table->unsignedBigInteger('id_kegiatan')->nullable();
            $table->unsignedBigInteger('id_output')->nullable();
            $table->unsignedBigInteger('id_suboutput')->nullable();
            $table->unsignedBigInteger('id_komponen')->nullable();
            $table->unsignedBigInteger('id_table')->nullable();
            $table->string('kode_subkomponen_string')->nullable();
            $table->string('nama')->nullable();
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
        Schema::dropIfExists('sub_komponen_master_rups');
    }
};
