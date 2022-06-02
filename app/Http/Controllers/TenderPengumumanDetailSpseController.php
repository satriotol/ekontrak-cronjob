<?php

namespace App\Http\Controllers;

use App\Models\TenderPengumumanDetailSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TenderPengumumanDetailSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year, $lpse)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/773fe4c8-2496-4b90-b7ba-60edb809d42b/json/736987895/TenderPengumumanDetailSPSE/tipe/4:4/parameter/' . $year . ':' . $lpse);
        $anggarans = TenderPengumumanDetailSpse::where('tahun_anggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            TenderPengumumanDetailSpse::create([
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_klpd' => $response->kd_klpd,
                'nama_klpd' => $response->nama_klpd,
                'jenis_klpd' => $response->jenis_klpd,
                'kd_lpse' => $response->kd_lpse,
                'nama_lpse' => $response->nama_lpse,
                'kd_satker' => $response->kd_satker,
                'nama_satker' => $response->nama_satker,
                'kd_tender' => $response->kd_tender,
                'kd_paket' => $response->kd_paket,
                'kd_rup_paket' => $response->kd_rup_paket,
                'nama_paket' => $response->nama_paket,
                'pagu' => $response->pagu,
                'hps' => $response->hps,
                'ang' => $response->ang,
                'jenis_pengadaan' => $response->jenis_pengadaan,
                'mtd_pemilihan' => $response->mtd_pemilihan,
                'mtd_evaluasi' => $response->mtd_evaluasi,
                'mtd_kualifikasi' => $response->mtd_kualifikasi,
                'kontrak_pembayaran' => $response->kontrak_pembayaran,
                'kontrak_tahun' => $response->kontrak_tahun,
                'jenis_kontrak' => $response->jenis_kontrak,
                'nama_status_tender' => $response->nama_status_tender,
                'versi_tender' => $response->versi_tender,
                'ket_diulang' => $response->ket_diulang,
                'ket_ditutup' => $response->ket_ditutup,
                'tgl_buat_paket' => $response->tgl_buat_paket,
                'tgl_kolektif_kolegial' => $response->tgl_kolektif_kolegial,
                'tgl_pengumuman_tender' => $response->tgl_pengumuman_tender,
                'url_lpse' => $response->url_lpse,
                'kualifikasi_paket' => $response->kualifikasi_paket,
                'lokasi_pekerjaan' => $response->lokasi_pekerjaan,
            ]);
        }
        return ResponseFormatter::success(TenderPengumumanDetailSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\TenderPengumumanDetailSpse  $tenderPengumumanDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function show(TenderPengumumanDetailSpse $tenderPengumumanDetailSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TenderPengumumanDetailSpse  $tenderPengumumanDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(TenderPengumumanDetailSpse $tenderPengumumanDetailSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TenderPengumumanDetailSpse  $tenderPengumumanDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TenderPengumumanDetailSpse $tenderPengumumanDetailSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TenderPengumumanDetailSpse  $tenderPengumumanDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(TenderPengumumanDetailSpse $tenderPengumumanDetailSpse)
    {
        //
    }
}
