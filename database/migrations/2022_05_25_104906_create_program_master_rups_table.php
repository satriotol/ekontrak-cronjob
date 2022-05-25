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
        Schema::create('program_master_rups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_table');
            $table->string('kode_programs')->nullable();
            $table->string('nama')->nullable();
            $table->bigInteger('pagu')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->unsignedBigInteger('id_client')->nullable();
            $table->unsignedBigInteger('id_satker')->nullable();
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
        Schema::dropIfExists('program_master_rups');
    }
};
