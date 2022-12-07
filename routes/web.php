<?php

use App\Models\dpemanfaatan;
use App\Models\pengawasan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//menampilkan home 
Route::group(['middleware' => 'web'], function () {
    // Route::auth();

    Route::get('/', function () {
        return view('user_dashboard');
    })->name('user_dashboard');

    //Login
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

    //Home
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::match(['get', 'post'],'actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
    
    // Route::get('user', function () {
    //     return view('user');
    // })->name('user');
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

Route::get('/Data-Pengawasan', [PengawasanController::class, 'index'])->name('Data-Pengawasan');

});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search/pemanfaatan',[DpemanfaatanController::class,'pemanfaatan'])->name('api.pemanfaatan.search');
Route::get('/search/pemanfaatan/kabupaten',[DpemanfaatanController::class, 'kabupaten'])->name('api.pemanfaatan.kabupaten');
Route::get('/search/pemanfaatan/kecamatan',[DpemanfaatanController::class, 'kecamatan'])->name('api.pemanfaatan.kecamatan');
Route::get('/search/pemanfaatan/kelurahan',[DpemanfaatanController::class, 'kelurahan'])->name('api.pemanfaatan.kelurahan');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');


Route::get('/search/pengawasan',[pengawasanController::class,'pengawasan'])->name('api.pengawasan.search');
Route::get('/search/pengawasan/kabupaten',[pengawasanController::class, 'kabupaten'])->name('api.pengawasan.kabupaten');
Route::get('/search/pengawasan/kapanewon',[pengawasanController::class, 'kapanewon'])->name('api.pengawasan.kapanewon');
Route::get('/search/pengawasan/kelurahan',[pengawasanController::class, 'kelurahan'])->name('api.pengawasan.kelurahan');

//user dasboard
Route::get('/',[UserdasboardController::class,'index'])->name('user_dasboard');

Route::get('/pengawasan',[UserPengawasan::class,'index'])->name('uspengawasan');