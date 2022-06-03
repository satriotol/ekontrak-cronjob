<?php

namespace App\Http\Controllers;

use App\Models\PaketAnggaranSwakelola1618;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaketAnggaranSwakelola1618Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/b4105b24-dce9-4fba-b7e8-9c9bf1bc7e84/json/736987900/PaketAnggaranSwakelola1618/tipe/4:12/parameter/' . $year . ':D129');
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'koderup' => $response->koderup,
                'id_rup_client' => $response->id_rup_client,
                'kodekomponen' => $response->kodekomponen,
                'kodekegiatan' => $response->kodekegiatan,
                'pagu' => $response->pagu,
                'mak' => $response->mak,
                'sumberdana' => $response->sumberdana,
                'tahun_anggaran_dana' => $response->tahun_anggaran_dana,
                'kodeobjekakun' => $response->kodeobjekakun,
            ];
        }
        foreach ($records as $record) {
            PaketAnggaranSwakelola1618::updateOrCreate(['koderup' => $record['koderup'],'tahun_anggaran_dana' => $record['tahun_anggaran_dana']], $record);
        }
        return ResponseFormatter::success(PaketAnggaranSwakelola1618::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\PaketAnggaranSwakelola1618  $paketAnggaranSwakelola1618
     * @return \Illuminate\Http\Response
     */
    public function show(PaketAnggaranSwakelola1618 $paketAnggaranSwakelola1618)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketAnggaranSwakelola1618  $paketAnggaranSwakelola1618
     * @return \Illuminate\Http\Response
     */
    public function edit(PaketAnggaranSwakelola1618 $paketAnggaranSwakelola1618)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaketAnggaranSwakelola1618  $paketAnggaranSwakelola1618
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaketAnggaranSwakelola1618 $paketAnggaranSwakelola1618)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketAnggaranSwakelola1618  $paketAnggaranSwakelola1618
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaketAnggaranSwakelola1618 $paketAnggaranSwakelola1618)
    {
        //
    }
}
