<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;
    protected $table = 'donatur';

    protected $fillable = [
        'program',
        'nominal',
        'nama_donatur',
        'alamat',
        'telpon',
        'email',
        'pesan',
        'blog_id',
    ];
}