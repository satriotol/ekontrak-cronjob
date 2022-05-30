<?php

namespace App\Http\Controllers;

use App\Models\RupStrukturAnggaranKl1221;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RupStrukturAnggaranKl1221Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year, $klpd)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/f0247004-c351-4319-b520-2f4ff84462c2/json/736987907/RUPStrukturAnggaranKL1221/tipe/4:12/parameter/' . $year . ':' . $klpd);
        $anggarans = RupStrukturAnggaranKl1221::where('tahun_anggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            RupStrukturAnggaranKl1221::create([
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_klpd' => $response->kd_klpd,
                'nama_klpd' => $response->nama_klpd,
                'kd_satker' => $response->kd_satker,
                'kd_satker_str' => $response->kd_satker_str,
                'nama_satker' => $response->nama_satker,
                'belanja_pegawai' => $response->belanja_pegawai,
                'belanja_barjas' => $response->belanja_barjas,
                'belanja_modal' => $response->belanja_modal,
                'belanja_pengadaan_sosial' => $response->belanja_pengadaan_sosial,
                'belanja_nonpengadaan_sosial' => $response->belanja_nonpengadaan_sosial,
                'total_belanja_sosial' => $response->total_belanja_sosial,
                'belanja_pengadaan_hibah' => $response->belanja_pengadaan_hibah,
                'belanja_nonpengadaan_hibah' => $response->belanja_nonpengadaan_hibah,
                'total_belanja_hibah' => $response->total_belanja_hibah,
                'belanja_pengadaan_lainnya' => $response->belanja_pengadaan_lainnya,
                'belanja_nonpengadaan_lainnya' => $response->belanja_nonpengadaan_lainnya,
                'total_belanja_lainnya' => $response->total_belanja_lainnya,
                'total_belanja' => $response->total_belanja,
            ]);
        }
        return ResponseFormatter::success(RupStrukturAnggaranKl1221::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\RupStrukturAnggaranKl1221  $rupStrukturAnggaranKl1221
     * @return \Illuminate\Http\Response
     */
    public function show(RupStrukturAnggaranKl1221 $rupStrukturAnggaranKl1221)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RupStrukturAnggaranKl1221  $rupStrukturAnggaranKl1221
     * @return \Illuminate\Http\Response
     */
    public function edit(RupStrukturAnggaranKl1221 $rupStrukturAnggaranKl1221)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RupStrukturAnggaranKl1221  $rupStrukturAnggaranKl1221
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RupStrukturAnggaranKl1221 $rupStrukturAnggaranKl1221)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RupStrukturAnggaranKl1221  $rupStrukturAnggaranKl1221
     * @return \Illuminate\Http\Response
     */
    public function destroy(RupStrukturAnggaranKl1221 $rupStrukturAnggaranKl1221)
    {
        //
    }
}
