<?php

namespace App\Jobs;

use App\Models\RinciObjekAkunMasterRup;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class RinciObjekAkunMasterRupJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $response;
    public function __construct($response)
    {
        $this->response = $response;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        RinciObjekAkunMasterRup::updateOrCreate([
            'id_program' => $this->response['id_program'] ?? null,
            'id_kegiatan' => $this->response['id_kegiatan'] ?? null,
            'id_table' => $this->response['id'] ?? null,
            'kode_rinciobjekakund' => $this->response['kode_rinciobjekakund'] ?? null,
            'uraian_rinciobjekakun' => $this->response['uraian_rinciobjekakun'] ?? null,
            'pagu' => $this->response['pagu'] ?? null,
            'is_deleted' => $this->response['is_deleted'] ?? null,
            'id_client' => $this->response['id_client'] ?? null,
            'id_objekakun' => $this->response['id_objekakun'] ?? null,
        ]);
    }
}
