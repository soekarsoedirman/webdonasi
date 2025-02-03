<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ZakatController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ZakatController::class, 'index'])->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/dokumentasi', [DokumentasiController::class, 'index'])->name('dokumentasi.show');

Route::get('/program', [ZakatController::class, 'show'])->name('program');

Route::get('/Program/{blog}', [ZakatController::class, 'postingan'])->name('program.show');

Route::get('/donasi/{blog}', [DonasiController::class, 'index'])->name('donasi');

Route::post('/donasi/{blog}/store', [DonasiController::class, 'store'])->name('donasi.store');

#login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

#halaman Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/tambah', [AdminController::class, 'buatProgram'])->name('program.buatProgram');
Route::post('/admin/tambah/store', [AdminController::class, 'tambahProgram'])->name('program.tambahProgram');
Route::get('/admin/edit/{blog}', [AdminController::class, 'editProgram'])->name('program.editProgram');
Route::post('/admin/edit/{blog}/store', [AdminController::class, 'updateProgram'])->name('program.updateProgram');
Route::delete('/admin/hapus/{blog}', [AdminController::class, 'destroyProgram'])->name('program.hapusprogram');
Route::delete('/admin/hapuspesan/{blog}', [AdminController::class, 'hapusPesan'])->name('hapus.pesan');
Route::get('/admin/cekdonasi', [AdminController::class, 'cekdonasi'])->name('cekdonasi');
Route::post('/admin/cekdonasi/{blog}/store', [AdminController::class, 'tambahDonatur'])->name('tambah.donatur');
Route::delete('/admin/cekdonasi/hapusdonadi/{blog}', [AdminController::class, 'destroyDonasi'])->name('hapus.donasi');
Route::get('/admin/donatur', [AdminController::class, 'daftarDonatur'])->name('daftar.donatur');
Route::delete('/admin/donatur/hapus/{blog}', [AdminController::class, 'destroyDonatur'])->name('hapus.donatur');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


