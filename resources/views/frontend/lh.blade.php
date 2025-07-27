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
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<<nav class="bg-gray-900 text-white fixed top-0 w-full z-50 animate__animated animate__fadeInDown">
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

<!-- Produk -->
<section id="product" class="py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-center text-2xl font-bold mb-8">Detail Produk</h2>
        <div class="max-w-4xl mx-auto bg-white shadow-md rounded-md overflow-hidden flex flex-col md:flex-row">
           <!-- Gambar Produk -->
<div class="md:w-1/2">
    <div class="swiper mySwiper h-full">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('assets/ありがとう @loba_harkos (1).png') }}" class="w-full h-full object-cover" alt="Jersey 1">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/ありがとう @loba_harkos (2).png') }}" class="w-full h-full object-cover" alt="Jersey 2">
            </div>
        </div>
        <!-- Navigasi panah (opsional) -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Pagination (opsional) -->
        <div class="swiper-pagination"></div>
    </div>
</div>

            <!-- Deskripsi Produk -->
            <div class="md:w-1/2 p-6 flex flex-col justify-center">
                <h5 class="text-lg font-semibold">Jersey LH</h5>
                <p class="text-gray-600">Rp 125.000</p>
                <p class="mt-2 text-gray-500">Dengan memadukan Desain jepang yang cocok dengan komunitas tersebut dan menambahkan sedikit nostalgia dari font yang kita pakai dari anime anime tahun 90 an.
                <p class="mt-2 text-grey-500">Jersey Kolaborasi bersama LH.</p>   
                </p>
                <div class="mt-4">
                    <label for="size" class="block text-sm font-medium text-gray-700">Pilih Ukuran:</label>
                    <select id="size" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    </select>
                </div>
                <a href="#" class="mt-4 bg-blue-500 text-black px-4 py-2 rounded flex items-center justify-center gap-2 hover:bg-blue-400 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 24 24"><path d="M7 18c-1.104 0-1.99.896-1.99 2S5.896 22 7 22s2-.896 2-2-.896-2-2-2zm0 2zM17 18c-1.104 0-1.99.896-1.99 2S15.896 22 17 22s2-.896 2-2-.896-2-2-2zm0 2zM7.132 14.271l.725-1.45h8.532l.703-1.406H8.56l-.879-1.758H20v-2H7.234l-.729-1.454L5 3H2v2h2l3.6 7.59-1.35 2.7c-.16.32-.25.67-.25 1.03C6 17.328 6.672 18 7.5 18H19v-2H7.132z"/></svg>
                    Beli Sekarang
                </a>
                
            </div>
        </div>
    </div>
</section>

<script>
    const swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        centeredSlides: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        effect: "slide",
        speed: 600,
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