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
        dd($responses[0]);
        return $responses->json();
    }
    public function store()
    {
        $responses = Http::get('https://isb.lkpp.go.id/isb/api/1683a6a8-32b4-40f9-a9be-dd07e8942ef3/json/736987856/PaketAnggaranPenyedia1618/tipe/4:12/parameter/2022:D129');
        // $data = $request->only('koderup','id_rup_client','kodekomponen','kodekegiatan','pagu','mak','sumberdana','kodeobjekakun','tahun_anggaran_dana');
        PaketAnggaranPenyedia::create([
            'koderup' => $responses[0]['koderup'],
            'id_rup_client' => $responses[0]['id_rup_client'],
            'kodekomponen' => $responses[0]['kodekomponen'],
            'kodekegiatan' => $responses[0]['kodekegiatan'],
            'pagu' => $responses[0]['pagu'],
            'mak' => $responses[0]['mak'],
            'sumberdana' => $responses[0]['sumberdana'],
            'kodeobjekakun' => $responses[0]['kodeobjekakun'],
            'tahun_anggaran_dana' => $responses[0]['tahun_anggaran_dana']
        ]);
        return 'sukses';
    }
}
