<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        Produk::create([
            'nama' => 'Jersey panser home',
            'deskripsi' => 'Bahan 3D Emboss adem dan nyaman untuk olahraga.',
            'harga' => 200000,
            'stok' => 2,
            'gambar' => null,
        ]);

        Produk::create([
            'nama' => 'jersey panser away',
            'deskripsi' => 'Bahan 3D Emboss adem dan nyaman untuk olahraga',
            'harga' => 200000,
            'stok' => 5,
            'gambar' => null,
        ]);
    }
}
