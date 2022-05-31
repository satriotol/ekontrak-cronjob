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
        Schema::create('ecat_produk_details', function (Blueprint $table) {
            $table->id();
            $table->longText('no_kontrak')->nullable();
            $table->longText('nama_penyedia')->nullable();
            $table->longText('no_produk')->nullable();
            $table->longText('no_produk_penyedia')->nullable();
            $table->longText('nama_manufaktur')->nullable();
            $table->longText('nama_produk')->nullable();
            $table->longText('nama_kategori')->nullable();
            $table->json('harga')->nullable();
            $table->longText('nama_komoditas')->nullable();
            $table->bigInteger('jumlah_stok')->nullable();
            $table->dateTime('setuju_tolak_tanggal')->nullable();
            $table->date('berlaku_sampai')->nullable();
            $table->longText('unit_pengukuran')->nullable();
            $table->bigInteger('kd_produk')->nullable();
            $table->longText('jenis_produk')->nullable();
            $table->bigInteger('kbki_id')->nullable();
            $table->longText('nomor_tkdn')->nullable();
            $table->longText('nama_pemilik_sertifikat_tkdn')->nullable();
            $table->longText('tkdn_produk')->nullable();
            $table->longText('nilai_bmp')->nullable();
            $table->longText('masa_berlaku_kontrak')->nullable();
            $table->date('tglkontrak_mulai')->nullable();
            $table->longText('tglkontrak_selesai')->nullable();
            $table->longText('nie_id')->nullable();
            $table->longText('nie_nib')->nullable();
            $table->longText('nie_nama_usaha')->nullable();
            $table->longText('nie_npwp')->nullable();
            $table->longText('nie_klasifikasi_izin')->nullable();
            $table->longText('nie_tgl_terbit')->nullable();
            $table->longText('nie_tgl_expire')->nullable();
            $table->longText('nie_nama_produk')->nullable();
            $table->longText('nie_kategori')->nullable();
            $table->longText('nie_sub_kategori')->nullable();
            $table->longText('nie_jenis_produk')->nullable();
            $table->longText('nie_hscode')->nullable();
            $table->longText('nie_kelas')->nullable();
            $table->longText('nie_kelas_resiko')->nullable();
            $table->longText('nie_ukuran')->nullable();
            $table->longText('nie_kemasan')->nullable();
            $table->longText('nie_nama_pabrik')->nullable();
            $table->longText('nie_negara_pabrik')->nullable();
            $table->longText('nie_alamat_pabrik')->nullable();
            $table->longText('nie_last_update')->nullable();
            $table->longText('status_tayang')->nullable();
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
        Schema::dropIfExists('ecat_produk_details');
    }
};
