<?php

namespace App\Http\Controllers;

use App\Jobs\PaketSwakelolaOpt1618Job;
use App\Models\PaketSwakelolaOpt1618;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaketSwakelolaOpt1618Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $url = 'https://inaproc.lkpp.go.id/isb/api/ed83b1a5-9dde-415c-8e5f-cbb77b453a6a/json/736987909/PaketSwakelolaOpt1618/tipe/4:12/parameter/' . $year . ':D129';
        $responses = Http::timeout(600)->accept('application/json')->get($url);
        foreach (json_decode($responses) as $response) {
            dispatch(new PaketSwakelolaOpt1618Job($response));
        }
        return ResponseFormatter::success($url, 'Sukses Menambah Data');
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
     * @param  \App\Models\PaketSwakelolaOpt1618  $paketSwakelolaOpt1618
     * @return \Illuminate\Http\Response
     */
    public function show(PaketSwakelolaOpt1618 $paketSwakelolaOpt1618)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketSwakelolaOpt1618  $paketSwakelolaOpt1618
     * @return \Illuminate\Http\Response
     */
    public function edit(PaketSwakelolaOpt1618 $paketSwakelolaOpt1618)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaketSwakelolaOpt1618  $paketSwakelolaOpt1618
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaketSwakelolaOpt1618 $paketSwakelolaOpt1618)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketSwakelolaOpt1618  $paketSwakelolaOpt1618
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaketSwakelolaOpt1618 $paketSwakelolaOpt1618)
    {
        //
    }
}
