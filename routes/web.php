<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PenjualanTelurController;
use App\Http\Controllers\PembelianAyamController;
use App\Http\Controllers\PembelianKebutuhanAyamController;
use App\Http\Controllers\LaporanPenjualanAyamController;
use App\Http\Controllers\LaporanPenjualanTelurController;

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

//Route
Route::get('dashboard',[DashboardController::class, 'index']);
Route::get('barang',[DataBarangController::class, 'index']);
Route::get('penjualan_ayam',[PenjualanController::class, 'index']);
Route::get('penjualan_telur',[PenjualanTelurController::class, 'index']);
Route::get('pembelian_ayam',[PembelianAyamController::class, 'index']);
Route::get('pembelian_kbth_aym',[PembelianKebutuhanAyamController::class, 'index']);
Route::get('laporan_penjualan_ayam',[LaporanPenjualanAyamController::class, 'index']);
Route::get('laporan_penjualan_telur',[LaporanPenjualanTelurController::class, 'index']);