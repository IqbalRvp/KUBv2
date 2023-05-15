<?php

namespace App\Http\Controllers;

use App\Models\BarangAyam;
use App\Models\BarangKebutuhanAyam;
use App\Models\BarangTelur;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    public function index(Request $request)
    {
        $barang_id = $request->get('barang_id');
        if ($barang_id == '1') {
            $barang = BarangKebutuhanAyam::all();
        } else if($barang_id == '2') {
            $barang = BarangAyam::all();
        }else{
            $barang = BarangTelur::all();
        }
        
        return view('data-barang',compact('barang'));
    }
}
