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
        Schema::create('ecat_penyedia_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kd_penyedia')->nullable();
            $table->longText('nama_penyedia')->nullable();
            $table->longText('penyedia_ukm')->nullable();
            $table->longText('alamat_penyedia')->nullable();
            $table->longText('email_penyedia')->nullable();
            $table->longText('no_telp_penyedia')->nullable();
            $table->longText('npwp_penyedia')->nullable();
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
        Schema::dropIfExists('ecat_penyedia_details');
    }
};
