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
                <img src="{{ asset('assets/custom.jpg') }}" class="w-full h-full object-cover" alt="Jersey Special">
            </div>
            <!-- Deskripsi Produk -->
            <div class="md:w-1/2 p-6 flex flex-col justify-center">
                <h5 class="text-lg font-semibold">Jersey custom</h5>
                <p class="text-gray-600">Rp 125.000</p>
                <p class="mt-2 text-gray-500">Cara pesesannya dengan konfirmasi dahulu kepada kita melalui WA lalu diskusi bila cocok lalu balik lagi ke menu dan pilih sesuai ukuran baju lalu CO dan tambah kan deskripsi dengan NO yang kita akan kasih.
                <p class="mt-2 text-grey-500">KREASIKAN JERSEY SESUKA DAN SEMAU MU DISINI.</p>   
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
                <a href="https://wa.me/62882116532119" target="_blank" class="mt-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 inline-flex items-center justify-center gap-2">
                    <img src="assets/wa.png" class="h-5 w-5 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.372 0 0 5.373 0 12c0 2.121.553 4.11 1.514 5.842L0 24l6.336-1.66A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zM12 22c-1.693 0-3.287-.395-4.711-1.098l-.34-.166-3.77.988 1.003-3.672-.221-.354C3.395 16.287 3 14.693 3 13c0-4.963 4.038-9 9-9s9 4.037 9 9-4.038 9-9 9zm4.486-6.572l-1.971-.942c-.265-.126-.577-.067-.781.138l-.71.728a.554.554 0 01-.699.091c-.879-.55-1.62-1.291-2.17-2.17a.554.554 0 01.092-.699l.728-.71a.59.59 0 00.138-.781l-.942-1.971a.59.59 0 00-.716-.295c-.774.252-1.62.884-1.62 2.207 0 2.172 2.418 4.59 4.59 4.59 1.323 0 1.955-.846 2.207-1.62a.59.59 0 00-.295-.716z"/></svg>
                    Beli via WhatsApp
                </a>
                
                
            </div>
        </div>
    </div>
</section>



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