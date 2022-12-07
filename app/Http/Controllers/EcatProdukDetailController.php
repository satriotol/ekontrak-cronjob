<?php

namespace App\Http\Controllers;

use App\Models\EcatProdukDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EcatProdukDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kode_produk)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/8e72570e-c4a7-4994-8f3a-20d2a90d1116/json/736987882/Ecat-ProdukDetail/tipe/4/parameter/' . $kode_produk);
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'no_kontrak' => $response->no_kontrak,
                'nama_penyedia' => $response->nama_penyedia,
                'no_produk' => $response->no_produk,
                'no_produk_penyedia' => $response->no_produk_penyedia,
                'nama_manufaktur' => $response->nama_manufaktur,
                'nama_produk' => $response->nama_produk,
                'nama_kategori' => $response->nama_kategori ?? null,
                'harga' => $response->harga,
                'nama_komoditas' => $response->nama_komoditas,
                'jumlah_stok' => $response->jumlah_stok,
                'setuju_tolak_tanggal' => $response->setuju_tolak_tanggal,
                'berlaku_sampai' => $response->berlaku_sampai,
                'unit_pengukuran' => $response->unit_pengukuran,
                'kd_produk' => $response->kd_produk,
                'jenis_produk' => $response->jenis_produk,
                'kbki_id' => $response->kbki_id,
                'nomor_tkdn' => $response->nomor_tkdn,
                'nama_pemilik_sertifikat_tkdn' => $response->nama_pemilik_sertifikat_tkdn,
                'tkdn_produk' => $response->tkdn_produk,
                'nilai_bmp' => $response->nilai_bmp,
                'masa_berlaku_kontrak' => $response->masa_berlaku_kontrak,
                'tglkontrak_mulai' => $response->tglkontrak_mulai,
                'tglkontrak_selesai' => $response->tglkontrak_selesai,
                'nie_id' => $response->nie_id,
                'nie_nib' => $response->nie_nib,
                'nie_nama_usaha' => $response->nie_nama_usaha,
                'nie_npwp' => $response->nie_npwp,
                'nie_klasifikasi_izin' => $response->nie_klasifikasi_izin,
                'nie_tgl_terbit' => $response->nie_tgl_terbit,
                'nie_tgl_expire' => $response->nie_tgl_expire,
                'nie_nama_produk' => $response->nie_nama_produk,
                'nie_kategori' => $response->nie_kategori,
                'nie_sub_kategori' => $response->nie_sub_kategori,
                'nie_jenis_produk' => $response->nie_jenis_produk,
                'nie_hscode' => $response->nie_hscode,
                'nie_kelas' => $response->nie_kelas,
                'nie_kelas_resiko' => $response->nie_kelas_resiko,
                'nie_ukuran' => $response->nie_ukuran,
                'nie_kemasan' => $response->nie_kemasan,
                'nie_nama_pabrik' => $response->nie_nama_pabrik,
                'nie_negara_pabrik' => $response->nie_negara_pabrik,
                'nie_alamat_pabrik' => $response->nie_alamat_pabrik,
                'nie_last_update' => $response->nie_last_update,
                'status_tayang' => $response->status_tayang,
            ];
        }
        foreach ($records as $record) {
            EcatProdukDetail::updateOrCreate(['kd_produk' => $record['kd_produk'], 'tglkontrak_mulai' => $record['tglkontrak_mulai']], $record);
        }
        return ResponseFormatter::success(EcatProdukDetail::all()->count(), 'Sukses Menambah Data');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EcatProdukDetail  $ecatProdukDetail
     * @return \Illuminate\Http\Response
     */
    public function show(EcatProdukDetail $ecatProdukDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EcatProdukDetail  $ecatProdukDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(EcatProdukDetail $ecatProdukDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EcatProdukDetail  $ecatProdukDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EcatProdukDetail $ecatProdukDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EcatProdukDetail  $ecatProdukDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(EcatProdukDetail $ecatProdukDetail)
    {
        //
    }
}
