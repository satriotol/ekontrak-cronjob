<?php

namespace App\Http\Controllers;

use App\Models\PaketPenyediaOpt1618;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaketPenyediaOpt1618Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/7bd954d3-33dc-48e6-93f6-f74058bd9544/json/736987913/PaketPenyediaOpt1618/tipe/4:12/parameter/' . $year . ':D129');
        $anggarans = PaketPenyediaOpt1618::where('tahunanggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            PaketPenyediaOpt1618::create([
                'klpd' => $response->klpd,
                'tahunanggaran' => $response->tahunanggaran,
                'idrup' => $response->idrup,
                'namapaket' => $response->namapaket,
                'jumlahpagu' => $response->jumlahpagu,
                'namasatker' => $response->namasatker,
                'kodesatker' => $response->kodesatker,
                'metodepengadaan' => $response->metodepengadaan,
                'idmetodepengadaan' => $response->idmetodepengadaan,
                'jenispengadaan' => $response->jenispengadaan,
                'idjenispengadaan' => $response->idjenispengadaan,
                'spesifikasi' => $response->spesifikasi,
                'lokasi' => $response->lokasi,
                'tanggalkebutuhan' => $response->tanggalkebutuhan,
                'tanggalawalpemilihan' => $response->tanggalawalpemilihan,
                'tanggalakhirpemilihan' => $response->tanggalakhirpemilihan,
                'tanggalawalpekerjaan' => $response->tanggalawalpekerjaan,
                'tanggalakhirpekerjaan' => $response->tanggalakhirpekerjaan,
                'statuspradipa' => $response->statuspradipa,
                'statuspenyedia' => $response->statuspenyedia,
                'statuspdn' => $response->statuspdn,
                'statususahakecil' => $response->statususahakecil,
                'statusumumkan' => $response->statusumumkan,
                'keterangan' => $response->keterangan,
                'ppk' => $response->ppk,
                'username' => $response->username,
                'tanggalpengumuman' => $response->tanggalpengumuman,
                'id_swakelola' => $response->id_swakelola,
                'statusdeletepaket' => $response->statusdeletepaket,
                'statusaktifpaket' => $response->statusaktifpaket,
                'id_rup_client' => $response->id_rup_client,
                'kd_klpd' => $response->kd_klpd,
                'nip_ppk' => $response->nip_ppk,
                'volume' => $response->volume,
                'lokasi_kab' => $response->lokasi_kab,
                'lokasi_prov' => $response->lokasi_prov,
                'statuspaketkonsolidasi' => $response->statuspaketkonsolidasi,
                'idsatker' => $response->idsatker,
            ]);
        }
        return ResponseFormatter::success(PaketPenyediaOpt1618::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\PaketPenyediaOpt1618  $paketPenyediaOpt1618
     * @return \Illuminate\Http\Response
     */
    public function show(PaketPenyediaOpt1618 $paketPenyediaOpt1618)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketPenyediaOpt1618  $paketPenyediaOpt1618
     * @return \Illuminate\Http\Response
     */
    public function edit(PaketPenyediaOpt1618 $paketPenyediaOpt1618)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaketPenyediaOpt1618  $paketPenyediaOpt1618
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaketPenyediaOpt1618 $paketPenyediaOpt1618)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketPenyediaOpt1618  $paketPenyediaOpt1618
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaketPenyediaOpt1618 $paketPenyediaOpt1618)
    {
        //
    }
}
