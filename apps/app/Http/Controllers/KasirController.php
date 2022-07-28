<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPenjualan;
use App\Models\Obat;
use App\Models\Pesanan;

class KasirController extends Controller
{
    public function index()
    {
        return view ("dashboard_kasir", [
            'title' => 'Dashboard'
        ]);
    }

    public function indexdaftarobatkasir()
    {
        $allobat = Obat::all();
        return view("daftar_obat_kasir", compact("allobat"), [
            'title' => 'Daftar Obat'
        ]);
    }

    public function indexdaftarpesanankasir()
    {   
        $allpesanan = Pesanan::all();
        return view ("daftar_pesanan_kasir",compact("allpesanan"), [
            'title' => 'Daftar Pesanan'
        ]);
    }

    public function indexpembelianmanual()
    {
        $allobat = Obat::all();
        $allpesanan = Pesanan::all();
        return view("pembelian_manual", compact("allobat", "allpesanan"), [
            'title' => 'Pembelian Manual'
        ]);
    }

    public function inputpembelian(Request $request)
    {
        DataPenjualan::create([
            'id_obat' => $request -> id_obat,
            'id_pengguna' => $request -> id_pengguna,
            'jumlah_obat' => $request -> jumlah_obat,
            'total_harga' => $request -> total_harga,
            
        ]);
        $allobat = Obat::findOrFail($request->id_obat);
        $allobat->stok -= $request->jumlah_obat;
		$allobat->save();

        return redirect()
        ->back()
        ->with('success', 'PEMBELIAN BERHASIL DITAMBAHKAN');     
    }

    public function showdetailpesanan($id_pesanan)
    {
        $allpesanan = Pesanan::find($id_pesanan);
        return view('menerima_pesanan', [
            'allpesanan'=> $allpesanan,
                'title' => 'Pesanan'
        ]);
    }

    public function terimapesanankasir($id_pesanan)
    {
        $allpesanan = Pesanan::find($id_pesanan);
        $allpesanan-> status = 'terima';
        $allpesanan->save();
        return redirect('daftar_pesanan_kasir')
        ->with('success', 'PESANAN BERHASIL DITERIMA');
    }
    
    public function tolakpesanankasir($id_pesanan)
    {
        $allpesanan = Pesanan::find($id_pesanan);
        $allpesanan-> status = 'tolak';
        $allpesanan->save();
        return redirect('daftar_pesanan_kasir');
    }
    public function selesaikanpesanankasir($id_pesanan)
    {
        $allpesanan = Pesanan::find($id_pesanan);
        $allpesanan-> status = 'selesai';
        $allpesanan->save();
        return redirect()
        ->back()
        ->with('success', 'PESANAN TELAH SELESAI');
    }
    
    public function tambahkedatapenjualan(Request $request)
    {
        DataPenjualan::create([
            'id_pengguna' => $request-> id_pengguna,
            'id_pesanan' => $request-> id_pesanan,
            'id_obat' => $request-> id_obat,
            'jumlah_obat' => $request-> jumlah_obat,
            'total_harga' => $request-> total_harga,
        ]);
        
        $allobat = Obat::findOrFail($request->id_obat);
        $allobat->stok -= $request->jumlah_obat;
		$allobat->save();
      
        return redirect('daftar_pesanan_kasir');
    }

    

}
