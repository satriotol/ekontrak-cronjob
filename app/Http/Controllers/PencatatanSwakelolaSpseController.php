<?php

namespace App\Http\Controllers;

use App\Models\PencatatanSwakelolaSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PencatatanSwakelolaSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year, $lpse)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/ce9fca7a-7496-46fc-be85-7367c1babd9d/json/736987887/PencatatanSwakelolaSPSE/tipe/4:4/parameter/' . $year . ':' . $lpse);
        $anggarans = PencatatanSwakelolaSpse::where('tahun_anggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            PencatatanSwakelolaSpse::create([
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_klpd' => $response->kd_klpd,
                'nama_klpd' => $response->nama_klpd,
                'jenis_klpd' => $response->jenis_klpd,
                'kd_satker' => $response->kd_satker,
                'kd_satker_str' => $response->kd_satker_str,
                'nama_satker' => $response->nama_satker,
                'kd_lpse' => $response->kd_lpse,
                'nama_lpse' => $response->nama_lpse,
                'kd_swakelola_pct' => $response->kd_swakelola_pct,
                'kd_pkt_dce' => $response->kd_pkt_dce,
                'kd_rup_paket' => $response->kd_rup_paket,
                'nama_paket' => $response->nama_paket,
                'pagu' => $response->pagu,
                'total_realisasi' => $response->total_realisasi,
                'ang' => $response->ang,
                'uraian_pekerjaan' => $response->uraian_pekerjaan,
                'informasi_lainnya' => $response->informasi_lainnya,
                'tipe_swakelola' => $response->tipe_swakelola,
                'tipe_swakelola_nama' => $response->tipe_swakelola_nama,
                'kd_status_swakelola_pct' => $response->kd_status_swakelola_pct,
                'status_swakelola_pct' => $response->status_swakelola_pct,
                'kd_status_pkt_dce' => $response->kd_status_pkt_dce,
                'status_pkt_dce' => $response->status_pkt_dce,
                'nip_ppk' => $response->nip_ppk,
                'nama_ppk' => $response->nama_ppk,
                'tgl_buat_paket' => $response->tgl_buat_paket,
                'tgl_mulai_paket' => $response->tgl_mulai_paket,
                'tgl_selesai_paket' => $response->tgl_selesai_paket,
            ]);
        }
        return ResponseFormatter::success(PencatatanSwakelolaSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\PencatatanSwakelolaSpse  $pencatatanSwakelolaSpse
     * @return \Illuminate\Http\Response
     */
    public function show(PencatatanSwakelolaSpse $pencatatanSwakelolaSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PencatatanSwakelolaSpse  $pencatatanSwakelolaSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(PencatatanSwakelolaSpse $pencatatanSwakelolaSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PencatatanSwakelolaSpse  $pencatatanSwakelolaSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PencatatanSwakelolaSpse $pencatatanSwakelolaSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PencatatanSwakelolaSpse  $pencatatanSwakelolaSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(PencatatanSwakelolaSpse $pencatatanSwakelolaSpse)
    {
        //
    }
}
