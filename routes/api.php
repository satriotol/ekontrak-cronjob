<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TenderEkontrakSppbJspseController;
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
Route::get('backup/store_paket_anggaran_penyedia/{year}', [HomeController::class, 'store_paket_anggaran_penyedia']);
Route::get('backup/store_paket_epurchasing/{year}', [HomeController::class, 'store_paket_epurchasing']);
Route::get('backup/store_ObjekAkunMasterRup/{year}', [HomeController::class, 'store_ObjekAkunMasterRup']);
Route::get('backup/store_ProgramMasterRup/{year}', [HomeController::class, 'store_ProgramMasterRup']);
Route::get('backup/store_KegiatanMasterRup/{year}', [HomeController::class, 'store_KegiatanMasterRup']);
Route::get('backup/store_SuboutputMasterRup/{year}/{kldi}', [HomeController::class, 'store_SuboutputMasterRup']);
Route::get('backup/store_KomponenMasterRup/{year}/{kldi}', [HomeController::class, 'store_KomponenMasterRup']);
Route::get('backup/store_MasterSatkerRup/{year}', [HomeController::class, 'store_MasterSatkerRup']);
Route::get('backup/store_SubKomponenMasterRup/{year}/{kldi}', [HomeController::class, 'store_SubKomponenMasterRup']);
Route::get('backup/store_TenderEkontrakSppbJspse/year/{lpse}', [TenderEkontrakSppbJspseController::class, 'index']);
