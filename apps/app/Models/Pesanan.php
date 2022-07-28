<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pesanan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = "pesanan";
    protected $primaryKey = 'id_pesanan';

    protected $fillable = [
        'id_obat',
        'id_pengguna',
        'nama_obat',
        'jumlah_obat',
        'status',
    ];

    public function group()
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }

    public function groupuser()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }

}
