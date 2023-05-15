<?php

namespace App\Http\Controllers;

use App\Models\PembelianKebutuhanAyam;
use Illuminate\Http\Request;

class PembelianKebutuhanAyamController extends Controller
{
    public function index(Request $request)
    {
            $pembelian = PembelianKebutuhanAyam::all();
        
        return view('pembelian_kbth_aym',compact('pembelian'));
    }
}
