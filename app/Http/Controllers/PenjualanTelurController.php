<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjualanTelur;

class PenjualanTelurController extends Controller
{
    public function index(Request $request)
    {
            $penjualan = PenjualanTelur::all();
        
        return view('penjualan_telur',compact('penjualan'));
    }
}
