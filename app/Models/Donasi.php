<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'nomor_hp',
        'berat',
        'pilihan_pengiriman',
    ];
}
