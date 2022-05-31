<?php

namespace App\Http\Controllers;

use App\Models\PpPerNonTenderSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PpPerNonTenderSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year, $lpse)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/47544257-d312-4d77-a797-b6ed372eeab0/json/736987881/PPperNonTenderSPSE/tipe/4:4/parameter/' . $year . ':' . $lpse);
        $anggarans = PpPerNonTenderSpse::where('tahun_anggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            PpPerNonTenderSpse::create([
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_nontender' => $response->kd_nontender,
                'kd_lpse' => $response->kd_lpse,
                'pp_tgl_awal' => $response->pp_tgl_awal,
                'pp_tgl_akhir' => $response->pp_tgl_akhir,
                'pp_pembuat_sk' => $response->pp_pembuat_sk,
                'pp_nomor_sk' => $response->pp_nomor_sk,
                'nama_pegawai' => $response->nama_pegawai,
                'nip_pegawai' => $response->nip_pegawai,
            ]);
        }
        return ResponseFormatter::success(PpPerNonTenderSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\PpPerNonTenderSpse  $ppPerNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function show(PpPerNonTenderSpse $ppPerNonTenderSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PpPerNonTenderSpse  $ppPerNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(PpPerNonTenderSpse $ppPerNonTenderSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PpPerNonTenderSpse  $ppPerNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PpPerNonTenderSpse $ppPerNonTenderSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PpPerNonTenderSpse  $ppPerNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(PpPerNonTenderSpse $ppPerNonTenderSpse)
    {
        //
    }
}
