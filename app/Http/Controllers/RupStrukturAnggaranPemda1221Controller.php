<?php

namespace App\Http\Controllers;

use App\Models\RupStrukturAnggaranPemda1221;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RupStrukturAnggaranPemda1221Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $responses = Http::accept('application/json')->get('https://isb.lkpp.go.id/isb/api/b1777b1e-4e0a-4789-b272-11ee80f7662a/json/736987908/RUPStrukturAnggaranPemda1221/tipe/4:12/parameter/' . $year . ':D129');
        $anggarans = RupStrukturAnggaranPemda1221::where('tahun_anggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            RupStrukturAnggaranPemda1221::create([
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_klpd' => $response->kd_klpd,
                'nama_klpd' => $response->nama_klpd,
                'kd_satker' => $response->kd_satker,
                'kd_satker_str' => $response->kd_satker_str,
                'nama_satker' => $response->nama_satker,
                'belanja_operasi' => $response->tahun_anggaran,
                'belanja_modal' => $response->belanja_modal,
                'belanja_btt' => $response->belanja_btt,
                'belanja_non_pengadaan' => $response->belanja_non_pengadaan,
                'belanja_pengadaan' => $response->belanja_pengadaan,
                'total_belanja' => $response->total_belanja,
            ]);
        }
        return ResponseFormatter::success(RupStrukturAnggaranPemda1221::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\RupStrukturAnggaranPemda1221  $rupStrukturAnggaranPemda1221
     * @return \Illuminate\Http\Response
     */
    public function show(RupStrukturAnggaranPemda1221 $rupStrukturAnggaranPemda1221)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RupStrukturAnggaranPemda1221  $rupStrukturAnggaranPemda1221
     * @return \Illuminate\Http\Response
     */
    public function edit(RupStrukturAnggaranPemda1221 $rupStrukturAnggaranPemda1221)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RupStrukturAnggaranPemda1221  $rupStrukturAnggaranPemda1221
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RupStrukturAnggaranPemda1221 $rupStrukturAnggaranPemda1221)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RupStrukturAnggaranPemda1221  $rupStrukturAnggaranPemda1221
     * @return \Illuminate\Http\Response
     */
    public function destroy(RupStrukturAnggaranPemda1221 $rupStrukturAnggaranPemda1221)
    {
        //
    }
}
