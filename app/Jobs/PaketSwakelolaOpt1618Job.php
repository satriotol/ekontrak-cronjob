<?php

namespace App\Jobs;

use App\Models\PaketSwakelolaOpt1618;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PaketSwakelolaOpt1618Job implements ShouldQueue
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
        PaketSwakelolaOpt1618::updateOrCreate([
            'klpd' => $this->response['klpd'] ?? null,
            'tahunanggaran' => $this->response['tahunanggaran'] ?? null,
            'idrup' => $this->response['idrup'] ?? null,
            'namapaket' => $this->response['namapaket'] ?? null,
            'jumlahpagu' => $this->response['jumlahpagu'] ?? null,
            'namasatker' => $this->response['namasatker'] ?? null,
            'kodesatker' => $this->response['kodesatker'] ?? null,
            'lokasi' => $this->response['lokasi'] ?? null,
            'tanggalawalpekerjaan' => $this->response['tanggalawalpekerjaan'] ?? null,
            'tanggalakhirpekerjaan' => $this->response['tanggalakhirpekerjaan'] ?? null,
            'keterangan' => $this->response['keterangan'] ?? null,
            'ppk' => $this->response['ppk'] ?? null,
            'nip_ppk' => $this->response['nip_ppk'] ?? null,
            'tanggalpengumuman' => $this->response['tanggalpengumuman'] ?? null,
            'statusdeletepaket' => $this->response['statusdeletepaket'] ?? null,
            'statusaktifpaket' => $this->response['statusaktifpaket'] ?? null,
            'id_rup_client' => $this->response['id_rup_client'] ?? null,
            'tipe_swakelola' => $this->response['tipe_swakelola'] ?? null,
            'kode_klpd_penyelenggara' => $this->response['kode_klpd_penyelenggara'] ?? null,
            'nama_klpd_penyelenggara' => $this->response['nama_klpd_penyelenggara'] ?? null,
            'nama_satker_penyelenggara' => $this->response['nama_satker_penyelenggara'] ?? null,
            'username' => $this->response['username'] ?? null,
            'kd_klpd' => $this->response['kd_klpd'] ?? null,
            'volume' => $this->response['volume'] ?? null,
            'lokasi_kab' => $this->response['lokasi_kab'] ?? null,
            'lokasi_prov' => $this->response['lokasi_prov'] ?? null,
            'idsatker' => $this->response['idsatker'] ?? null,
        ]);
    }
}
