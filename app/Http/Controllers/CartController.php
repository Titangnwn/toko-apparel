<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);
        return view('cart.index', compact('cartItems'));
    }

    public function addToCart(Request $request)
{
    $product = Product::find($request->id);

    if (!$product) {
        return redirect()->back()->with('error', 'Produk tidak ditemukan.');
    }

    if ($product->stok < 1) {
        return redirect()->back()->with('error', 'Stok produk habis!');
    }

    $cart = session()->get('cart', []);
    $id = $product->id;

    if (isset($cart[$id])) {
        if ($product->stok <= $cart[$id]['quantity']) {
            return redirect()->back()->with('error', 'Jumlah di keranjang melebihi stok tersedia.');
        }
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            "name" => $product->nama,
            "price" => $product->harga,
            "quantity" => 1,
            "image" => $request->input('image'), // simpan nama file
        ];
    }

    session()->put('cart', $cart);

    return redirect()->route('cart.index')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
}



    public function remove($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->route('cart.index')->with('success', 'Produk berhasil dihapus dari keranjang!');
    }

    public function checkout()
    {
        session()->forget('cart');
        return redirect()->route('cart.index')->with('success', 'Pembayaran berhasil! Terima kasih sudah berbelanja.');
    }

    public function payOne($id)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $item = $cart[$id];

        // Simpan transaksi
        Transaction::create([
            'product_name' => $item['name'],
            'price' => $item['price'],
            'quantity' => $item['quantity'],
            'total' => $item['price'] * $item['quantity'],
            'image' => $item['image'],
            'user_email' => auth()->check() ? auth()->user()->email : 'guest',
        ]);

        // Kurangi stok berdasarkan ID
        $product = Product::find($id);
    if ($product) {
        if ($product->stok >= $item['quantity']) {
        $product->decrement('stok', $item['quantity']);
    } else {
        return redirect()->route('cart.index')->with('error', 'Stok produk tidak mencukupi.');
    }
}


        // Hapus dari keranjang
        unset($cart[$id]);
        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Produk berhasil dibayar!');
    }

    return redirect()->route('cart.index')->with('error', 'Produk tidak ditemukan.');
}

}
