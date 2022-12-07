<?php

namespace App\Http\Controllers;

use App\Models\NonTenderEkontrakBapBastSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class NonTenderEkontrakBapBastSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $responses = Http::timeout(600)->accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/fc68fcf5-0e8d-493e-91c8-0413fe71025a/json/736987894/NonTenderEkontrakBAPbastSPSE/tipe/4:4/parameter/' . $year . ':108');
        $anggarans = NonTenderEkontrakBapBastSpse::where('tahun_anggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        DB::beginTransaction();
        try {
            foreach (json_decode($responses) as $response) {
                NonTenderEkontrakBapBastSpse::create([
                    'tahun_anggaran' => $response->tahun_anggaran,
                    'kd_lpse' => $response->kd_lpse,
                    'kd_tender' => $response->kd_tender ?? null,
                    'no_kontrak' => $response->no_kontrak,
                    'tgl_kontrak' => $response->tgl_kontrak,
                    'nilai_kontrak' => $response->nilai_kontrak,
                    'cara_pembayaran_kontrak' => $response->cara_pembayaran_kontrak ?? null,
                    'kontrak_tipe_penyedia' => $response->kontrak_tipe_penyedia ?? null,
                    'wakil_sah_penyedia_kontrak' => $response->wakil_sah_penyedia_kontrak ?? null,
                    'jabatan_wakil_penyedia_kontrak' => $response->jabatan_wakil_penyedia_kontrak ?? null,
                    'no_spmk' => $response->no_spmk ?? null,
                    'tgl_spmk' => $response->tgl_spmk ?? null,
                    'waktu_penyelesaian_spmk' => $response->waktu_penyelesaian_spmk ?? null,
                    'tgl_mulai_kerja_spmk' => $response->tgl_mulai_kerja_spmk ?? null,
                    'tgl_selesai_kerja_spmk' => $response->tgl_selesai_kerja_spmk ?? null,
                    'no_bast' => $response->no_bast ?? null,
                    'tgl_bast' => $response->tgl_bast ?? null,
                    'no_bap' => $response->no_bap ?? null,
                    'tgl_bap' => $response->tgl_bap ?? null,
                    'besar_pembayaran_bap' => $response->besar_pembayaran_bap ?? null,
                    'progres_fisik_bap' => $response->progres_fisik_bap ?? null,
                    'no_spk' => $response->no_spk ?? null,
                    'tgl_spk' => $response->tgl_spk ?? null,
                    'kd_penyedia' => $response->kd_penyedia ?? null,
                    'nama_penyedia' => $response->nama_penyedia ?? null,
                    'npwp_penyedia' => $response->npwp_penyedia ?? null,
                ]);
            }
            DB::commit();
            return ResponseFormatter::success(NonTenderEkontrakBapBastSpse::all()->count(), 'Sukses Menambah Data');
        } catch (\Throwable $th) {
            DB::rollBack();
            return ResponseFormatter::error('', $th);
        }
        // return ResponseFormatter::success(NonTenderEkontrakBapBastSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\NonTenderEkontrakBapBastSpse  $nonTenderEkontrakBapBastSpse
     * @return \Illuminate\Http\Response
     */
    public function show(NonTenderEkontrakBapBastSpse $nonTenderEkontrakBapBastSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NonTenderEkontrakBapBastSpse  $nonTenderEkontrakBapBastSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(NonTenderEkontrakBapBastSpse $nonTenderEkontrakBapBastSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NonTenderEkontrakBapBastSpse  $nonTenderEkontrakBapBastSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NonTenderEkontrakBapBastSpse $nonTenderEkontrakBapBastSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NonTenderEkontrakBapBastSpse  $nonTenderEkontrakBapBastSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(NonTenderEkontrakBapBastSpse $nonTenderEkontrakBapBastSpse)
    {
        //
    }
}
