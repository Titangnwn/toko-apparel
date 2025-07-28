@extends('layouts.app')
<link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
@section('content')
<div class="container mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold mb-6">Data Transaksi</h1>

    <table class="w-full table-auto border border-gray-300 mb-6">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2 border">Produk</th>
                <th class="p-2 border">Harga</th>
                <th class="p-2 border">Jumlah</th>
                <th class="p-2 border">Total</th>
                <th class="p-2 border">Email</th>
                <th class="p-2 border">Waktu</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $item)
            <tr>
                <td class="p-2 border flex items-center gap-2">
                    <img src="{{ $item->image }}" class="h-10 w-10 object-cover rounded">
                    {{ $item->product_name }}
                </td>
                <td class="p-2 border">Rp {{ number_format($item->price) }}</td>
                <td class="p-2 border">{{ $item->quantity }}</td>
                <td class="p-2 border">Rp {{ number_format($item->total) }}</td>
                <td class="p-2 border">{{ $item->user_email }}</td>
                <td class="p-2 border">{{ $item->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="p-4 text-center text-gray-500">Belum ada transaksi.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
