<?php

namespace App\Http\Controllers;

use App\Models\NonTenderPengumumanDetailSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NonTenderPengumumanDetailSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/7e26803e-7ba8-4751-be96-f48217bb54b6/json/736987902/NonTenderPengumumanDetailSPSE/tipe/4:4/parameter/' . $year . ':108');
        $anggarans = NonTenderPengumumanDetailSpse::where('tahun_anggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            NonTenderPengumumanDetailSpse::create([
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_klpd' => $response->kd_klpd,
                'nama_klpd' => $response->nama_klpd,
                'jenis_klpd' => $response->jenis_klpd,
                'kd_satker' => $response->kd_satker,
                'nama_satker' => $response->nama_satker,
                'kd_lpse' => $response->kd_lpse,
                'nama_lpse' => $response->nama_lpse,
                'kd_nontender' => $response->kd_nontender,
                'kd_rup_paket' => $response->kd_rup_paket,
                'nama_paket' => $response->nama_paket,
                'pagu' => $response->pagu,
                'hps' => $response->hps,
                'anggaran' => $response->anggaran,
                'kualifikasi_paket' => $response->kualifikasi_paket,
                'kategori_pengadaan' => $response->kategori_pengadaan,
                'metode_pengadaan' => $response->metode_pengadaan,
                'tanggal_buat_paket' => $response->tanggal_buat_paket,
                'tanggal_pengumuman_nontender' => $response->tanggal_pengumuman_nontender,
                'nama_status_nontender' => $response->nama_status_nontender,
                'versi_nontender' => $response->versi_nontender,
                'ket_diulang' => $response->ket_diulang,
                'ket_ditutup' => $response->ket_ditutup,
                'lokasi_pekerjaan' => $response->lokasi_pekerjaan,
            ]);
        }
        return ResponseFormatter::success(NonTenderPengumumanDetailSpse::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\NonTenderPengumumanDetailSpse  $nonTenderPengumumanDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function show(NonTenderPengumumanDetailSpse $nonTenderPengumumanDetailSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NonTenderPengumumanDetailSpse  $nonTenderPengumumanDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(NonTenderPengumumanDetailSpse $nonTenderPengumumanDetailSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NonTenderPengumumanDetailSpse  $nonTenderPengumumanDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NonTenderPengumumanDetailSpse $nonTenderPengumumanDetailSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NonTenderPengumumanDetailSpse  $nonTenderPengumumanDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(NonTenderPengumumanDetailSpse $nonTenderPengumumanDetailSpse)
    {
        //
    }
}
