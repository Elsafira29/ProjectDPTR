<?php

use App\Models\dpemanfaatan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengawasanController;
use App\Http\Controllers\DpemanfaatanController;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Round;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//menampilkan home 
Route::get('home', [HomeController::class, 'index'])->name('home');

//memanggil tabel pemanfaatan
Route::get('/tabel', [DpemanfaatanController::class, 'index'])->name('tabel');

//menampilkan form input data pemanfaatan
Route::get('/form-dpemanfaatan', [DpemanfaatanController::class, 'create'])->name('form-dpemanfaatan');

//nampilkan data hasil inputan ke tabel
Route::post('/simpan-dpemanfaatan', [DpemanfaatanController::class, 'store'])->name('simpan-dpemanfaatan');

//memanggil edit
Route::get('edit-pemanfaatan/{id}',[DpemanfaatanController::class, 'edit'])->name('edit-pemanfaatan');

//memanggil update
Route::post('/updatepemanfaatan',[DpemanfaatanController::class, 'update'])->name('updatepemanfaatan');

// memanggil hapus
Route::get('/hapus-pemanfaatan/{id}',[DpemanfaatanController::class, 'delete'])->name('hapus-pemanfaatan');

// Route::get('/home', function () {
//     return view('home');
// });

//pengawasan
Route::get('/Data-Pengawasan', [PengawasanController::class,'index'])->name('Data-Pengawasan');
Route::get('/Create-Pengawasan',[PengawasanController::class,'create'])->name('Create-Pengawasan');
Route::post('/simpan-Pengawasan',[PengawasanController::class,'store'])->name('simpan-Pengawasan');
Route::get('/edit-pengawasan/{id}',[PengawasanController::class,'edit'])->name('edit-pengawasan');
Route::post('/update-pengawasan/{id}',[PengawasanController::class,'update'])->name('update-pengawasan');
Route::get('/delete-pengawasan/{id}',[PengawasanController::class,'destroy'])->name('delete-pengawasan');