<?php

namespace App\Http\Controllers;

use App\Models\HistoryKajiUlangRupPenyedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HistoryKajiUlangRupPenyediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($rup)
    {
        $url = 'https://inaproc.lkpp.go.id/isb/api/378eb270-b469-48fd-8661-f4945f113b05/json/736987886/HistoryKajiUlangRUPpenyedia/tipe/4/parameter/' . $rup;
        $responses = Http::accept('application/json')->get($url);
        $records = array();
        dd($responses);
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'tahun_anggaran' => $response->tahun_anggaran ?? null,
                'kd_klpd' => $response->kd_klpd ?? null,
                'kd_rup_lama' => $response->kd_rup_lama ?? null,
                'kd_rup_baru' => $response->kd_rup_baru ?? null,
                'jenis_paket' => $response->jenis_paket ?? null,
                'jenis_revisi' => $response->jenis_revisi ?? null,
                'alasan_kajiulang' => $response->alasan_kajiulang ?? null,
                'tgl_kaji_ulang' => $response->tgl_kaji_ulang ?? null,
            ];
        }
        foreach ($records as $record) {
            HistoryKajiUlangRupPenyedia::updateOrCreate(['kd_rup_lama' => $record['kd_rup_lama'], 'jenis_revisi' => $record['jenis_revisi']], $record);
        }
        return ResponseFormatter::success(HistoryKajiUlangRupPenyedia::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\HistoryKajiUlangRupPenyedia  $historyKajiUlangRupPenyedia
     * @return \Illuminate\Http\Response
     */
    public function show(HistoryKajiUlangRupPenyedia $historyKajiUlangRupPenyedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoryKajiUlangRupPenyedia  $historyKajiUlangRupPenyedia
     * @return \Illuminate\Http\Response
     */
    public function edit(HistoryKajiUlangRupPenyedia $historyKajiUlangRupPenyedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HistoryKajiUlangRupPenyedia  $historyKajiUlangRupPenyedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistoryKajiUlangRupPenyedia $historyKajiUlangRupPenyedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoryKajiUlangRupPenyedia  $historyKajiUlangRupPenyedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistoryKajiUlangRupPenyedia $historyKajiUlangRupPenyedia)
    {
        //
    }
}
