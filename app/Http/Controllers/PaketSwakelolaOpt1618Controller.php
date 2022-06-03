<?php

namespace App\Http\Controllers;

use App\Models\PaketSwakelolaOpt1618;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PaketSwakelolaOpt1618Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/ed83b1a5-9dde-415c-8e5f-cbb77b453a6a/json/736987909/PaketSwakelolaOpt1618/tipe/4:12/parameter/' . $year . ':D129');
        $anggarans = PaketSwakelolaOpt1618::where('tahunanggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            PaketSwakelolaOpt1618::create([
                'klpd' => $response->klpd,
                'tahunanggaran' => $response->tahunanggaran,
                'idrup' => $response->idrup,
                'namapaket' => $response->namapaket,
                'jumlahpagu' => $response->jumlahpagu,
                'namasatker' => $response->namasatker,
                'kodesatker' => $response->kodesatker,
                'lokasi' => $response->lokasi,
                'tanggalawalpekerjaan' => $response->tanggalawalpekerjaan,
                'tanggalakhirpekerjaan' => $response->tanggalakhirpekerjaan,
                'keterangan' => $response->keterangan,
                'ppk' => $response->ppk,
                'nip_ppk' => $response->nip_ppk,
                'tanggalpengumuman' => $response->tanggalpengumuman,
                'statusdeletepaket' => $response->statusdeletepaket,
                'statusaktifpaket' => $response->statusaktifpaket,
                'id_rup_client' => $response->id_rup_client,
                'tipe_swakelola' => $response->tipe_swakelola,
                'kode_klpd_penyelenggara' => $response->kode_klpd_penyelenggara,
                'nama_klpd_penyelenggara' => $response->nama_klpd_penyelenggara,
                'nama_satker_penyelenggara' => $response->nama_satker_penyelenggara,
                'username' => $response->username,
                'kd_klpd' => $response->kd_klpd,
                'volume' => $response->volume,
                'lokasi_kab' => $response->lokasi_kab,
                'lokasi_prov' => $response->lokasi_prov,
                'idsatker' => $response->idsatker,
            ]);
        }
        return ResponseFormatter::success(PaketSwakelolaOpt1618::all()->count(), 'Sukses Menambah Data');
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
     * @param  \App\Models\PaketSwakelolaOpt1618  $paketSwakelolaOpt1618
     * @return \Illuminate\Http\Response
     */
    public function show(PaketSwakelolaOpt1618 $paketSwakelolaOpt1618)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketSwakelolaOpt1618  $paketSwakelolaOpt1618
     * @return \Illuminate\Http\Response
     */
    public function edit(PaketSwakelolaOpt1618 $paketSwakelolaOpt1618)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaketSwakelolaOpt1618  $paketSwakelolaOpt1618
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaketSwakelolaOpt1618 $paketSwakelolaOpt1618)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketSwakelolaOpt1618  $paketSwakelolaOpt1618
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaketSwakelolaOpt1618 $paketSwakelolaOpt1618)
    {
        //
    }
}
