<?php

use App\Http\Controllers\EcatInstansiSatkerController;
use App\Http\Controllers\EcatKomoditasDetailController;
use App\Http\Controllers\EcatPenyediaDetailController;
use App\Http\Controllers\EcatPenyediaDistributorDetailController;
use App\Http\Controllers\EcatProdukDetailController;
use App\Http\Controllers\HistoryKajiUlangRupPenyediaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalPerNonTenderSpseController;
use App\Http\Controllers\JadwalPerTenderSpseController;
use App\Http\Controllers\MasterLpseSpseController;
use App\Http\Controllers\NonTenderEkontrakBapBastSpseController;
use App\Http\Controllers\NonTenderEkontrakSppbJspseController;
use App\Http\Controllers\NonTenderPengumumanDetailSpseController;
use App\Http\Controllers\NonTenderSelesaiDetailSpseController;
use App\Http\Controllers\PaketAnggaranSwakelola1618Controller;
use App\Http\Controllers\PaketPenyediaOpt1618Controller;
use App\Http\Controllers\PaketSwakelolaOpt1618Controller;
use App\Http\Controllers\PencatatanNonTenderSpseController;
use App\Http\Controllers\PencatatanSwakelolaRealisasiSpseController;
use App\Http\Controllers\PencatatanSwakelolaSpseController;
use App\Http\Controllers\PesertaPerTenderSpseController;
use App\Http\Controllers\PokjaPerNonTenderSpseController;
use App\Http\Controllers\PokjaPerTenderSpseController;
use App\Http\Controllers\PpPerNonTenderSpseController;
use App\Http\Controllers\RinciObjekAkunMasterRupController;
use App\Http\Controllers\RupStrukturAnggaranKl1221Controller;
use App\Http\Controllers\RupStrukturAnggaranPemda1221Controller;
use App\Http\Controllers\TenderEkontrakBapBastSpseController;
use App\Http\Controllers\TenderEkontrakSppbJspseController;
use App\Http\Controllers\TenderPengumumanDetailSpseController;
use App\Http\Controllers\TenderSelesaiDetailSpseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tests', [HomeController::class, 'index']);
Route::get('backup/store_PaketAnggaranPenyedia1618/{year}', [HomeController::class, 'store_paket_anggaran_penyedia']);
Route::get('backup/store_EcatPaketEpurchasing/{year}', [HomeController::class, 'store_paket_epurchasing']);
Route::get('backup/store_ObjekAkunMasterRup/{year}', [HomeController::class, 'store_ObjekAkunMasterRup']);
Route::get('backup/store_ProgramMasterRup/{year}', [HomeController::class, 'store_ProgramMasterRup']);
Route::get('backup/store_KegiatanMasterRup/{year}', [HomeController::class, 'store_KegiatanMasterRup']);
Route::get('backup/store_SuboutputMasterRup/{year}/{kldi}', [HomeController::class, 'store_SuboutputMasterRup']);
Route::get('backup/store_KomponenMasterRup/{year}/{kldi}', [HomeController::class, 'store_KomponenMasterRup']);
Route::get('backup/store_MasterSatkerRup/{year}', [HomeController::class, 'store_MasterSatkerRup']);
Route::get('backup/store_SubKomponenMasterRup/{year}/{kldi}', [HomeController::class, 'store_SubKomponenMasterRup']);
Route::get('backup/store_TenderEkontrakSppbJspse/{year}', [TenderEkontrakSppbJspseController::class, 'index']);
Route::get('backup/store_RupStrukturAnggaranPemda1221/{year}', [RupStrukturAnggaranPemda1221Controller::class, 'index']);
Route::get('backup/store_PaketSwakelolaOpt1618/{year}', [PaketSwakelolaOpt1618Controller::class, 'index']); // ABOT
Route::get('backup/store_RupStrukturAnggaranKl1221/{year}/{klpd}', [RupStrukturAnggaranKl1221Controller::class, 'index']);
Route::get('backup/store_TenderEkontrakBapBastSpse/{year}', [TenderEkontrakBapBastSpseController::class, 'index']);
Route::get('backup/store_EcatPenyediaDetail/{kode_penyedia}', [EcatPenyediaDetailController::class, 'index']);
Route::get('backup/store_EcatPenyediaDistributorDetail/{kode_penyedia}', [EcatPenyediaDistributorDetailController::class, 'index']);
Route::get('backup/store_MasterLpseSpse', [MasterLpseSpseController::class, 'index']);
Route::get('backup/store_NonTenderPengumumanDetailSpse/{year}', [NonTenderPengumumanDetailSpseController::class, 'index']);
Route::get('backup/store_NonTenderEkontrakSppbJspse/{year}', [NonTenderEkontrakSppbJspseController::class, 'index']);
Route::get('backup/store_JadwalPerNonTenderSpse/{kode_non_tender}', [JadwalPerNonTenderSpseController::class, 'index']);
Route::get('backup/store_PpPerNonTenderSpse/{year}/{lpse}', [PpPerNonTenderSpseController::class, 'index']);
Route::get('backup/store_EcatInstansiSatker/', [EcatInstansiSatkerController::class, 'index']);
Route::get('backup/store_PencatatanNonTenderSpse/{year}', [PencatatanNonTenderSpseController::class, 'index']);
Route::get('backup/store_JadwalPerTenderSpse/{kode_tender}', [JadwalPerTenderSpseController::class, 'index']);
Route::get('backup/store_PencatatanSwakelolaRealisasiSpse/{KodeSwakelolaPct}', [PencatatanSwakelolaRealisasiSpseController::class, 'index']);
Route::get('backup/store_PokjaPerTenderSpse/{year}/{lpse}', [PokjaPerTenderSpseController::class, 'index']);
Route::get('backup/store_PencatatanSwakelolaSpse/{year}', [PencatatanSwakelolaSpseController::class, 'index']);
Route::get('backup/store_HistoryKajiUlangRupPenyedia/{rup}', [HistoryKajiUlangRupPenyediaController::class, 'index']); // Data Kosong
Route::get('backup/store_EcatProdukDetail/{kode_produk}', [EcatProdukDetailController::class, 'index']);
Route::get('backup/store_NonTenderSelesaiDetailSpse/{year}', [NonTenderSelesaiDetailSpseController::class, 'index']);
Route::get('backup/store_RinciObjekAkunMasterRup/{year}', [RinciObjekAkunMasterRupController::class, 'index']);
Route::get('backup/store_EcatKomoditasDetail/{komoditas}', [EcatKomoditasDetailController::class, 'index']);
Route::get('backup/store_PokjaPerNonTenderSpse/{year}/{lpse}', [PokjaPerNonTenderSpseController::class, 'index']);
Route::get('backup/store_TenderPengumumanDetailSpse/{year}', [TenderPengumumanDetailSpseController::class, 'index']);
Route::get('backup/store_NonTenderEkontrakBapBastSpse/{year}', [NonTenderEkontrakBapBastSpseController::class, 'index']);
Route::get('backup/store_TenderSelesaiDetailSpse/{year}', [TenderSelesaiDetailSpseController::class, 'index']);
Route::get('backup/store_PaketPenyediaOpt1618/{year}', [PaketPenyediaOpt1618Controller::class, 'index']);
Route::get('backup/store_PesertaPerTenderSpse/{tender}', [PesertaPerTenderSpseController::class, 'index']);
Route::get('backup/store_PaketAnggaranSwakelola1618/{year}', [PaketAnggaranSwakelola1618Controller::class, 'index']);
