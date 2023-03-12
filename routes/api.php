<?php

use App\Http\Controllers\Api\Select2Controller;
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

Route::group(['prefix' => 'v1/'], function () {
    Route::get('/kabupaten', [Select2Controller::class, 'getAllKabupatens'])->name('kabupaten.get-all-kabupaten');
    Route::get('/kecamatan/{id}', [Select2Controller::class, 'getAllKecamatanFromGivenKabupatenId'])->name('kecamatan.get-from-kabupaten-id');
    Route::get('/kelurahan/{id}', [Select2Controller::class, 'getAllKelurahanFromGivenKecamatanId'])->name('kelurahan.get-from-kecamatan-id');
});
