<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ResponseFormatter;
use App\Models\PaketAnggaranPenyedia;
use App\Models\PaketEPurchasing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class HomeController extends Controller
{
    public function index()
    {
        $responses = Http::get('https://isb.lkpp.go.id/isb/api/1683a6a8-32b4-40f9-a9be-dd07e8942ef3/json/736987856/PaketAnggaranPenyedia1618/tipe/4:12/parameter/2022:D129');
        return $responses->json();
    }
    public function store_paket_anggaran_penyedia(Request $request)
    {
        $responses = Http::accept('application/json')->get('https://isb.lkpp.go.id/isb/api/1683a6a8-32b4-40f9-a9be-dd07e8942ef3/json/736987856/PaketAnggaranPenyedia1618/tipe/4:12/parameter/' . $request->year . ':D129');
        $anggarans = PaketAnggaranPenyedia::where('tahun_anggaran_dana', $request->year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            PaketAnggaranPenyedia::create([
                'koderup' => $response->koderup,
                'id_rup_client' => $response->id_rup_client,
                'kodekomponen' => $response->kodekomponen,
                'kodekegiatan' => $response->kodekegiatan,
                'pagu' => $response->pagu,
                'mak' => $response->mak,
                'sumberdana' => $response->sumberdana,
                'kodeobjekakun' => $response->kodeobjekakun,
                'tahun_anggaran_dana' => $response->tahun_anggaran_dana
            ]);
        }
        return ResponseFormatter::success('', 'Sukses Menambah Data');
    }
    public function store_paket_epurchasing(Request $request)
    {
        $responses = Http::get('https://isb.lkpp.go.id/isb/api/fc667e09-d544-4d1c-ab5d-2801b2b29205/json/736987857/Ecat-PaketEPurchasing/tipe/4:12/parameter/' . $request->year . ':D129');
        $anggarans = PaketEPurchasing::where('tahun_anggaran', $request->year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            PaketEPurchasing::create([
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_klpd' => $response->kd_klpd,
                'satker_id' => $response->satker_id,
                'nama_satker' => $response->nama_satker,
                'alamat_satker' => $response->alamat_satker,
                'npwp_satker' => $response->npwp_satker,
                'kd_paket' => $response->kd_paket,
                'no_paket' => $response->no_paket,
                'nama_paket' => $response->nama_paket,
                'kd_rup' => $response->kd_rup,
                'nama_sumber_dana' => $response->nama_sumber_dana,
                'kode_anggaran' => $response->kode_anggaran,
                'kd_komoditas' => $response->kd_komoditas,
                'kd_produk' => $response->kd_produk,
                'kd_penyedia' => $response->kd_penyedia,
                'kd_penyedia_distributor' => $response->kd_penyedia_distributor,
                'jml_jenis_produk' => $response->jml_jenis_produk,
                'total' => $response->total,
                'kuantitas' => $response->kuantitas,
                'harga_satuan' => $response->harga_satuan,
                'ongkos_kirim' => $response->ongkos_kirim,
                'total_harga' => $response->total_harga,
                'kd_user_pokja' => $response->kd_user_pokja,
                'no_telp_user_pokja' => $response->no_telp_user_pokja,
                'email_user_pokja' => $response->email_user_pokja,
                'kd_user_ppk' => $response->kd_user_ppk,
                'ppk_nip' => $response->ppk_nip,
                'jabatan_ppk' => $response->jabatan_ppk,
                'tanggal_buat_paket' => $response->tanggal_buat_paket,
                'tanggal_edit_paket' => $response->tanggal_edit_paket,
                'deskripsi' => $response->deskripsi,
                'status_paket' => $response->status_paket,
                'paket_status_str' => $response->paket_status_str,
                'catatan_produk' => $response->catatan_produk,
            ]);
        }
        return ResponseFormatter::success('', 'Sukses Menambah Data');
    }
}
