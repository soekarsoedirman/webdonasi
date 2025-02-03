<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;
    protected $table = 'donasi';

    protected $fillable = [
        'program',
        'nominal',
        'foto_bukti',
        'metode_pembayaran',
        'nama_donatur',
        'alamat',
        'telpon',
        'email',
        'pesan',
        'blog_id',
    ];
}