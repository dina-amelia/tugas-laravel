<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\Pembelian;
use App\Models\Pembeli;
use App\Models\Suplier;

class BarangController extends Controller
{
    public function barang()
    {
        $barang = Barang::all();
        return view('barang', compact('barang'));
    }

    public function pesanan()
    {
        $pesanan = Pesanan::all();
        return view('pesanan', compact('pesanan'));
    }

    public function pembelian()
    {
        $pembelian = Pembelian::all();
        return view('pembelian', compact('pembelian'));
    }

    public function pembeli()
    {
        $pembeli = Pembeli::all();
        return view('pembeli', compact('pembeli'));
    }

    public function suplier()
    {
        $suplier = Suplier::all();
        return view('suplier', compact('suplier'));
    }


}
