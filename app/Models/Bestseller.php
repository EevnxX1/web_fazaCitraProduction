<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bestseller extends Model
{
    use HasFactory;

    public $table = "tbl_bestseller"; // Corrected the visibility to protected
    
    protected $fillable = [
        'id',
        'judul', 
        'img_bukuM',
        'penulis', 
        'halaman', 
        'nomer_isbn', 
        'sinopsis', 
        'harga', 
        'harga_coret',  
        'cover_buku',
        'img_review',     
    ];
}

