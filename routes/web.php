<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\dosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\kerjaPraktekController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//mahasiswa
Route::get('/halamanDosen', [MahasiswaController::class, 'index'])->name('daftar_dosen');
Route::get('/halamanPengajuan', [mahasiswaController::class, 'pageAdd'])->name('page_tambah_pengajuan');
Route::post('/halamanPengajuan', [mahasiswaController::class, 'create'])->name('tambah_pengajuan');
Route::get('/draftPengajuan/{id}', [mahasiswaController::class, 'draft'])->name('draft_pengajuan');
Route::put('/draftPengajuan/{pengajuan}', [mahasiswaController::class, 'edit'])->name('edit_pengajuan');
Route::delete('/draftPengajuan/{pengajuan}', [mahasiswaController::class, 'delete'])->name('hapus_pengajuan');
Route::put('/ajukanPengajuan/{id}', [mahasiswaController::class, 'ajukan'])->name('ajukan_pengajuan');

Route::get('/dashboardMahasiswa', [mahasiswaController::class, 'dashboard'])->name('home');
Route::get('/riwayatMahasiswa', [mahasiswaController::class, 'history'])->name('riwayat');
Route::get('/reviewMahasiswa', [mahasiswaController::class, 'hasil'])->name('review');
Route::get('/rejectedMahasiswa', [mahasiswaController::class, 'tolak'])->name('reject');
Route::get('/profilMahasiswa', [mahasiswaController::class, 'bio'])->name('profile');

//dosen
Route::get('/daftarBimbingan', [dosenController::class, 'list'])->name('list_mahasiswa');
Route::get('/rincianDocument/{pengajuan}', [dosenController::class, 'rinci'])->name('rincian_pengajuan');
Route::post('/terimaPengajuan/{pengajuan}', [dosenController::class, 'terima'])->name('terima_pengajuan');
Route::post('/tolakPengajuan/{pengajuan}', [dosenController::class, 'tolak'])->name('tolak_pengajuan');

//admin
Route::get('/halaman-admin-bimbingan', [adminController::class, 'mhsBimbingan']);

