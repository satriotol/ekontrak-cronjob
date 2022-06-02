<?php

namespace App\Http\Controllers;

use App\Models\PokjaPerNonTenderSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokjaPerNonTenderSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year, $lpse)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/a285cad3-6a6e-43db-8a3c-a08b2e957ab1/json/736987896/PokjaPerNonTenderSPSE/tipe/4:4/parameter/' . $year . ':' . $lpse);
        $anggarans = PokjaPerNonTenderSpse::where('tahun_anggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            PokjaPerNonTenderSpse::create([
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_nontender' => $response->kd_nontender,
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
        return ResponseFormatter::success(PokjaPerNonTenderSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\PokjaPerNonTenderSpse  $pokjaPerNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function show(PokjaPerNonTenderSpse $pokjaPerNonTenderSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PokjaPerNonTenderSpse  $pokjaPerNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(PokjaPerNonTenderSpse $pokjaPerNonTenderSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PokjaPerNonTenderSpse  $pokjaPerNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PokjaPerNonTenderSpse $pokjaPerNonTenderSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PokjaPerNonTenderSpse  $pokjaPerNonTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(PokjaPerNonTenderSpse $pokjaPerNonTenderSpse)
    {
        //
    }
}
