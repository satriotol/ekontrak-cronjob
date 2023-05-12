<?php

namespace App\Http\Controllers;

use App\Models\EcatPenyediaDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EcatPenyediaDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kode_penyedia)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/753a1b15-2007-451e-896c-789648c25fb8/json/736987905/Ecat-PenyediaDetail/tipe/4/parameter/' . $kode_penyedia);
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'kd_penyedia' => $response->kd_penyedia,
                'nama_penyedia' => $response->nama_penyedia,
                'penyedia_ukm' => $response->penyedia_umkm,
                'alamat_penyedia' => $response->alamat_penyedia,
                'email_penyedia' => $response->email_penyedia,
                'no_telp_penyedia' => $response->no_telp_penyedia,
                'npwp_penyedia' => $response->npwp_penyedia,
            ];
        }
        foreach ($records as $record) {
            EcatPenyediaDetail::updateOrCreate(['kd_penyedia' => $record['kd_penyedia']], $record);
        }
        return ResponseFormatter::success(EcatPenyediaDetail::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\EcatPenyediaDetail  $ecatPenyediaDetail
     * @return \Illuminate\Http\Response
     */
    public function show(EcatPenyediaDetail $ecatPenyediaDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EcatPenyediaDetail  $ecatPenyediaDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(EcatPenyediaDetail $ecatPenyediaDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EcatPenyediaDetail  $ecatPenyediaDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EcatPenyediaDetail $ecatPenyediaDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EcatPenyediaDetail  $ecatPenyediaDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(EcatPenyediaDetail $ecatPenyediaDetail)
    {
        //
    }
}
