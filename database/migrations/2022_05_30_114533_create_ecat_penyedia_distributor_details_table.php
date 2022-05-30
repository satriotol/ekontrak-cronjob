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
        Schema::create('ecat_penyedia_distributor_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kd_penyedia_distributor')->nullable();
            $table->longText('nama_distributor')->nullable();
            $table->longText('alamat_distributor')->nullable();
            $table->longText('email_distributor')->nullable();
            $table->longText('no_telp_distributor')->nullable();
            $table->longText('npwp_distributor')->nullable();
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
        Schema::dropIfExists('ecat_penyedia_distributor_details');
    }
};
