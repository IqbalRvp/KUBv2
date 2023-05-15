<?php

namespace App\Http\Controllers;

use App\Models\PembelianAyam;
use Illuminate\Http\Request;

class PembelianAyamController extends Controller
{
    public function index(Request $request)
    {
            $pembelian = PembelianAyam::all();
        
        return view('pembelian_ayam',compact('pembelian'));
    }
}
