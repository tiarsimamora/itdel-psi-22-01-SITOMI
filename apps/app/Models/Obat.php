<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Obat extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = "obat";
    protected $primaryKey = 'id_obat';

    protected $fillable = [
        'id_pengguna',
        'nama_obat',
        'harga',
        'stok',
        'deskripsi',
        'efek_samping',
        'gambar',
    ];

    public function group()
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }
}
