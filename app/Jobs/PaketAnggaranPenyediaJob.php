<?php

namespace App\Jobs;

use App\Models\PaketAnggaranPenyedia;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PaketAnggaranPenyediaJob implements ShouldQueue
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
        PaketAnggaranPenyedia::create([
            'koderup' => $this->response['koderup'] ?? null,
            'id_rup_client' => $this->response['id_rup_client'] ?? null,
            'kodekomponen' => $this->response['kodekomponen'] ?? null,
            'kodekegiatan' => $this->response['kodekegiatan'] ?? null,
            'pagu' => $this->response['pagu'] ?? null,
            'mak' => $this->response['mak'] ?? null,
            'sumberdana' => $this->response['sumberdana'] ?? null,
            'kodeobjekakun' => $this->response['kodeobjekakun'] ?? null,
            'tahun_anggaran_dana' => $this->response['tahun_anggaran_dana'] ?? null
        ]);
    }
}
