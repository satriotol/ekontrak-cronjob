<?php

namespace App\Http\Controllers;

use App\Jobs\NonTenderSelesaiDetailSpseJob;
use App\Models\NonTenderSelesaiDetailSpse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NonTenderSelesaiDetailSpseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $url = 'https://inaproc.lkpp.go.id/isb/api/eadf3b47-5899-4f7a-8229-d9aae56af726/json/736987899/NonTenderSelesaiDetailSPSE/tipe/4:4/parameter/' . $year . ':108';
        $responses = Http::timeout(600)->get($url);
        foreach ($responses->json() as $response) {
            dispatch(new NonTenderSelesaiDetailSpseJob($response));
        }
        return ResponseFormatter::success($url, 'Sukses Menambah Data');
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
     * @param  \App\Models\NonTenderSelesaiDetailSpse  $nonTenderSelesaiDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function show(NonTenderSelesaiDetailSpse $nonTenderSelesaiDetailSpse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NonTenderSelesaiDetailSpse  $nonTenderSelesaiDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function edit(NonTenderSelesaiDetailSpse $nonTenderSelesaiDetailSpse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NonTenderSelesaiDetailSpse  $nonTenderSelesaiDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NonTenderSelesaiDetailSpse $nonTenderSelesaiDetailSpse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NonTenderSelesaiDetailSpse  $nonTenderSelesaiDetailSpse
     * @return \Illuminate\Http\Response
     */
    public function destroy(NonTenderSelesaiDetailSpse $nonTenderSelesaiDetailSpse)
    {
        //
    }
}
