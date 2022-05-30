<?php

namespace App\Http\Controllers;

use App\Models\JadwalPerNonTenderSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JadwalPerNonTenderSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kode_non_tender)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/2f4418ea-4bc7-4981-bc41-0b4b240a0b59/json/736987884/JadwalPerNonTenderSPSE/tipe/4/parameter/' . $kode_non_tender);
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'kd_nontender' => $response->kd_nontender,
                'kd_tahapan' => $response->kd_tahapan,
                'nama_tahapan' => $response->nama_tahapan,
                'kd_akt' => $response->kd_akt,
                'nama_akt' => $response->nama_akt,
                'tanggal_awal' => $response->tanggal_awal,
                'tanggal_akhir' => $response->tanggal_akhir,
            ];
        }
        foreach ($records as $record) {
            JadwalPerNonTenderSpse::updateOrCreate(['kd_nontender' => $record['kd_nontender']], $record);
        }
        return ResponseFormatter::success(JadwalPerNonTenderSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\JadwalPerNonTenderSpse  $jadwalPerNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalPerNonTenderSpse $jadwalPerNonTenderSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JadwalPerNonTenderSpse  $jadwalPerNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalPerNonTenderSpse $jadwalPerNonTenderSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JadwalPerNonTenderSpse  $jadwalPerNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalPerNonTenderSpse $jadwalPerNonTenderSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalPerNonTenderSpse  $jadwalPerNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalPerNonTenderSpse $jadwalPerNonTenderSpse)
    {
        //
    }
}
