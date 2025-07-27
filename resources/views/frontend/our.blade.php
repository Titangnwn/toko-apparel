<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enma Apparel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">                    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100">

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
            
            <!-- Template Produk dengan Slider -->

             <!-- Produk 1 -->
<div class="bg-white shadow-md rounded-md overflow-hidden transform hover:scale-105 transition-transform">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{ asset('assets/jersey1.jpg') }}" class="w-full h-78 object-cover"></div>
            <div class="swiper-slide"><img src="jersey1_2.jpg" class="w-full h-64 object-cover"></div>
            <div class="swiper-slide"><img src="jersey1_3.jpg" class="w-full h-64 object-cover"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="p-4 text-center">
        <h5 class="text-lg font-semibold">Jersey template dari kami</h5>
        <p class="text-gray-600">Rp 100.000</p>
        <a href="panserhome.html" class="mt-4 bg-gradient-to-r from-green-400 to-blue-500 text-white px-6 py-2 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 inline-flex items-center justify-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 5m0 0h16m-16 0a1 1 0 001 1h14a1 1 0 001-1m-16 0a1 1 0 011-1" />
            </svg>
            Beli Sekarang
        </a>
    </div>
</div>


            <!-- Produk 2 -->
            <div class="bg-white shadow-md rounded-md overflow-hidden transform hover:scale-105 transition-transform">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('assets/jersey 2.jpg') }}" class="w-full h-78 object-cover"></div>
                        <div class="swiper-slide"><img src="jersey2_2.jpg" class="w-full h-64 object-cover"></div>
                        <div class="swiper-slide"><img src="jersey2_3.jpg" class="w-full h-64 object-cover"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="p-4 text-center">
                    <h5 class="text-lg font-semibold">Jersey template dari kami</h5>
                    <p class="text-gray-600">Rp 100.000</p>
                    <a href="panserhome.html" class="mt-4 bg-gradient-to-r from-green-400 to-blue-500 text-white px-6 py-2 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 inline-flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 5m0 0h16m-16 0a1 1 0 001 1h14a1 1 0 001-1m-16 0a1 1 0 011-1" />
                        </svg>
                        Beli Sekarang
                    </a>
                </div>
            </div>
            
             <!-- Produk 3 -->
             <div class="bg-white shadow-md rounded-md overflow-hidden transform hover:scale-105 transition-transform">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('assets/jersey 3.png') }}" class="w-full h-78 object-cover"></div>
                        <div class="swiper-slide"><img src="jersey1_2.jpg" class="w-full h-64 object-cover"></div>
                        <div class="swiper-slide"><img src="jersey1_3.jpg" class="w-full h-64 object-cover"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="p-4 text-center">
                    <h5 class="text-lg font-semibold">Jersey template dari kami</h5>
                    <p class="text-gray-600">Rp 200.000</p>
                    <a href="panserhome.html" class="mt-4 bg-gradient-to-r from-green-400 to-blue-500 text-white px-6 py-2 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 inline-flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 5m0 0h16m-16 0a1 1 0 001 1h14a1 1 0 001-1m-16 0a1 1 0 011-1" />
                        </svg>
                        Beli Sekarang
                    </a>
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
