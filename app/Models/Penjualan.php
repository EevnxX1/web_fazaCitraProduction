<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    public $table = 'tbl_viewpenjualan';

    protected $fillable = [
        'id',
        'judul',
        'nama',
        'hp',
        'alamat',
        'tgl_beli',
        'harga',
        'qty',
        'payment',
        'total'
    ];
}
