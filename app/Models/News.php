<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public $table = "tbl_news"; // Corrected the visibility to protected
    
    protected $fillable = [
        'id',
        'img_buku',
        'judul', 
        'tanggal', 
        'paragraf1', 
        'isi', 
    ];
}

