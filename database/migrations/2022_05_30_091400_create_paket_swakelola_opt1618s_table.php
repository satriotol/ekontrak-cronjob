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
        Schema::create('paket_swakelola_opt1618s', function (Blueprint $table) {
            $table->id();
            $table->longText('klpd')->nullable();
            $table->longText('tahunanggaran')->nullable();
            $table->longText('idrup')->nullable();
            $table->longText('namapaket')->nullable();
            $table->longText('jumlahpagu')->nullable();
            $table->longText('namasatker')->nullable();
            $table->longText('kodesatker')->nullable();
            $table->longText('lokasi')->nullable();
            $table->date('tanggalawalpekerjaan')->nullable();
            $table->date('tanggalakhirpekerjaan')->nullable();
            $table->longText('keterangan')->nullable();
            $table->longText('ppk')->nullable();
            $table->longText('nip_ppk')->nullable();
            $table->dateTime('tanggalpengumuman')->nullable();
            $table->boolean('statusdeletepaket')->nullable();
            $table->boolean('statusaktifpaket')->nullable();
            $table->bigInteger('id_rup_client')->nullable();
            $table->bigInteger('tipe_swakelola')->nullable();
            $table->longText('kode_klpd_penyelenggara')->nullable();
            $table->longText('nama_klpd_penyelenggara')->nullable();
            $table->longText('nama_satker_penyelenggara')->nullable();
            $table->longText('username')->nullable();
            $table->string('kd_klpd')->nullable();
            $table->longText('volume')->nullable();
            $table->longText('lokasi_kab')->nullable();
            $table->longText('lokasi_prov')->nullable();
            $table->bigInteger('idsatker')->nullable();
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
        Schema::dropIfExists('paket_swakelola_opt1618s');
    }
};
