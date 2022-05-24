<?php

namespace App\Http\Controllers;

use App\Models\PaketAnggaranPenyedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $responses = Http::get('https://isb.lkpp.go.id/isb/api/1683a6a8-32b4-40f9-a9be-dd07e8942ef3/json/736987856/PaketAnggaranPenyedia1618/tipe/4:12/parameter/2022:D129');
        return $responses->json();
    }
    public function store()
    {
        $responses = Http::get('https://isb.lkpp.go.id/isb/api/1683a6a8-32b4-40f9-a9be-dd07e8942ef3/json/736987856/PaketAnggaranPenyedia1618/tipe/4:12/parameter/2022:D129');
        PaketAnggaranPenyedia::truncate();
        foreach (json_decode($responses) as $response) {
            PaketAnggaranPenyedia::create([
                'koderup' => $response->koderup,
                'id_rup_client' => $response->id_rup_client,
                'kodekomponen' => $response->kodekomponen,
                'kodekegiatan' => $response->kodekegiatan,
                'pagu' => $response->pagu,
                'mak' => $response->mak,
                'sumberdana' => $response->sumberdana,
                'kodeobjekakun' => $response->kodeobjekakun,
                'tahun_anggaran_dana' => $response->tahun_anggaran_dana
            ]);
        }
        return 'sukses';
    }
}
