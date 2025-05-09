<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    use HasFactory;
    protected $table = 'pesan';

    protected $fillable = [
        'author',
        'blog_id',
        'content',
    ];
}
