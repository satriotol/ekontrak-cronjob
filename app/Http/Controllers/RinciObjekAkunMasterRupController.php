<?php

namespace App\Http\Controllers;

use App\Jobs\RinciObjekAkunMasterRupJob;
use App\Models\RinciObjekAkunMasterRup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class RinciObjekAkunMasterRupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $url = 'https://inaproc.lkpp.go.id/isb/api/33aae9ae-bcb3-4896-8507-9e78fe7a1d33/json/736987898/RinciObjekAkunMasterRUP/tipe/4:12/parameter/' . $year . ':D129';
        $responses = Http::timeout(60)->get($url);
        DB::beginTransaction();
        try {
            foreach ($responses->json() as $response) {
                dispatch(new RinciObjekAkunMasterRupJob($response));
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
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
     * @param  \App\Models\RinciObjekAkunMasterRup  $rinciObjekAkunMasterRup
     * @return \Illuminate\Http\Response
     */
    public function show(RinciObjekAkunMasterRup $rinciObjekAkunMasterRup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RinciObjekAkunMasterRup  $rinciObjekAkunMasterRup
     * @return \Illuminate\Http\Response
     */
    public function edit(RinciObjekAkunMasterRup $rinciObjekAkunMasterRup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RinciObjekAkunMasterRup  $rinciObjekAkunMasterRup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RinciObjekAkunMasterRup $rinciObjekAkunMasterRup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RinciObjekAkunMasterRup  $rinciObjekAkunMasterRup
     * @return \Illuminate\Http\Response
     */
    public function destroy(RinciObjekAkunMasterRup $rinciObjekAkunMasterRup)
    {
        //
    }
}
