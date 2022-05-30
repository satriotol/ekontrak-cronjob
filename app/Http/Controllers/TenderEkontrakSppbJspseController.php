<?php

namespace App\Http\Controllers;

use App\Models\TenderEkontrakSppbJspse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TenderEkontrakSppbJspseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $year = $request->year;
        $lpse = $request->lpse;
        // if ($request->year == null || $request->lpse == null) {
        //     return ResponseFormatter::error(null, 'Pastikan Isikan Data');
        // }
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/fd7acb5f-8f86-45e2-a95c-e62d741fd1e3/json/736987911/TenderEkontrakSPPBJspse/tipe/4:4/parameter/' . $year . ':' . $lpse);
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                "tahun_anggaran" => $response->tahun_anggaran,
                "kd_lpse" => $response->kd_lpse,
                "kd_tender" => $response->kd_tender,
                "no_sppbj" => $response->no_sppbj,
                "tgl_sppbj" => $response->tgl_sppbj,
                "tgl_kirim_sppbj" => $response->tgl_kirim_sppbj,
                "nilai_kontrak_sppbj" => $response->nilai_kontrak_sppbj,
                "nilai_jaminan_pelaksanaan_sppbj" => $response->nilai_jaminan_pelaksanaan_sppbj,
                "status_sppbj" => $response->status_sppbj,
                "kd_penyedia" => $response->kd_penyedia,
                "nama_penyedia" => $response->nama_penyedia,
                "npwp_penyedia" => $response->npwp_penyedia,
            ];
        }
        foreach ($records as $record) {
            TenderEkontrakSppbJspse::updateOrCreate(['kd_tender' => $record['kd_tender']], $record);
        }
        return ResponseFormatter::success(TenderEkontrakSppbJspse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\TenderEkontrakSppbJspse  $tenderEkontrakSppbJspse
     * @return \Illuminate\Http\Response
     */
    public function show(TenderEkontrakSppbJspse $tenderEkontrakSppbJspse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TenderEkontrakSppbJspse  $tenderEkontrakSppbJspse
     * @return \Illuminate\Http\Response
     */
    public function edit(TenderEkontrakSppbJspse $tenderEkontrakSppbJspse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TenderEkontrakSppbJspse  $tenderEkontrakSppbJspse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TenderEkontrakSppbJspse $tenderEkontrakSppbJspse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TenderEkontrakSppbJspse  $tenderEkontrakSppbJspse
     * @return \Illuminate\Http\Response
     */
    public function destroy(TenderEkontrakSppbJspse $tenderEkontrakSppbJspse)
    {
        //
    }
}
