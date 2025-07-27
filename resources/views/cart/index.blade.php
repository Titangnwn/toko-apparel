@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold mb-6">Keranjang Belanja</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if(count($cartItems) > 0)
        <table class="w-full table-auto border border-gray-300 mb-6">
            <thead class="bg-yellow-100">
                <tr>
                    <th class="p-2 border">Produk</th>
                    <th class="p-2 border">Harga</th>
                    <th class="p-2 border">Jumlah</th>
                    <th class="p-2 border">Total</th>
                    <th class="p-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $grandTotal = 0; @endphp
                @foreach($cartItems as $id => $item)
                    @php
                        $total = $item['price'] * $item['quantity'];
                        $grandTotal += $total;
                    @endphp
                    <tr>
                        <td class="p-2 border flex items-center gap-3">
                            <img src="{{ $item['image'] }}" class="h-12 w-12 object-cover rounded">
                            {{ $item['name'] }}
                        </td>
                        <td class="p-2 border">Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                        <td class="p-2 border">{{ $item['quantity'] }}</td>
                        <td class="p-2 border">Rp {{ number_format($total, 0, ',', '.') }}</td>
                        <td class="p-2 border flex flex-col gap-2 text-center">
                            <!-- Tombol Hapus -->
                            <a href="{{ route('cart.remove', $id) }}"
                               onclick="return confirm('Yakin ingin menghapus item ini?')"
                               class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">
                                Hapus
                            </a>

                            <!-- Tombol Bayar -->
                            <a href="{{ route('cart.payOne', $id) }}"
                               onclick="return confirm('Bayar produk ini saja?')"
                               class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 text-sm">
                                Bayar
                            </a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3" class="p-2 border text-right font-bold">Total Bayar:</td>
                    <td class="p-2 border font-bold">Rp {{ number_format($grandTotal, 0, ',', '.') }}</td>
                    <td class="p-2 border"></td>
                </tr>
            </tbody>
        </table>
    @else
        <p class="text-gray-500">Keranjang Anda kosong.</p>
    @endif
</div>
@endsection
