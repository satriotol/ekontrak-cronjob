<?php

namespace App\Http\Controllers;

use App\Models\PesertaPerTenderSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PesertaPerTenderSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($tender)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/578d2387-9a32-4275-bb26-db14c341d7d5/json/736987941/PesertaPerTenderSPSE/tipe/4/parameter/' . $tender);
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'kd_tender' => $response->kd_tender,
                'kd_lpse' => $response->kd_lpse,
                'kd_peserta' => $response->kd_peserta,
                'kd_penyedia' => $response->kd_penyedia,
                'nama_penyedia' => $response->nama_penyedia,
                'npwp_penyedia' => $response->npwp_penyedia,
                'nilai_penawaran' => $response->nilai_penawaran,
                'nilai_terkoreksi' => $response->nilai_terkoreksi,
                'pemenang' => $response->pemenang,
                'pemenang_terverifikasi' => $response->pemenang_terverifikasi,
                'alasan' => $response->alasan,
            ];
        }
        foreach ($records as $record) {
            PesertaPerTenderSpse::updateOrCreate(['kd_tender' => $record['kd_tender'], 'kd_peserta' => $record['kd_peserta']], $record);
        }
        return ResponseFormatter::success(PesertaPerTenderSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\PesertaPerTenderSpse  $pesertaPerTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function show(PesertaPerTenderSpse $pesertaPerTenderSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PesertaPerTenderSpse  $pesertaPerTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(PesertaPerTenderSpse $pesertaPerTenderSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PesertaPerTenderSpse  $pesertaPerTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PesertaPerTenderSpse $pesertaPerTenderSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PesertaPerTenderSpse  $pesertaPerTenderSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(PesertaPerTenderSpse $pesertaPerTenderSpse)
    {
        //
    }
}
