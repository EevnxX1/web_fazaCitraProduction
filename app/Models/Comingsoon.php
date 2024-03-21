<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comingsoon extends Model
{
    use HasFactory;

    public $table = "tbl_comingsoon"; // Corrected the visibility to protected
    
    protected $fillable = [
        'id',
        'img_buku',
        'judul', 
        'penulis', 
        'penerbit', 
        'halaman', 
        'ukuran_buku', 
        'laminasi', 
        'sinopsis', 
        'link_tt',  
        'link_sp',
        'link_pb',  
        'link_tokped',         
    ];
}

