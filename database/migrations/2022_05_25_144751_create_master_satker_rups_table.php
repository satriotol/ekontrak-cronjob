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
        Schema::create('master_satker_rups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kd_satker')->nullable();
            $table->longText('kd_satker_str')->nullable();
            $table->string('nama_satker')->nullable();
            $table->longText('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('fax')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('status_satker')->nullable();
            $table->string('ket_satker')->nullable();
            $table->string('jenis_satker')->nullable();
            $table->string('kd_klpd')->nullable();
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
        Schema::dropIfExists('master_satker_rups');
    }
};
