<?php

namespace App\Http\Controllers;

use App\Models\PenjualanAyam;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index(Request $request)
    {
            $penjualan = PenjualanAyam::all();
        
        return view('penjualan_ayam',compact('penjualan'));
    }
}
