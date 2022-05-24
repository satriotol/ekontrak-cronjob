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
        Schema::create('paket_e_purchasings', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_anggaran')->nullable();
            $table->longText('kd_klpd')->nullable();
            $table->longText('satker_id')->nullable();
            $table->longText('nama_satker')->nullable();
            $table->longText('alamat_satker')->nullable();
            $table->longText('npwp_satker')->nullable();
            $table->longText('kd_paket')->nullable();
            $table->longText('no_paket')->nullable();
            $table->longText('nama_paket')->nullable();
            $table->longText('kd_rup')->nullable();
            $table->longText('nama_sumber_dana')->nullable();
            $table->longText('kode_anggaran')->nullable();
            $table->longText('kd_komoditas')->nullable();
            $table->longText('kd_produk')->nullable();
            $table->longText('kd_penyedia')->nullable();
            $table->longText('kd_penyedia_distributor')->nullable();
            $table->longText('jml_jenis_produk')->nullable();
            $table->longText('total')->nullable();
            $table->longText('kuantitas')->nullable();
            $table->longText('harga_satuan')->nullable();
            $table->longText('ongkos_kirim')->nullable();
            $table->longText('total_harga')->nullable();
            $table->longText('kd_user_pokja')->nullable();
            $table->longText('no_telp_user_pokja')->nullable();
            $table->longText('email_user_pokja')->nullable();
            $table->longText('kd_user_ppk')->nullable();
            $table->longText('ppk_nip')->nullable();
            $table->longText('jabatan_ppk')->nullable();
            $table->longText('tanggal_buat_paket')->nullable();
            $table->longText('tanggal_edit_paket')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->longText('status_paket')->nullable();
            $table->longText('paket_status_str')->nullable();
            $table->longText('catatan_produk')->nullable();
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
        Schema::dropIfExists('paket_e_purchasings');
    }
};
