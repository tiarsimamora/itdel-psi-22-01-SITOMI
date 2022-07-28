<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


#PROFILE
Route::get('/profile/{id_pengguna}', 'App\Http\Controllers\AuthController@indexprofile');
Route::get('/edit_profile/{id_pengguna}', 'App\Http\Controllers\AuthController@indexeditprofile');
Route::post('/simpan_edit_profile', 'App\Http\Controllers\AuthController@updateedituser');


#LOGIN
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

#REGISTRASI
Route::post('/signupdata', 'App\Http\Controllers\AuthController@signupdata');
Route::post('/signupasadmin', 'App\Http\Controllers\AuthController@signupasadmin');
Route::get('/signup', 'App\Http\Controllers\AuthController@indexsignup');

#ADMIN
Route::get('/dashboard_admin', 'App\Http\Controllers\AdminController@index')->middleware('auth','admin');
    #DAFTAR_OBAT
    Route::get('/daftar_obat', 'App\Http\Controllers\AdminController@indexdaftarobat')->middleware('auth', 'admin');
        #DETAIL_OBAT
        Route::get('/detail_obat_admin/{id_obat}', 'App\Http\Controllers\AdminController@showdetailobat')->middleware('auth','admin');
        #EDIT_OBAT
        Route::get('/edit_obat/{id_obat}', 'App\Http\Controllers\AdminController@showdetailobatedit')->middleware('auth','admin');
        Route::post('/simpan_edit', 'App\Http\Controllers\AdminController@updateeditobat')->middleware('auth','admin');
        #TAMBAH_OBAT
        Route::get('/tambah_obat', 'App\Http\Controllers\AdminController@indextambahobat')->middleware('auth','admin');
        Route::post('/buat_obat', 'App\Http\Controllers\AdminController@buatobat')->middleware('auth','admin');
    #LAPORAN_PENJUALAN
    Route::get('/laporan_penjualan', 'App\Http\Controllers\AdminController@indexlaporanpenjualan')->middleware('auth','admin');
    #KONSULTASI
    Route::get('/konsultasi_admin', 'App\Http\Controllers\AdminController@indexkonsultasi')->middleware('auth','admin');
        #BALASKONSULTASIADMIN
        Route::get('/balas_pesan/{id_konsultasi}', 'App\Http\Controllers\AdminController@showbalaskonsultasi')->middleware('auth','admin');
        Route::post('/kirim_balasan', 'App\Http\Controllers\AdminController@kirimbalasan')->middleware('auth','admin');
    #DAFTAR_USER
    Route::get('/daftar_user', 'App\Http\Controllers\AdminController@indexdaftaruser')->middleware('auth','admin');
        #TAMBAH_USER
        Route::get('/tambah_pegawai', 'App\Http\Controllers\AdminController@indextambahpegawai')->middleware('auth','admin');
        #SEBAGAI_ADMIN
        Route::get('/asadmin/{id}', 'App\Http\Controllers\AuthController@asadmin')->middleware('auth','admin');
        #SEBAGAI_KASIR
        Route::get('/askasir/{id}', 'App\Http\Controllers\AuthController@askasir')->middleware('auth','admin');
        #HAPUS_USER
        Route::get('/hapus_user/{id_pengguna}', 'App\Http\Controllers\AdminController@deleteuser')->middleware('auth','admin');
    #EXPORT_LAPORAN_PENJUALAN
    Route::get('/export_excel', 'App\Http\Controllers\AdminController@excel')->name('export_excel')->middleware('auth','admin');

#KASIR
Route::get('/dashboard_kasir', 'App\Http\Controllers\KasirController@index')->middleware('auth','kasir');
    #DAFTAR_OBAT
    Route::get('/daftar_obat_kasir', 'App\Http\Controllers\KasirController@indexdaftarobatkasir')->middleware('auth','kasir');
    #DAFTAR_PESANAN
    Route::get('/daftar_pesanan_kasir', 'App\Http\Controllers\KasirController@indexdaftarpesanankasir')->middleware('auth','kasir');
    #PEMBELIAN_MANUAL
    Route::get('/pembelian_manual', 'App\Http\Controllers\KasirController@indexpembelianmanual')->middleware('auth','kasir');
    Route::post('/input_pembelian', 'App\Http\Controllers\KasirController@inputpembelian')->middleware('auth','kasir');
    #TINDAKAN_PESANAN
    Route::get('/detail_pesanan_kasir/{id_pesanan}', 'App\Http\Controllers\KasirController@showdetailpesanan')->middleware('auth','kasir');
        #TERIMA PESANAN
        Route::get('/terima_pesanan/{id_pesanan}', 'App\Http\Controllers\KasirController@terimapesanankasir')->middleware('auth','kasir');
        #TOLAK PESANAN
        Route::get('/tolak_pesanan/{id_pesanan}', 'App\Http\Controllers\KasirController@tolakpesanankasir')->middleware('auth','kasir');
        #SELESAIKAN PESANAN
        Route::get('/selesai_pesanan/{id_pesanan}', 'App\Http\Controllers\KasirController@selesaikanpesanankasir')->middleware('auth','kasir');
        #SELESAIKAN PESANAN
        Route::post('/tambah_data_penjualan/{id_pesanan}', 'App\Http\Controllers\KasirController@tambahkedatapenjualan')->middleware('auth','kasir');

#PEMBELI
Route::get('/dashboard_pembeli', 'App\Http\Controllers\PembeliController@index')->middleware('auth','pembeli');
    #DAFTAR_KONSULTASI
    Route::get('/konsultasi_pembeli', 'App\Http\Controllers\PembeliController@indexdaftarkonsultasi')->middleware('auth','pembeli');
    #BUAT_KONSULTASI
    Route::get('/membuat_konsultasi_pembeli', 'App\Http\Controllers\PembeliController@indexbuatkonsultasi')->middleware('auth','pembeli');
    Route::post('/buat_konsultasi', 'App\Http\Controllers\PembeliController@buatkonsultasi')->middleware('auth','pembeli');
    #KERANJANG
    Route::get('/keranjang', 'App\Http\Controllers\PembeliController@indexkeranjang')->middleware('auth','pembeli');
    #DAFTAR_PESANAN
    Route::post('/buat_pesanan', 'App\Http\Controllers\PembeliController@buatpesanan')->middleware('auth','pembeli');
        #LANJUTPESANAN
        Route::get('/lanjutpesanan/{id_pesanan}', 'App\Http\Controllers\PembeliController@updatekeranjang')->middleware('auth','pembeli');
        #HAPUSPESANAN
        Route::get('/hapuspesanan/{id_pesanan}', 'App\Http\Controllers\PembeliController@hapuskeranjang')->middleware('auth','pembeli');
    Route::get('/daftar_pesanan_pembeli', 'App\Http\Controllers\PembeliController@indexdaftarpesanan')->middleware('auth','pembeli');
  

