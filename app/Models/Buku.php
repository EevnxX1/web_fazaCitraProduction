<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    public $table = "tbl_buku"; // Corrected the visibility to protected
    
    protected $fillable = [
        'id','judul', 'penulis', 'halaman', 'harga_coret', 'harga', 'nomer_isbn', 'sinopsis', 'photo', 'thumbnail'
    ];
}

