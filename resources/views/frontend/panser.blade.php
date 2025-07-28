<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enma Apparel</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">

@if(session('error') || session('success'))
    <div id="alert-box" class="fixed inset-0 flex justify-center items-center z-50">
        <div class="relative bg-white border px-6 py-4 rounded-lg shadow-lg max-w-md w-full text-center
                    {{ session('error') ? 'border-red-400 text-red-700' : 'border-green-400 text-green-700' }}">
            <strong>
                {{ session('error') ?? session('success') }}
            </strong>

            <!-- Tombol Tutup -->
            <button onclick="document.getElementById('alert-box').remove()"
                    class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-xl font-bold">
                &times;
            </button>
        </div>
    </div>
@endif



<!-- Navbar -->
<nav class="bg-gray-900 text-white fixed top-0 w-full z-50 animate__animated animate__fadeInDown">
    <div class="container mx-auto flex items-center justify-between px-4 py-4">
        <a class="flex items-center space-x-2" href="#">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-10 w-10 object-cover">
            <span class="text-lg font-bold animate__animated animate__pulse animate__infinite">Enma Apparel</span>
        </a>
        <ul class="flex space-x-6">
           <!-- Tombol Back -->
<li><a href="{{ route('index') }}" class="hover:text-gray-300 animate__animated animate__fadeIn">Back</a></li>
    </div>
</nav>

<!-- Daftar Produk -->
<section id="products" class="py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-center text-2xl font-bold mb-8">Daftar Produk</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
           <!-- Produk 1 -->
<div class="bg-white shadow-md rounded-md overflow-hidden transform hover:scale-105 transition-transform">
    <img src="{{ asset('assets/home.webp') }}" alt="Jersey 1" class="w-full h-78 object-cover">
    <div class="p-4 text-center">
        <h5 class="text-lg font-semibold">Jersey Panser Home 24/25</h5>
        <p class="text-gray-600">Rp 200.000</p>
       <form action="{{ route('cart.add') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="1">
    <input type="hidden" name="name" value="Jersey Panser Home 24/25">
    <input type="hidden" name="price" value="200000">
    <input type="hidden" name="image" value="home.webp">

    <button type="submit" class="mt-4 bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-6 py-2 rounded-full hover:from-indigo-600 hover:to-purple-700 transition-all duration-300 inline-flex items-center justify-center gap-2 shadow-lg">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 5m0 0h16m-16 0a1 1 0 001 1h14a1 1 0 001-1m-16 0a1 1 0 011-1" />
        </svg>
        Tambah ke Keranjang
    </button>
</form>

    </div>
</div>

            <!-- Produk 2 -->
            <div class="bg-white shadow-md rounded-md overflow-hidden transform hover:scale-105 transition-transform">
                <img src="{{ asset('assets/away.webp') }}" alt="Jersey 2" class="w-full h-78 object-cover">
                <div class="p-4 text-center">
                    <h5 class="text-lg font-semibold">Jersey Panser Away 24/25</h5>
                    <p class="text-gray-600">Rp 250.000</p>
                     <form action="{{ route('cart.add') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="2">
    <input type="hidden" name="name" value="Jersey Panser away 24/25">
    <input type="hidden" name="price" value="250000">
    <input type="hidden" name="image" value="away.webp">

    <button type="submit" class="mt-4 bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-6 py-2 rounded-full hover:from-indigo-600 hover:to-purple-700 transition-all duration-300 inline-flex items-center justify-center gap-2 shadow-lg">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 5m0 0h16m-16 0a1 1 0 001 1h14a1 1 0 001-1m-16 0a1 1 0 011-1" />
        </svg>
        Tambah ke Keranjang
    </button>
</form>

    </div>
</div>
           <!-- Produk 3 -->
<div class="bg-white shadow-md rounded-md overflow-hidden transform hover:scale-105 transition-transform">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('assets/speciall.jpg') }}" class="w-full h-78 object-cover" alt="Jersey Special 1">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/special.jpg') }}" class="w-full h-78 object-cover" alt="Jersey Special 2">
            </div>
        </div>
        <!-- Navigasi Swiper -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="p-4 text-center">
        <h5 class="text-lg font-semibold">Jersey Special dari Panser</h5>
        <p class="text-gray-600">Rp 200.000</p>
        <form action="{{ route('cart.add') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="3">
    <input type="hidden" name="name" value="Jersey special">
    <input type="hidden" name="price" value="200000">
    <input type="hidden" name="image" value="{{ asset('assets/special.webp') }}">

    <button type="submit" class="mt-4 bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-6 py-2 rounded-full hover:from-indigo-600 hover:to-purple-700 transition-all duration-300 inline-flex items-center justify-center gap-2 shadow-lg">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 5m0 0h16m-16 0a1 1 0 001 1h14a1 1 0 001-1m-16 0a1 1 0 011-1" />
        </svg>
        Tambah ke Keranjang
    </button>
</form>

    </div>
</div>

        </div>
    </div>
</section>

<script>
    var swipers = document.querySelectorAll('.swiper-container');
    swipers.forEach(swiperEl => {
        new Swiper(swiperEl, {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    });
</script>

<!-- Footer -->
<footer class="bg-white dark:bg-gray-900 w-full rounded-none shadow-sm">
    <div class="w-full p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/logo.png') }}" class="h-8" alt="logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                    Enma Apparel
                </span>
            </a>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
            &copy; 2025 <a href="#" class="hover:underline">Enma Apparel™</a>. All Rights Reserved.
        </span>
    </div>
</footer>

</body>
</html>