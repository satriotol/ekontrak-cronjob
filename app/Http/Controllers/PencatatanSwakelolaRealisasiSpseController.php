<?php

namespace App\Http\Controllers;

use App\Models\PencatatanSwakelolaRealisasiSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PencatatanSwakelolaRealisasiSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($KodeSwakelolaPct)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/fc63d3b1-b26b-44b5-bee4-d26ea744fd56/json/736987889/PencatatanSwakelolaRealisasiSPSE/tipe/4/parameter/' . $KodeSwakelolaPct);
        $records = array();
        DB::beginTransaction();
        try {
            foreach (json_decode($responses) as $response) {
                $records[] = [
                    'kd_lpse' => $response->kd_lpse,
                    'kd_swakelola_pct' => $response->kd_swakelola_pct,
                    'kd_realisasi_sw_pct' => $response->kd_realisasi_sw_pct,
                    'kd_jenis_realisasi' => $response->kd_jenis_realisasi,
                    'jenis_realisasi' => $response->jenis_realisasi,
                    'nilai_realiasi' => $response->nilai_realiasi ?? null,
                    'tgl_realisasi' => $response->tgl_realisasi,
                    'keterangan' => $response->keterangan,
                    'no_dok_realisasi' => $response->no_dok_realisasi,
                    'nama_dok_realisasi' => $response->nama_dok_realisasi,
                    'is_penyedia' => $response->is_penyedia,
                    'kd_penyedia' => $response->kd_penyedia,
                    'nama_penyedia' => $response->nama_penyedia,
                    'npwp_penyedia' => $response->npwp_penyedia,
                    'kd_non_penyedia' => $response->kd_non_penyedia,
                    'nama_non_penyedia' => $response->nama_non_penyedia,
                    'npwp_non_penyedia' => $response->npwp_non_penyedia,
                    'realisasi_auditupdate' => $response->realisasi_auditupdate,
                ];
            }
            foreach ($records as $record) {
                PencatatanSwakelolaRealisasiSpse::updateOrCreate(['kd_realisasi_sw_pct' => $record['kd_realisasi_sw_pct']], $record);
            }
            return ResponseFormatter::success(PencatatanSwakelolaRealisasiSpse::all()->count(), 'Sukses Menambah Data');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return $th;
        }
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
     * @param  \App\Models\PencatatanSwakelolaRealisasiSpse  $pencatatanSwakelolaRealisasiSpse
     * @return \Illuminate\Http\Response
     */
    public function show(PencatatanSwakelolaRealisasiSpse $pencatatanSwakelolaRealisasiSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PencatatanSwakelolaRealisasiSpse  $pencatatanSwakelolaRealisasiSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(PencatatanSwakelolaRealisasiSpse $pencatatanSwakelolaRealisasiSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PencatatanSwakelolaRealisasiSpse  $pencatatanSwakelolaRealisasiSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PencatatanSwakelolaRealisasiSpse $pencatatanSwakelolaRealisasiSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PencatatanSwakelolaRealisasiSpse  $pencatatanSwakelolaRealisasiSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(PencatatanSwakelolaRealisasiSpse $pencatatanSwakelolaRealisasiSpse)
    {
        //
    }
}
