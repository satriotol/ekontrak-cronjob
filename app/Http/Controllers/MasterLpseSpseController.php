<?php

namespace App\Http\Controllers;

use App\Models\MasterLpseSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MasterLpseSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/6364ba1b-2b52-4085-9426-b24467aed065/json/736987903/MasterLPSESPSE/tipe/4/parameter/1');
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'kd_lpse' => $response->kd_lpse,
                'nama_lpse' => $response->nama_lpse,
            ];
        }
        foreach ($records as $record) {
            MasterLpseSpse::updateOrCreate(['kd_lpse' => $record['kd_lpse']], $record);
        }
        return ResponseFormatter::success(MasterLpseSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\MasterLpseSpse  $masterLpseSpse
     * @return \Illuminate\Http\Response
     */
    public function show(MasterLpseSpse $masterLpseSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterLpseSpse  $masterLpseSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterLpseSpse $masterLpseSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasterLpseSpse  $masterLpseSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterLpseSpse $masterLpseSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterLpseSpse  $masterLpseSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterLpseSpse $masterLpseSpse)
    {
        //
    }
}
