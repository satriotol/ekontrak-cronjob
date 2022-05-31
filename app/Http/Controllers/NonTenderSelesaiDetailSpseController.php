<?php

namespace App\Http\Controllers;

use App\Models\NonTenderSelesaiDetailSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NonTenderSelesaiDetailSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year, $lpse)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/eadf3b47-5899-4f7a-8229-d9aae56af726/json/736987899/NonTenderSelesaiDetailSPSE/tipe/4:4/parameter/' . $year . ':' . $lpse);
        $anggarans = NonTenderSelesaiDetailSpse::where('tahun_anggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            NonTenderSelesaiDetailSpse::create([
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_klpd' => $response->kd_klpd,
                'nama_klpd' => $response->nama_klpd,
                'jenis_klpd' => $response->jenis_klpd,
                'kd_satker' => $response->kd_satker,
                'nama_satker' => $response->nama_satker,
                'kd_lpse' => $response->kd_lpse,
                'nama_lpse' => $response->nama_lpse,
                'kd_nontender' => $response->kd_nontender,
                'kd_rup_paket' => $response->kd_rup_paket,
                'nama_paket' => $response->nama_paket,
                'pagu' => $response->pagu,
                'hps' => $response->hps,
                'nilai_penawaran' => $response->nilai_penawaran,
                'nilai_terkoreksi' => $response->nilai_terkoreksi,
                'nilai_negosiasi' => $response->nilai_negosiasi,
                'nilai_kontrak' => $response->nilai_kontrak,
                'anggaran' => $response->anggaran,
                'kualifikasi_paket' => $response->kualifikasi_paket,
                'kategori_pengadaan' => $response->kategori_pengadaan,
                'metode_pengadaan' => $response->metode_pengadaan,
                'tanggal_buat_paket' => $response->tanggal_buat_paket,
                'tanggal_pengumuman_nontender' => $response->tanggal_pengumuman_nontender,
                'tanggal_selesai_nontender' => $response->tanggal_selesai_nontender,
                'kd_penyedia' => $response->kd_penyedia,
                'nama_penyedia' => $response->nama_penyedia,
                'npwp_penyedia' => $response->npwp_penyedia,
                'kode_mak' => $response->kode_mak,
                'nilai_pdn_kontrak' => $response->nilai_pdn_kontrak,
                'nilai_umk_kontrak' => $response->nilai_umk_kontrak,
            ]);
        }
        return ResponseFormatter::success(NonTenderSelesaiDetailSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\NonTenderSelesaiDetailSpse  $nonTenderSelesaiDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function show(NonTenderSelesaiDetailSpse $nonTenderSelesaiDetailSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NonTenderSelesaiDetailSpse  $nonTenderSelesaiDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(NonTenderSelesaiDetailSpse $nonTenderSelesaiDetailSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NonTenderSelesaiDetailSpse  $nonTenderSelesaiDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NonTenderSelesaiDetailSpse $nonTenderSelesaiDetailSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NonTenderSelesaiDetailSpse  $nonTenderSelesaiDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(NonTenderSelesaiDetailSpse $nonTenderSelesaiDetailSpse)
    {
        //
    }
}
