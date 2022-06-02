<?php

namespace App\Http\Controllers;

use App\Models\TenderSelesaiDetailSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TenderSelesaiDetailSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year, $lpse)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/7815223e-cb39-421d-b799-94c6e649b74f/json/736987893/TenderSelesaiDetailSPSE/tipe/4:4/parameter/' . $year . ':' . $lpse);
        $anggarans = TenderSelesaiDetailSpse::where('tahun_anggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            TenderSelesaiDetailSpse::create([
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_klpd' => $response->kd_klpd,
                'nama_klpd' => $response->nama_klpd,
                'jenis_klpd' => $response->jenis_klpd,
                'kd_satker' => $response->kd_satker,
                'nama_satker' => $response->nama_satker,
                'kd_lpse' => $response->kd_lpse,
                'kd_tender' => $response->kd_tender,
                'kd_paket' => $response->kd_paket,
                'kd_rup_paket' => $response->kd_rup_paket,
                'pagu' => $response->pagu,
                'hps' => $response->hps,
                'nilai_penawaran' => $response->nilai_penawaran,
                'nilai_terkoreksi' => $response->nilai_terkoreksi,
                'nilai_negosiasi' => $response->nilai_negosiasi,
                'nilai_kontrak' => $response->nilai_kontrak,
                'tgl_pengumuman_tender' => $response->tgl_pengumuman_tender,
                'tgl_penetapan_pemenang' => $response->tgl_penetapan_pemenang,
                'kd_penyedia' => $response->kd_penyedia,
                'nama_penyedia' => $response->nama_penyedia,
                'npwp_penyedia' => $response->npwp_penyedia,
                'kode_mak' => $response->kode_mak,
                'nilai_pdn_kontrak' => $response->nilai_pdn_kontrak,
                'nilai_umk_kontrak' => $response->nilai_umk_kontrak,
            ]);
        }
        return ResponseFormatter::success(TenderSelesaiDetailSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\TenderSelesaiDetailSpse  $tenderSelesaiDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function show(TenderSelesaiDetailSpse $tenderSelesaiDetailSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TenderSelesaiDetailSpse  $tenderSelesaiDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(TenderSelesaiDetailSpse $tenderSelesaiDetailSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TenderSelesaiDetailSpse  $tenderSelesaiDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TenderSelesaiDetailSpse $tenderSelesaiDetailSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TenderSelesaiDetailSpse  $tenderSelesaiDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(TenderSelesaiDetailSpse $tenderSelesaiDetailSpse)
    {
        //
    }
}
