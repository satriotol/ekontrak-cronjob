<?php

namespace App\Jobs;

use App\Models\NonTenderSelesaiDetailSpse;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NonTenderSelesaiDetailSpseJob implements ShouldQueue
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
        NonTenderSelesaiDetailSpse::updateOrCreate(
            [
                'tahun_anggaran' => $this->response['tahun_anggaran'] ?? null,
                'kd_klpd' => $this->response['kd_klpd'] ?? null,
                'nama_klpd' => $this->response['nama_klpd'] ?? null,
                'jenis_klpd' => $this->response['jenis_klpd'] ?? null,
                'kd_satker' => $this->response['kd_satker'] ?? null,
                'kd_lpse' => $this->response['kd_lpse'] ?? null,
                'kd_nontender' => $this->response['kd_nontender'] ?? null,
                'kd_rup_paket' => $this->response['kd_rup_paket'] ?? null,
                'pagu' => $this->response['pagu'] ?? null,
                'nama_satker' => $this->response['nama_satker'] ?? null,
                'nama_lpse' => $this->response['nama_lpse'] ?? null,
                'nama_paket' => $this->response['nama_paket'] ?? null,
                'hps' => $this->response['hps'] ?? null,
                'nilai_penawaran' => $this->response['nilai_penawaran'] ?? null,
                'nilai_terkoreksi' => $this->response['nilai_terkoreksi'] ?? null,
                'nilai_negosiasi' => $this->response['nilai_negosiasi'] ?? null,
                'nilai_kontrak' => $this->response['nilai_kontrak'] ?? null,
                'anggaran' => $this->response['anggaran'] ?? null,
                'kualifikasi_paket' => $this->response['kualifikasi_paket'] ?? null,
                'kategori_pengadaan' => $this->response['kategori_pengadaan'] ?? null,
                'metode_pengadaan' => $this->response['metode_pengadaan'] ?? null,
                'tanggal_buat_paket' => $this->response['tanggal_buat_paket'] ?? null,
                'tanggal_pengumuman_nontender' => $this->response['tanggal_pengumuman_nontender'] ?? null,
                'tanggal_selesai_nontender' => $this->response['tanggal_selesai_nontender'] ?? null,
                'kd_penyedia' => $this->response['kd_penyedia'] ?? null,
                'nama_penyedia' => $this->response['nama_penyedia'] ?? null,
                'npwp_penyedia' => $this->response['npwp_penyedia'] ?? null,
                'kode_mak' => $this->response['kode_mak'] ?? null,
                'nilai_pdn_kontrak' => $this->response['nilai_pdn_kontrak'] ?? null,
                'nilai_umk_kontrak' => $this->response['nilai_umk_kontrak'] ?? null,
            ]
        );
    }
}
