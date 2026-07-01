<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produks';

    protected $fillable = ['nama', 'deskripsi', 'gambar', 'harga', 'stok'];
}
