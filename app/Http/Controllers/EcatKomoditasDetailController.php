<?php

namespace App\Http\Controllers;

use App\Models\EcatKomoditasDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EcatKomoditasDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($komoditas)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/9c11c112-79b0-43d0-bfa9-5b0c1c166ae1/json/736987897/Ecat-KomoditasDetail/tipe/4/parameter/' . $komoditas);
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'kd_komoditas' => $response->kd_komoditas,
                'nama_komoditas' => $response->nama_komoditas,
                'jenis_katalog' => $response->jenis_katalog,
                'nama_instansi_katalog' => $response->nama_instansi_katalog,
            ];
        }
        foreach ($records as $record) {
            EcatKomoditasDetail::updateOrCreate(['kd_komoditas' => $record['kd_komoditas']], $record);
        }
        return ResponseFormatter::success(EcatKomoditasDetail::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\EcatKomoditasDetail  $ecatKomoditasDetail
     * @return \Illuminate\Http\Response
     */
    public function show(EcatKomoditasDetail $ecatKomoditasDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EcatKomoditasDetail  $ecatKomoditasDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(EcatKomoditasDetail $ecatKomoditasDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EcatKomoditasDetail  $ecatKomoditasDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EcatKomoditasDetail $ecatKomoditasDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EcatKomoditasDetail  $ecatKomoditasDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(EcatKomoditasDetail $ecatKomoditasDetail)
    {
        //
    }
}
