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
        Schema::create('paket_penyedia_opt1618s', function (Blueprint $table) {
            $table->id();
            $table->longText('klpd')->nullable();
            $table->year('tahunanggaran')->nullable();
            $table->bigInteger('idrup')->nullable();
            $table->longText('namapaket')->nullable();
            $table->bigInteger('jumlahpagu')->nullable();
            $table->longText('namasatker')->nullable();
            $table->longText('kodesatker')->nullable();
            $table->longText('metodepengadaan')->nullable();
            $table->bigInteger('idmetodepengadaan')->nullable();
            $table->longText('jenispengadaan')->nullable();
            $table->longText('idjenispengadaan')->nullable();
            $table->longText('spesifikasi')->nullable();
            $table->longText('lokasi')->nullable();
            $table->date('tanggalkebutuhan')->nullable();
            $table->date('tanggalawalpemilihan')->nullable();
            $table->date('tanggalakhirpemilihan')->nullable();
            $table->date('tanggalawalpekerjaan')->nullable();
            $table->date('tanggalakhirpekerjaan')->nullable();
            $table->longText('statuspradipa')->nullable();
            $table->longText('statuspenyedia')->nullable();
            $table->longText('statuspdn')->nullable();
            $table->longText('statususahakecil')->nullable();
            $table->longText('statusumumkan')->nullable();
            $table->longText('keterangan')->nullable();
            $table->longText('ppk')->nullable();
            $table->longText('username')->nullable();
            $table->dateTime('tanggalpengumuman')->nullable();
            $table->longText('id_swakelola')->nullable();
            $table->boolean('statusdeletepaket')->nullable();
            $table->boolean('statusaktifpaket')->nullable();
            $table->bigInteger('id_rup_client')->nullable();
            $table->longText('kd_klpd')->nullable();
            $table->longText('nip_ppk')->nullable();
            $table->longText('volume')->nullable();
            $table->longText('lokasi_kab')->nullable();
            $table->longText('lokasi_prov')->nullable();
            $table->longText('statuspaketkonsolidasi')->nullable();
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
        Schema::dropIfExists('paket_penyedia_opt1618s');
    }
};
