<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;


class Transaction extends Model
{
    use HasFactory;

    // ⬇️ Tambahkan kolom yang bisa diisi massal (create/update)
    protected $fillable = [
        'product_name',
        'price',
        'quantity',
        'total',
        'image',
        'user_email'
    ];
}
