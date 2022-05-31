<?php

namespace App\Http\Controllers;

use App\Models\JadwalPerTenderSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JadwalPerTenderSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kode_tender)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/be0cb720-afb1-4aea-be27-1bf9b8d88a30/json/736987891/JadwalPerTenderSPSE/tipe/4/parameter/' . $kode_tender);
        $kode_tenders = JadwalPerTenderSpse::where('kd_lelang', $kode_tender)->get();
        foreach ($kode_tenders as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            JadwalPerTenderSpse::create([
                'kd_lelang' => $response->kd_lelang,
                'kd_tahapan' => $response->kd_tahapan,
                'tahapan' => $response->tahapan,
                'tanggal_awal' => $response->tanggal_awal,
                'tanggal_akhir' => $response->tanggal_akhir,
                'kd_akt' => $response->kd_akt,
                'nama_akt' => $response->nama_akt,
            ]);
        }
        return ResponseFormatter::success(JadwalPerTenderSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\JadwalPerTenderSpse  $jadwalPerTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalPerTenderSpse $jadwalPerTenderSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JadwalPerTenderSpse  $jadwalPerTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalPerTenderSpse $jadwalPerTenderSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JadwalPerTenderSpse  $jadwalPerTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalPerTenderSpse $jadwalPerTenderSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalPerTenderSpse  $jadwalPerTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalPerTenderSpse $jadwalPerTenderSpse)
    {
        //
    }
}
