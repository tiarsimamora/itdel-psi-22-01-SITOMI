<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Konsultasi extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = "konsultasi";
    protected $primaryKey = 'id_konsultasi';

    protected $fillable = [
        'id_pengguna',
        'isi_pesan',
        'isi_balasan',
    ];

    public function group()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }
}
