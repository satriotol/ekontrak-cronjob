<?php

namespace App\Http\Controllers;

use App\Models\EcatPenyediaDistributorDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EcatPenyediaDistributorDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kode_penyedia)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/1b9faa59-a237-419b-b972-80841edaa4e2/json/736987904/Ecat-PenyediaDistributorDetail/tipe/4/parameter/' . $kode_penyedia);
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'kd_penyedia_distributor' => $response->kd_penyedia_distributor,
                'nama_distributor' => $response->nama_distributor,
                'alamat_distributor' => $response->alamat_distributor,
                'email_distributor' => $response->email_distributor,
                'no_telp_distributor' => $response->no_telp_distributor,
                'npwp_distributor' => $response->npwp_distributor,
            ];
        }
        foreach ($records as $record) {
            EcatPenyediaDistributorDetail::updateOrCreate(['kd_penyedia_distributor' => $record['kd_penyedia_distributor']], $record);
        }
        return ResponseFormatter::success(EcatPenyediaDistributorDetail::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\EcatPenyediaDistributorDetail  $ecatPenyediaDistributorDetail
     * @return \Illuminate\Http\Response
     */
    public function show(EcatPenyediaDistributorDetail $ecatPenyediaDistributorDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EcatPenyediaDistributorDetail  $ecatPenyediaDistributorDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(EcatPenyediaDistributorDetail $ecatPenyediaDistributorDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EcatPenyediaDistributorDetail  $ecatPenyediaDistributorDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EcatPenyediaDistributorDetail $ecatPenyediaDistributorDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EcatPenyediaDistributorDetail  $ecatPenyediaDistributorDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(EcatPenyediaDistributorDetail $ecatPenyediaDistributorDetail)
    {
        //
    }
}
