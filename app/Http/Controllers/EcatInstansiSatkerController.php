<?php

namespace App\Http\Controllers;

use App\Models\EcatInstansiSatker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EcatInstansiSatkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responses = Http::accept('application/json')->get('https://isb.lkpp.go.id/isb/api/e92fa52e-e636-4fe6-ac4c-e08fcc039651/json/736987879/Ecat-InstansiSatker/tipe/12/parameter/D129');
        EcatInstansiSatker::truncate();
        foreach (json_decode($responses) as $response) {
            EcatInstansiSatker::create([
                'kd_klpd' => $response->kd_klpd,
                'nama_klpd' => $response->nama_klpd,
                'jenis_klpd' => $response->jenis_klpd,
                'kd_satker' => $response->kd_satker,
                'kd_satker_str' => $response->kd_satker_str,
                'nama_satker' => $response->nama_satker,
            ]);
        }
        return ResponseFormatter::success(EcatInstansiSatker::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\EcatInstansiSatker  $ecatInstansiSatker
     * @return \Illuminate\Http\Response
     */
    public function show(EcatInstansiSatker $ecatInstansiSatker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EcatInstansiSatker  $ecatInstansiSatker
     * @return \Illuminate\Http\Response
     */
    public function edit(EcatInstansiSatker $ecatInstansiSatker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EcatInstansiSatker  $ecatInstansiSatker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EcatInstansiSatker $ecatInstansiSatker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EcatInstansiSatker  $ecatInstansiSatker
     * @return \Illuminate\Http\Response
     */
    public function destroy(EcatInstansiSatker $ecatInstansiSatker)
    {
        //
    }
}
