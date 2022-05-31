<?php

namespace App\Http\Controllers;

use App\Models\RinciObjekAkunMasterRup;
use Illuminate\Http\Request;
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
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/33aae9ae-bcb3-4896-8507-9e78fe7a1d33/json/736987898/RinciObjekAkunMasterRUP/tipe/4:12/parameter/' . $year . ':D129');
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'id_program' => $response->id_program,
                'id_kegiatan' => $response->id_kegiatan,
                'id_table' => $response->id,
                'kode_rinciobjekakund' => $response->kode_rinciobjekakund,
                'uraian_rinciobjekakun' => $response->uraian_rinciobjekakun,
                'pagu' => $response->pagu,
                'is_deleted' => $response->is_deleted,
                'id_client' => $response->id_client,
                'id_objekakun' => $response->id_objekakun,
            ];
        }
        foreach ($records as $record) {
            RinciObjekAkunMasterRup::updateOrCreate(['id_table' => $record['id_table']], $record);
        }
        return ResponseFormatter::success(RinciObjekAkunMasterRup::all()->count(), 'Sukses Menambah Data');
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
