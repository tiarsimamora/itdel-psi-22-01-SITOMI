<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Obat;
use App\Models\Pesanan;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allobat = Obat::all();
        return view('dashboard_pembeli', compact('allobat'), [
            'title' => 'Dashboard'
        ]);
    }
    
    public function indexdaftarkonsultasi()
    {
        $allkonsultasi = Konsultasi::all();
        return view("konsultasi_pembeli", compact("allkonsultasi"), [
            'title' => 'Daftar Konsultasi'
        ]);
    }
    
    public function indexbuatkonsultasi()
    {
        return view ("membuat_konsultasi_pembeli", [
            'title' => 'Buat Konsultasi'
        ]);
    }

    public function indexdaftarobat()
    {
        $allobat = Obat::all();
        return view ("daftar_obat",compact("allkonsultasi"), [
            'title' => 'Daftar Obat'
        ]);
    }

    public function indexkeranjang()
    {
        $allpesanan = Pesanan::where('id_pengguna', auth()->user()->id_pengguna)->get();
        return view ("keranjang",compact("allpesanan"), [
            'title' => 'Keranjang'
        ]);
    }
    public function indexdetailobat()
    {
        return view ("detail_obat_pembeli", [
            'title' => 'Detail Obat'
        ]);
    }
    public function indexdaftarpesanan()
    {
        $allpesanan = Pesanan::where('id_pengguna', auth()->user()->id_pengguna)->get();
        return view ("daftar_pesanan_pembeli",compact("allpesanan"), [
            'title' => 'Daftar Pesanan Saya'
        ]);
    }

    public function buatkonsultasi(Request $request)
    {
        Konsultasi::create([
            'id_pengguna' => $request-> id_pengguna,
            'isi_pesan' => $request-> isi_pesan,
        ]);     
        return redirect()
        ->back()
        ->with('success', 'PESAN ANDA BERHASIL DIKIRIM!');
    }

    public function buatpesanan(Request $request)
    {
        Pesanan::create([
            'id_obat' => $request-> id_obat,
            'id_pengguna' => $request-> id_pengguna,
            'nama_obat' => $request-> nama_obat,
            'jumlah_obat' => $request-> jumlah_obat,
        ]);     
        return redirect()
        ->back()
        ->with('success', 'Your message has been sent successfully!');
    }

    public function updatekeranjang($id_pesanan)
    {
        $allpesanan = Pesanan::find($id_pesanan);
        $allpesanan-> status = 'menunggu';
        $allpesanan-> total_harga = $allpesanan->group->harga * $allpesanan->jumlah_obat;
        $allpesanan->save();
        return redirect()
        ->back()
        ->with('success', 'PESANAN BERHASIL DIKIRIM');
    }

    public function hapuskeranjang($id_pesanan)
    {
        $alluser= Pesanan::find($id_pesanan);
        $alluser->delete();
        return redirect('keranjang');
    }
}
