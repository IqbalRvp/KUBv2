<?php

namespace App\Http\Controllers;

use App\Models\PenjualanAyam;
use Illuminate\Http\Request;

class LaporanPenjualanAyamController extends Controller
{
    public function index(Request $request)
    {
        $penjualan_ayam = PenjualanAyam::all();
        return view('laporan_penjualan_ayam', compact('penjualan_ayam'));
    }
}
