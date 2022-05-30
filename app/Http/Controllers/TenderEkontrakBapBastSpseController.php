<?php

namespace App\Http\Controllers;

use App\Models\TenderEkontrakBapBastSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TenderEkontrakBapBastSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year, $lpse)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/42abfc8c-2f8e-4a83-88bc-d2c61c374b88/json/736987906/TenderEkontrakBAPbastSPSE/tipe/4:4/parameter/' . $year . ':' . $lpse);
        $anggarans = TenderEkontrakBapBastSpse::where('tahun_anggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            TenderEkontrakBapBastSpse::create([
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_lpse' => $response->kd_lpse,
                'kd_tender' => $response->kd_tender,
                'no_kontrak' => $response->no_kontrak,
                'tgl_kontrak' => $response->tgl_kontrak,
                'nilai_kontrak' => $response->nilai_kontrak,
                'cara_pembayaran_kontrak' => $response->cara_pembayaran_kontrak,
                'kontrak_tipe_penyedia' => $response->kontrak_tipe_penyedia,
                'wakil_sah_penyedia_kontrak' => $response->wakil_sah_penyedia_kontrak,
                'jabatan_wakil_penyedia_kontrak' => $response->jabatan_wakil_penyedia_kontrak,
                'no_spmk' => $response->no_spmk,
                'tgl_spmk' => $response->tgl_spmk,
                'waktu_penyelesaian_spmk' => $response->waktu_penyelesaian_spmk,
                'tgl_mulai_kerja_spmk' => $response->tgl_mulai_kerja_spmk,
                'tgl_selesai_kerja_spmk' => $response->tgl_selesai_kerja_spmk,
                'no_bast' => $response->no_bast,
                'tgl_bast' => $response->tgl_bast,
                'no_bap' => $response->no_bap,
                'tgl_bap' => $response->tgl_bap,
                'besar_pembayaran_bap' => $response->besar_pembayaran_bap,
                'progres_fisik_bap' => $response->progres_fisik_bap,
                'kd_penyedia' => $response->kd_penyedia,
                'nama_penyedia' => $response->nama_penyedia,
                'npwp_penyedia' => $response->npwp_penyedia,
            ]);
        }
        return ResponseFormatter::success(TenderEkontrakBapBastSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\TenderEkontrakBapBastSpse  $tenderEkontrakBapBastSpse
     * @return \Illuminate\Http\Response
     */
    public function show(TenderEkontrakBapBastSpse $tenderEkontrakBapBastSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TenderEkontrakBapBastSpse  $tenderEkontrakBapBastSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(TenderEkontrakBapBastSpse $tenderEkontrakBapBastSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TenderEkontrakBapBastSpse  $tenderEkontrakBapBastSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TenderEkontrakBapBastSpse $tenderEkontrakBapBastSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TenderEkontrakBapBastSpse  $tenderEkontrakBapBastSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(TenderEkontrakBapBastSpse $tenderEkontrakBapBastSpse)
    {
        //
    }
}
