<?php

namespace App\Http\Controllers;

use App\Models\PokjaPerTenderSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokjaPerTenderSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year, $lpse)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/accab8e7-c69b-4991-b77c-88a2e90906c3/json/736987888/PokjaPerTenderSPSE/tipe/4:4/parameter/' . $year . ':' . $lpse);
        $anggarans = PokjaPerTenderSpse::where('tahun_anggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            PokjaPerTenderSpse::create([
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_tender' => $response->kd_tender,
                'kd_lpse' => $response->kd_lpse,
                'kd_klpd' => $response->kd_klpd,
                'nama_klpd' => $response->nama_klpd,
                'kd_satker' => $response->kd_satker,
                'kd_satker_str' => $response->kd_satker_str,
                'nama_satker' => $response->nama_satker,
                'nama_pokja' => $response->nama_pokja,
                'no_sk_pokja' => $response->no_sk_pokja,
                'tahun_pokja' => $response->tahun_pokja,
                'nama_pegawai' => $response->nama_pegawai,
                'nip_pegawai' => $response->nip_pegawai,
                'email_pegawai' => $response->email_pegawai,
                'username' => $response->username,
            ]);
        }
        return ResponseFormatter::success(PokjaPerTenderSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\PokjaPerTenderSpse  $pokjaPerTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function show(PokjaPerTenderSpse $pokjaPerTenderSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PokjaPerTenderSpse  $pokjaPerTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(PokjaPerTenderSpse $pokjaPerTenderSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PokjaPerTenderSpse  $pokjaPerTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PokjaPerTenderSpse $pokjaPerTenderSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PokjaPerTenderSpse  $pokjaPerTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(PokjaPerTenderSpse $pokjaPerTenderSpse)
    {
        //
    }
}
