<?php

namespace App\Jobs;

use App\Models\SubKomponenMasterRup;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SubKomponenMasterRupJob implements ShouldQueue
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
        SubKomponenMasterRup::updateOrCreate([
            "id_program" => $this->response['id_program'] ?? null,
            "id_kegiatan" => $this->response['id_kegiatan'] ?? null,
            "id_output" => $this->response['id_output'] ?? null,
            "id_suboutput" => $this->response['id_suboutput'] ?? null,
            "id_komponen" => $this->response['id_komponen'] ?? null,
            "id_table" => $this->response['id'] ?? null,
            "kode_subkomponen_string" => $this->response['kode_subkomponen_string'] ?? null,
            "nama" => $this->response['nama'] ?? null,
            "pagu" => $this->response['pagu'] ?? null,
            "is_deleted" => $this->response['is_deleted'] ?? null,
            "id_client" => $this->response['id_client'] ?? null
        ]);
    }
}
