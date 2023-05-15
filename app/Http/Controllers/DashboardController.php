<?php

namespace App\Http\Controllers;

use App\Models\BarangAyam;
use App\Models\BarangTelur;
use App\Models\Dashboard;
use App\Models\PenjualanAyam;
use App\Models\PenjualanTelur;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
            $penjualan_ayam = PenjualanAyam::all();
            $penjualan_telur = PenjualanTelur::all();
            $barang_ayam = BarangAyam::all();
            $barang_telur = BarangTelur::all();
        
        return view('dashboard',compact('penjualan_ayam', 'penjualan_telur', 'barang_ayam', 'barang_telur'));
    }
}