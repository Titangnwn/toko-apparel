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
        $cart = session()->get('cart', []);

        $id = $request->id;

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $request->name,
                "price" => $request->price,
                "quantity" => 1,
                "image" => $request->image
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

            // Kurangi stok
            $product = Product::where('nama', $item['name'])->first();
            if ($product) {
                $product->decrement('stok', $item['quantity']);
            }

            // Hapus dari keranjang
            unset($cart[$id]);
            session()->put('cart', $cart);

            return redirect()->route('cart.index')->with('success', 'Produk berhasil dibayar!');
        }

        return redirect()->route('cart.index')->with('error', 'Produk tidak ditemukan.');
    }
}
