<?php

namespace App\Http\Controllers;

use App\Models\NonTenderEkontrakSppbJspse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NonTenderEkontrakSppbJspseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/1f2c0162-2316-42bb-ba06-0588f7e692c8/json/736987901/NonTenderEkontrakSPPBJspse/tipe/4:4/parameter/' . $year . ':108');
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_lpse' => $response->kd_lpse,
                'kd_nontender' => $response->kd_nontender,
                'no_sppbj' => $response->no_sppbj,
                'tgl_sppbj' => $response->tgl_sppbj,
                'tgl_kirim_sppbj' => $response->tgl_kirim_sppbj,
                'nilai_kontrak_sppbj' => $response->nilai_kontrak_sppbj,
                'nilai_jaminan_pelaksanaan_sppbj' => $response->nilai_jaminan_pelaksanaan_sppbj,
                'status_sppbj' => $response->status_sppbj,
                'kd_penyedia' => $response->kd_penyedia,
                'nama_penyedia' => $response->nama_penyedia,
                'npwp_penyedia' => $response->npwp_penyedia,
            ];
        }
        foreach ($records as $record) {
            NonTenderEkontrakSppbJspse::updateOrCreate(['kd_nontender' => $record['kd_nontender'], 'tahun_anggaran' => $record['tahun_anggaran']], $record);
        }
        return ResponseFormatter::success(NonTenderEkontrakSppbJspse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\NonTenderEkontrakSppbJspse  $nonTenderEkontrakSppbJspse
     * @return \Illuminate\Http\Response
     */
    public function show(NonTenderEkontrakSppbJspse $nonTenderEkontrakSppbJspse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NonTenderEkontrakSppbJspse  $nonTenderEkontrakSppbJspse
     * @return \Illuminate\Http\Response
     */
    public function edit(NonTenderEkontrakSppbJspse $nonTenderEkontrakSppbJspse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NonTenderEkontrakSppbJspse  $nonTenderEkontrakSppbJspse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NonTenderEkontrakSppbJspse $nonTenderEkontrakSppbJspse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NonTenderEkontrakSppbJspse  $nonTenderEkontrakSppbJspse
     * @return \Illuminate\Http\Response
     */
    public function destroy(NonTenderEkontrakSppbJspse $nonTenderEkontrakSppbJspse)
    {
        //
    }
}
