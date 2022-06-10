<?php

namespace App\Http\Controllers;

use App\Models\PencatatanNonTenderSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PencatatanNonTenderSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/c1fd44a2-18e9-4907-a53e-89e472244ed1/json/736987892/PencatatanNonTenderSPSE/tipe/4:4/parameter/' . $year . ':108');
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_klpd' => $response->kd_klpd,
                'nama_klpd' => $response->nama_klpd,
                'jenis_klpd' => $response->jenis_klpd,
                'kd_satker' => $response->kd_satker,
                'kd_satker_str' => $response->kd_satker_str,
                'nama_satker' => $response->nama_satker,
                'kd_lpse' => $response->kd_lpse,
                'nama_lpse' => $response->nama_lpse,
                'kd_nontender_pct' => $response->kd_nontender_pct,
                'kd_pkt_dce' => $response->kd_pkt_dce,
                'kd_rup_paket' => $response->kd_rup_paket,
                'nama_paket' => $response->nama_paket,
                'pagu' => $response->pagu,
                'total_realisasi' => $response->total_realisasi,
                'ang' => $response->ang,
                'uraian_pekerjaan' => $response->uraian_pekerjaan,
                'informasi_lainnya' => $response->informasi_lainnya,
                'kd_kategori_pengadaan' => $response->kd_kategori_pengadaan,
                'kategori_pengadaan' => $response->kategori_pengadaan,
                'kd_mtd_pemilihan' => $response->kd_mtd_pemilihan,
                'mtd_pemilihan_v1' => $response->mtd_pemilihan_v1,
                'mtd_pemilihan_v1' => $response->mtd_pemilihan_v2,
                'kd_bukti_pembayaran' => $response->kd_bukti_pembayaran,
                'bukti_pembayaran' => $response->bukti_pembayaran,
                'kd_status_nontender_pct' => $response->kd_status_nontender_pct,
                'status_nontender_pct' => $response->status_nontender_pct,
                'kd_status_pkt_dce' => $response->kd_status_pkt_dce,
                'status_pkt_dce' => $response->status_pkt_dce,
                'nip_ppk' => $response->nip_ppk,
                'nama_ppk' => $response->nama_ppk,
                'tgl_buat_paket' => $response->tgl_buat_paket,
                'tgl_mulai_paket' => $response->tgl_mulai_paket,
                'tgl_selesai_paket' => $response->tgl_selesai_paket,
            ];
        }
        foreach ($records as $record) {
            PencatatanNonTenderSpse::updateOrCreate(['kd_nontender_pct' => $record['kd_nontender_pct'], 'tahun_anggaran' => $record['tahun_anggaran']], $record);
        }
        return ResponseFormatter::success(PencatatanNonTenderSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\PencatatanNonTenderSpse  $pencatatanNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function show(PencatatanNonTenderSpse $pencatatanNonTenderSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PencatatanNonTenderSpse  $pencatatanNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(PencatatanNonTenderSpse $pencatatanNonTenderSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PencatatanNonTenderSpse  $pencatatanNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PencatatanNonTenderSpse $pencatatanNonTenderSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PencatatanNonTenderSpse  $pencatatanNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(PencatatanNonTenderSpse $pencatatanNonTenderSpse)
    {
        //
    }
}
