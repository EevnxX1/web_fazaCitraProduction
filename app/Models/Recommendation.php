<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    public $table = "tbl_recommendation"; // Corrected the visibility to protected
    
    protected $fillable = [
        'id',
        'judul', 
        'img_buku',
        'penulis', 
        'halaman', 
        'nomer_isbn', 
        'sinopsis', 
        'harga', 
        'harga_coret',  
        'img_review',     
    ];
}

