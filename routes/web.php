<?php

use App\Models\dpemanfaatan;
use App\Models\pengawasan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdministrasiController;
use App\Http\Controllers\PengawasanController;
use App\Http\Controllers\DpemanfaatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserdasboardController;
use App\Http\Controllers\UserPengawasan;
use Illuminate\Support\Facades\Auth;
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
// URL::forceScheme('https');

//menampilkan home
Route::group(['middleware' => 'web'], function () {

    Route::get('/', function () {
        return view('user_dashboard');
    })->name('user_dashboard');

    //Login
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
    Route::match(['get', 'post'], 'actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

    Route::group(['middleware' => ['auth']], function () {
        //Home
        Route::get('home', [HomeController::class, 'index'])->name('home');
        Route::match(['get', 'post'], 'actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
        //Register
        Route::get('register', [RegisterController::class, 'register'])->name('register');
        Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

        // Route::get('master', [RegisterController::class, 'register'])->name('register');
        Route::get('/masterlogin', [LoginController::class, 'masterlogin'])->name('masteradmin');
        Route::post('actionmaster', [LoginController::class, 'actionmaster'])->name('masterlogin');
        Route::post('/master', [LoginController::class, 'master'])->name('master');

        // Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('home', [HomeController::class, 'index'])->name('home');

        //memanggil tabel pemanfaatan
        Route::get('/tabel', [DpemanfaatanController::class, 'index'])->name('tabel');

        //menampilkan form input data pemanfaatan
        Route::get('/form-dpemanfaatan', [DpemanfaatanController::class, 'create'])->name('form-dpemanfaatan');

        //nampilkan data hasil inputan ke tabel
        Route::post('/simpan-dpemanfaatan', [DpemanfaatanController::class, 'store'])->name('simpan-dpemanfaatan');

        //memanggil edit
        Route::get('edit-pemanfaatan/{id}', [DpemanfaatanController::class, 'edit'])->name('edit-pemanfaatan');

        //memanggil update
        Route::post('/updatepemanfaatan', [DpemanfaatanController::class, 'update'])->name('updatepemanfaatan');

        // memanggil hapus
        Route::get('/hapus-pemanfaatan/{id}', [DpemanfaatanController::class, 'delete'])->name('hapus-pemanfaatan');

        // Route::get('/home', function () {
        //     return view('home');
        // });

        //pengawasan
        Route::get('/Data-Pengawasan', [PengawasanController::class, 'index'])->name('Data-Pengawasan');
        Route::get('/Create-Pengawasan', [PengawasanController::class, 'create'])->name('Create-Pengawasan');
        Route::post('/simpan-Pengawasan', [PengawasanController::class, 'store'])->name('simpan-Pengawasan');
        Route::get('/edit-pengawasan/{id}', [PengawasanController::class, 'edit'])->name('edit-pengawasan');
        Route::get('/view-pengawasan/{id}', [PengawasanController::class, 'view'])->name('view-pengawasan');
        Route::post('/update-pengawasan/{id}', [PengawasanController::class, 'update'])->name('update-pengawasan');
        Route::get('/delete-pengawasan/{id}', [PengawasanController::class, 'destroy'])->name('delete-pengawasan');

        Route::get('/Data-Pengawasan', [PengawasanController::class, 'index'])->name('Data-Pengawasan');
    });

    //permohonan izin
    Route::get('/tabel_izin', [AdministrasiController::class, 'index'])->name('tabel_izin');
    Route::get('/form_izin', [AdministrasiController::class, 'create'])->name('form_izin');
    Route::post('/simpan_administrasi', [AdministrasiController::class, 'store'])->name('simpan_administrasi');
    Route::get('edit/{id}', [AdministrasiController::class, 'edit'])->name('edit');
    Route::post('/updateadministrasi', [AdministrasiController::class, 'update'])->name('updateadministrasi');
    Route::delete('/hapus/{id}', [AdministrasiController::class, 'destroy'])->name('hapus');

    // Auth::routes();

    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Auth::routes();

    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/search/pemanfaatan', [DpemanfaatanController::class, 'pemanfaatan'])->name('api.pemanfaatan.search');
    Route::get('/search/tahunA', [DpemanfaatanController::class, 'tahunA'])->name('api.tahunA');
    Route::get('/search/pemanfaatan/kabupaten', [DpemanfaatanController::class, 'kabupaten'])->name('api.pemanfaatan.kabupaten');
    Route::get('/search/pemanfaatan/kapanewon', [DpemanfaatanController::class, 'kapanewon'])->name('api.pemanfaatan.kapanewon');
    Route::get('/search/pemanfaatan/kelurahan', [DpemanfaatanController::class, 'kelurahan'])->name('api.pemanfaatan.kelurahan');
    Route::get('/search/pemanfaatan/tanggal_akhir', [DpemanfaatanController::class, 'tanggal_akhir'])->name('api.pemanfaatan.tanggal_akhir');
    Route::get('/pesan/peringatan', 'DpemanfaatanController@peringatan');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


    Route::get('/search/pengawasan', [PengawasanController::class, 'pengawasan'])->name('api.pengawasan.search');
    Route::get('/search/tahun', [PengawasanController::class, 'tahun'])->name('api.tahun');
    Route::get('/search/pengawasan/kabupaten', [PengawasanController::class, 'kabupaten'])->name('api.pengawasan.kabupaten');
    Route::get('/search/pengawasan/kapanewon', [PengawasanController::class, 'kapanewon'])->name('api.pengawasan.kapanewon');
    Route::get('/search/pengawasan/kelurahan', [PengawasanController::class, 'kelurahan'])->name('api.pengawasan.kelurahan');
    Route::get('/search/pengawasan/tahun_pengawasan', [PengawasanController::class, 'tahun_pengawasan'])->name('api.pengawasan.tahun_pengawasan');
    Route::get('/pesan/peringatan', [PengawasanController::class, 'peringatan']);
    //user dasboard
    Route::get('/', [UserdasboardController::class, 'index'])->name('user_dasboard');

    Route::get('/pengawasan', [UserPengawasan::class, 'index'])->name('uspengawasan');
});
