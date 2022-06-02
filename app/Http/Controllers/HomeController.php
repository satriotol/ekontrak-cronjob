<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ResponseFormatter;
use App\Models\KegiatanMasterRup;
use App\Models\KomponenMasterRup;
use App\Models\MasterSatkerRup;
use App\Models\ObjekAkunMasterRup;
use App\Models\PaketAnggaranPenyedia;
use App\Models\PaketEPurchasing;
use App\Models\ProgramMasterRup;
use App\Models\SubKomponenMasterRup;
use App\Models\SuboutputMasterRup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class HomeController extends Controller
{
    public function index()
    {
        $responses = Http::get('https://isb.lkpp.go.id/isb/api/1683a6a8-32b4-40f9-a9be-dd07e8942ef3/json/736987856/PaketAnggaranPenyedia1618/tipe/4:12/parameter/2022:D129');
        return $responses->json();
    }
    public function store_paket_anggaran_penyedia($year, $kldi)
    {
        $responses = Http::accept('application/json')->get('https://isb.lkpp.go.id/isb/api/1683a6a8-32b4-40f9-a9be-dd07e8942ef3/json/736987856/PaketAnggaranPenyedia1618/tipe/4:12/parameter/' . $year . ':' . $kldi);
        $anggarans = PaketAnggaranPenyedia::where('tahun_anggaran_dana', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
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
        return ResponseFormatter::success(PaketAnggaranPenyedia::all()->count(), 'Sukses Menambah Data');
    }
    public function store_paket_epurchasing($year)
    {
        $responses = Http::accept('application/json')->get('https://isb.lkpp.go.id/isb/api/fc667e09-d544-4d1c-ab5d-2801b2b29205/json/736987857/Ecat-PaketEPurchasing/tipe/4:12/parameter/' . $year . ':D129');
        $anggarans = PaketEPurchasing::where('tahun_anggaran', $year)->get();
        foreach ($anggarans as $anggaran) {
            $anggaran->delete();
        }
        foreach (json_decode($responses) as $response) {
            PaketEPurchasing::create([
                'tahun_anggaran' => $response->tahun_anggaran,
                'kd_klpd' => $response->kd_klpd,
                'satker_id' => $response->satker_id,
                'nama_satker' => $response->nama_satker,
                'alamat_satker' => $response->alamat_satker,
                'npwp_satker' => $response->npwp_satker,
                'kd_paket' => $response->kd_paket,
                'no_paket' => $response->no_paket,
                'nama_paket' => $response->nama_paket,
                'kd_rup' => $response->kd_rup,
                'nama_sumber_dana' => $response->nama_sumber_dana,
                'kode_anggaran' => $response->kode_anggaran,
                'kd_komoditas' => $response->kd_komoditas,
                'kd_produk' => $response->kd_produk,
                'kd_penyedia' => $response->kd_penyedia,
                'kd_penyedia_distributor' => $response->kd_penyedia_distributor,
                'jml_jenis_produk' => $response->jml_jenis_produk,
                'total' => $response->total,
                'kuantitas' => $response->kuantitas,
                'harga_satuan' => $response->harga_satuan,
                'ongkos_kirim' => $response->ongkos_kirim,
                'total_harga' => $response->total_harga,
                'kd_user_pokja' => $response->kd_user_pokja,
                'no_telp_user_pokja' => $response->no_telp_user_pokja,
                'email_user_pokja' => $response->email_user_pokja,
                'kd_user_ppk' => $response->kd_user_ppk,
                'ppk_nip' => $response->ppk_nip,
                'jabatan_ppk' => $response->jabatan_ppk,
                'tanggal_buat_paket' => $response->tanggal_buat_paket,
                'tanggal_edit_paket' => $response->tanggal_edit_paket,
                'deskripsi' => $response->deskripsi,
                'status_paket' => $response->status_paket,
                'paket_status_str' => $response->paket_status_str,
                'catatan_produk' => $response->catatan_produk,
            ]);
        }
        return ResponseFormatter::success(PaketEPurchasing::all()->count(), 'Sukses Menambah Data');
    }
    public function store_ObjekAkunMasterRup($year)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/5482eb5b-2b4e-4033-81bd-9552e4cb8a28/json/736987962/ObjekAkunMasterRUP/tipe/4:12/parameter/' . $year . ':D129');
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'id_program' => $response->id_program,
                'id_kegiatan' => $response->id_kegiatan,
                'id_table' => $response->id,
                'kode_objekakund' => $response->kode_objekakund,
                'uraian_objekakun' => $response->uraian_objekakun,
                'pagu' => $response->pagu,
                'is_deleted' => $response->is_deleted,
                'id_client' => $response->id_client,
            ];
        }
        foreach ($records as $record) {
            ObjekAkunMasterRup::updateOrCreate(['id_table' => $record['id_table']], $record);
        }
        return ResponseFormatter::success(ObjekAkunMasterRup::all()->count(), 'Sukses Menambah Data');
    }
    public function store_ProgramMasterRup($year)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/8058ef46-8d09-445a-be29-623e4007f164/json/736987931/ProgramMasterRUP/tipe/4:12/parameter/' . $year . ':D129');
        ProgramMasterRup::truncate();
        foreach (json_decode($responses) as $response) {
            ProgramMasterRup::create([
                'id_table' => $response->id,
                'kode_programs' => $response->kode_programs,
                'nama' => $response->nama,
                'pagu' => $response->pagu,
                'is_deleted' => $response->is_deleted,
                'id_client' => $response->id_client,
                'id_satker' => $response->id_satker,
            ]);
        }
        return ResponseFormatter::success(ProgramMasterRup::all()->count(), 'Sukses Menambah Data');
    }
    public function store_KegiatanMasterRup($year)
    {
        $responses = Http::accept('application/json')->get('https://inaproc.lkpp.go.id/isb/api/273471db-b25d-4850-94af-aa94f3de22ec/json/736987930/KegiatanMasterRUP/tipe/4:12/parameter/' . $year . ':D129');
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'id_program' => $response->id_program,
                'id_table' => $response->id,
                'kode_kegiatans' => $response->kode_kegiatans,
                'nama' => $response->nama,
                'pagu' => $response->pagu,
                'is_deleted' => $response->is_deleted,
                'id_client' => $response->id_client,
                'id_satker' => $response->id_satker,
            ];
        }
        foreach ($records as $record) {
            KegiatanMasterRup::updateOrCreate(['id_table' => $record['id_table']], $record);
        }
        return ResponseFormatter::success(KegiatanMasterRup::all()->count(), 'Sukses Menambah Data');
    }
    public function store_SuboutputMasterRup($year, $kldi)
    {
        $responses = Http::accept('application/json')->get('https://isb.lkpp.go.id/isb/api/bb3cda10-031a-4750-b64b-df12dfb1c662/json/736987925/SuboutputMasterRUP/tipe/4:12/parameter/' . $year . ':' . $kldi);
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'id_program' => $response->id_program,
                'id_kegiatan' => $response->id_kegiatan,
                'id_output' => $response->id_output,
                'id_table' => $response->id,
                'kode_suboutput_string' => $response->kode_suboutput_string,
                'nama' => $response->nama,
                'pagu' => $response->pagu,
                'is_deleted' => $response->is_deleted,
                'id_client' => $response->id_client,
            ];
        }
        foreach ($records as $record) {
            SuboutputMasterRup::updateOrCreate(['id_table' => $record['id_table']], $record);
        }
        return ResponseFormatter::success(SuboutputMasterRup::all()->count(), 'Sukses Menambah Data');
    }
    public function store_KomponenMasterRup($year, $kldi)
    {
        $responses = Http::accept('application/json')->get('https://isb.lkpp.go.id/isb/api/9b154c9f-d064-48ef-b2b9-e857a27efb1e/json/736987922/KomponenMasterRUP/tipe/4:12/parameter/' . $year . ':' . $kldi);
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'id_program' => $response->id_program,
                'id_kegiatan' => $response->id_kegiatan,
                'id_output' => $response->id_output,
                'id_suboutput' => $response->id_suboutput,
                'id_table' => $response->id,
                'kode_komponen_string' => $response->kode_komponen_string,
                'nama' => $response->nama,
                'pagu' => $response->pagu,
                'is_deleted' => $response->is_deleted,
                'id_client' => $response->id_client,
            ];
        }
        foreach ($records as $record) {
            KomponenMasterRup::updateOrCreate(['id_table' => $record['id_table']], $record);
        }
        return ResponseFormatter::success(KomponenMasterRup::all()->count(), 'Sukses Menambah Data');
    }
    public function store_MasterSatkerRup($year)
    {
        $responses = Http::accept('application/json')->get('https://isb.lkpp.go.id/isb/api/9c29997c-53db-4c81-a49d-59318b1cbff4/json/736987917/MasterSatkerRUP/tipe/12:12/parameter/D129:' . $year);
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                'kd_satker' => $response->kd_satker,
                "kd_satker_str" => $response->kd_satker_str,
                "nama_satker" => $response->nama_satker,
                "alamat" => $response->alamat,
                "telepon" => $response->telepon,
                "fax" => $response->fax,
                "kodepos" => $response->kodepos,
                "status_satker" => $response->status_satker,
                "ket_satker" => $response->ket_satker,
                "jenis_satker" => $response->jenis_satker,
                "kd_klpd" => $response->kd_klpd
            ];
        }
        foreach ($records as $record) {
            MasterSatkerRup::updateOrCreate(['kd_satker' => $record['kd_satker']], $record);
        }
        return ResponseFormatter::success(MasterSatkerRup::all()->count(), 'Sukses Menambah Data');
    }
    public function store_SubKomponenMasterRup($year, $kldi)
    {
        $responses = Http::accept('application/json')->get('https://isb.lkpp.go.id/isb/api/2fe05a96-36b1-40e9-945e-310f86f58b07/json/736987915/SubKomponenMasterRUP/tipe/4:12/parameter/' . $year . ':' . $kldi);
        $records = array();
        foreach (json_decode($responses) as $response) {
            $records[] = [
                "id_program" => $response->id_program,
                "id_kegiatan" => $response->id_kegiatan,
                "id_output" => $response->id_output,
                "id_suboutput" => $response->id_suboutput,
                "id_komponen" => $response->id_komponen,
                "id_table" => $response->id,
                "kode_subkomponen_string" => $response->kode_subkomponen_string,
                "nama" => $response->nama,
                "pagu" => $response->pagu,
                "is_deleted" => $response->is_deleted,
                "id_client" => $response->id_client
            ];
        }
        foreach ($records as $record) {
            SubKomponenMasterRup::updateOrCreate(['id_table' => $record['id_table']], $record);
        }
        return ResponseFormatter::success(SubKomponenMasterRup::all()->count(), 'Sukses Menambah Data');
    }
}
