<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class DataPenjualan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public $table = "data_penjualan";
    protected $primaryKey = 'id_penjualan';

    protected $fillable = [
        'id_pengguna',
        'id_pesanan',
        'id_obat',
        'jumlah_obat',
        'total_harga',
    ];

    public function grouppesanan()
    {
        return $this->belongsTo(Obat::class, 'id_pesanan');
    }
    public function grouppenjualan()
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }
}
