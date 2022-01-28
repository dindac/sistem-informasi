<?php

use App\Http\Controllers\admin\JadwalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\admin\KelasController;
use App\Http\Controllers\admin\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\siswa\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\siswa\JadwalController as SiswaJadwalController;

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

Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('/login', [AuthController::class, 'index']);
// Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('/proses_login',[AuthController::class, 'proses_login']);

// Proses Registrasi Murid
Route::get('/register', [RegisterController::class, 'registrasiMurid']);
Route::post('/register/save', [RegisterController::class, 'enroll']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::group([
    'prefix' => 'cp',
    'namespace' => 'Cp',
    'middleware' => ['auth', 'admin'],
    'as' => 'cp.'
], function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/');

    Route::get('/', [LayoutController::class, 'index']);

    //kelas
    Route::get('/show_kelas', [KelasController::class, 'index']);
    Route::get('/create_kelas', [KelasController::class, 'create']);
    Route::post('/kelas/save', [KelasController::class, 'store']);
    Route::get('/edit_kelas/{kelas}/edit', [KelasController::class, 'edit']);
    Route::put('kelas/update/{id}', [KelasController::class, 'update']);
    Route::get('hapus_kelas/{id}', [KelasController::class, 'delete']);

    //siswa
    Route::get('/create_siswa', [SiswaController::class, 'create']);
    Route::get('/show_siswa', [SiswaController::class, 'show']);
    Route::post('/siswa/save', [SiswaController::class, 'store']);
    Route::get('/edit_siswa/{siswa}/edit', [SiswaController::class, 'edit']);
    Route::put('siswa/update/{id}', [SiswaController::class, 'update']);
    Route::get('hapus_siswa/{id}', [SiswaController::class, 'delete']);
    Route::get('detail_siswa/{siswa}',[SiswaController::class, 'detail']);

    //profil
    Route::get('/profil', [UserController::class, 'profile_show']);
    Route::post('/ubah_avatar', [UserController::class, 'ubah_avatar']);

    //jadwal
    Route::get('/show_jadwal', [JadwalController::class, 'show']);
    Route::get('/create_jadwal', [JadwalController::class, 'create']);
    Route::post('/jadwal/save', [JadwalController::class, 'store']);
    Route::get('/edit_jadwal/{jadwal}/edit', [JadwalController::class, 'edit']);
    Route::put('jadwal/update/{id}', [JadwalController::class, 'update']);
    Route::get('hapus_jadwal/{id}', [JadwalController::class, 'delete']);
    Route::get('detail_jadwal/{event}',[JadwalController::class, 'detail']);
});


Route::group([
    'prefix' => 'siswa',
    'namespace' => 'Siswa',
    'middleware' => ['auth','siswa'],
    'namespace' => 'Siswa',
    'as' => 'siswa.'

], function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/');
    Route::get('/', [LayoutController::class, 'index']);

    //profil
    Route::get('/profil', [UserController::class, 'profile_show']);
    Route::post('/profil', [UserController::class, 'post_profile']);
    Route::post('/ubah_avatar', [UserController::class, 'ubah_avatar']);

    //jadwal
    Route::get('/show_jadwal', [SiswaJadwalController::class, 'show']);
});
