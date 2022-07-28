<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\User;
use App\Models\Konsultasi;
use App\Models\DataPenjualan;

use DB;
use Excel;
use App\Exports\UsersExport;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allobat = Obat::all();
        $allkonsultasi = Konsultasi::all();
        $alldatapenjualan = DataPenjualan::all();
        return view("dashboard_admin", compact("allobat", "allkonsultasi", "alldatapenjualan"), [
            'title' => 'Dashboard']);
    }

    public function indexdaftarobat()
    {
        $allobat = Obat::all();
        return view("daftar_obat", compact("allobat"), [
            'title' => 'Daftar Obat'
        ]);
    }

    public function indextambahpegawai()
    {
        return view ("tambah_pegawai", [
            'title' => 'Tambah Pegawai'
        ]);
    }

    public function indexdaftaruser()
    {
        $alluser = User::all();
        return view("daftar_user", compact("alluser"), [
            'title' => 'Daftar User'
        ]);
    }

    public function showdetailobat($id_obat)
    {
        $allobat = Obat::find($id_obat);
        return view('detail_obat_admin', [
            'allobat'=> $allobat,
            'title' => 'Detail Obat'
        ]);
    }
    
    public function showdetailobatedit($id_obat)
    {
        $allobat = Obat::find($id_obat);
        return view('edit_obat', [
            'allobat'=> $allobat,
            'title' => 'Edit Obat'
        ]);    
    }
    
    public function updateeditobat(Request $request)
    {
        $allobat = Obat::find($request->id_obat);
        if($request->hasfile('gambar')){
            $newImageName = time().'-'.$request->name . '.'.$request->gambar->extension();
            $request->gambar->move(public_path('assets/images/obat/'), $newImageName);
            $allobat->gambar = $newImageName;
        }
        $allobat->nama_obat=$request->nama_obat;
        $allobat->harga=$request->harga;
        $allobat->stok=$request->stok;
        $allobat->deskripsi=$request->deskripsi;
        $allobat->efek_samping=$request->efek_samping;
        
        $allobat->save();
        return redirect('daftar_obat')
        ->with('success', 'OBAT BERHASIL DIPERBAHARUI');
    }

    
    public function indextambahobat()
    {
        return view ("tambah_obat", [
            'title' => 'Tambah Obat'
        ]);
    }
    
    public function indexlaporanpenjualan()
    {
        $alldatapenjualan = DataPenjualan::all()->sortByDesc("created_at");
        return view("laporan_penjualan", compact("alldatapenjualan"), [
            'title' => 'Laporan Penjualan'
        ]);
    }

    public function indexkonsultasi()
    {
        $allkonsultasi = Konsultasi::all()->sortByDesc("created_at");
        return view("konsultasi_admin", compact("allkonsultasi"), [
            'title' => 'Konsultasi'
        ]);
    }

    public function buatobat(Request $request)
    {
        if($request->hasfile('gambar')){
            $newImageName = time().'-'.$request->name . '.'.$request->gambar->extension();
            $request->gambar->move(public_path('assets/images/obat/'), $newImageName);
            }else{
                return $request;
                $allobat->gambar = $newImageName;
            }
        Obat::create([
            'id_pengguna' => $request-> id_pengguna,
            'nama_obat' => $request-> nama_obat,
            'harga' => $request-> harga, 
            'stok' => $request-> stok,
            'deskripsi' => $request-> deskripsi,
            'efek_samping' => $request-> efek_samping,
            'gambar'=> $newImageName,
        ]);     

        return redirect()
        ->back()
        ->with('success', 'OBAT BERHASIL DITAMBAHKAN');
    }

    #ShowKonsultasi
    public function showbalaskonsultasi($id_konsultasi)
    {
        $allkonsultasi = Konsultasi::find($id_konsultasi);
        return view('balas_konsultasi_admin', ['allkonsultasi'=> $allkonsultasi, 'title' => 'Balas Konsultasi']);
    }

    public function kirimbalasan(Request $request)
    {
        $allkonsultasi = Konsultasi::find($request->id_konsultasi);
        $allkonsultasi->isi_balasan=$request->isi_balasan;
        $allkonsultasi->save();
        return redirect('konsultasi_admin');
    }

    #DELETE USER
    public function deleteuser($id_pengguna)
    {
        $alluser=User::find($id_pengguna);
        $alluser->delete();
        return redirect('daftar_user');
    }

    #EXPORT_LAPORAN_PENJUALAN
    public function excel()
    {
        return Excel::download(new UsersExport, 'Laporan_Penjualan.xlsx');
    }
}
