<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Enmma Apparrel
  </title>
  <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
  <script src="https://cdn.tailwindcss.com">
  </script>
  <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js">
  </script>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
     html {
        scroll-behavior: smooth;
    }
    body {
        font-family: 'Inter', sans-serif;
    }


        .btn-animate {
            transition: all 0.3s ease-in-out;
            display: inline-block;
            text-align: center;
        }
        .btn-animate:hover {
            background-color: black;
            color: white;
            transform: scale(1.1);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
         /* Navbar Animations */
         .navbar {
            transition: all 0.4s ease-in-out;
        }
        .navbar ul li a {
            transition: color 0.3s ease-in-out, transform 0.3s ease-in-out;
        }
        .navbar ul li a:hover {
            color: #fbbf24;
            transform: scale(1.1);
        }
  </style>
 </head>
 <body class="bg-white-500">
 <!-- Navbar -->
<nav class="navbar bg-white text-black fixed top-0 w-full z-50 py-4 shadow" id="navbar">
    <div class="container mx-auto flex items-center justify-between px-4">
        <!-- Profil Kiri -->
        <div class="flex items-center space-x-4">
            @guest
                <!-- Jika belum login, arahkan ke login -->
                <a href="{{ route('login') }}">
                    <img src="{{ asset('assets/OIP.jpeg') }}" class="h-10 w-10 rounded-full object-cover hover:opacity-80 transition-opacity duration-300" alt="Profil">
                </a>
            @endguest

            @auth
                <!-- Jika sudah login, arahkan ke halaman profil -->
                <a href="{{ route('profile.show') }}">
                    <img src="{{ asset('assets/OIP.jpeg') }}" class="h-10 w-10 rounded-full object-cover hover:opacity-80 transition-opacity duration-300" alt="Profil">
                </a>
            @endauth

            <!-- Logo -->
            <a class="flex items-center space-x-2 group" href="#">
                <img alt="Logo" class="h-10 w-10 object-cover" src="{{ asset('assets/logo.png') }}">
                <span class="text-lg font-bold text-yellow-600 transition-colors duration-500 group-hover:text-white group-active:text-white">
                    Enma Apparel
                </span>
            </a>
        </div>
        <!-- Hamburger Menu Button -->
        <button class="block lg:hidden focus:outline-none" id="menu-toggle">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
        <!-- Menu (Desktop) -->
        <ul class="hidden lg:flex space-x-6" id="menu">
            <li>
                <a class="relative group text-black transition" href="#produk">
                    <span class="pb-1 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-yellow-500 after:transition-all after:duration-300 group-hover:after:w-full">
                        Produk
                    </span>
                </a>
            </li>
            <li>
                <a class="relative group text-black transition" href="#Tentang">
                    <span class="pb-1 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-yellow-500 after:transition-all after:duration-300 group-hover:after:w-full">
                        Tentang
                    </span>
                </a>
            </li>
            <li>
                <a class="relative group text-black transition" href="#contact">
                    <span class="pb-1 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-yellow-500 after:transition-all after:duration-300 group-hover:after:w-full">
                        Kontak
                    </span>
                </a>
            </li>
<!-- Tambah tombol keranjang -->
<li>
    <a href="{{ route('cart.index') }}" class="relative group text-black transition flex items-center">
        <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 7M7 13l-1.3 5.5a1 1 0 001 1.5H19a1 1 0 001-1.5L17 13" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="pb-1 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-yellow-500 after:transition-all after:duration-300 group-hover:after:w-full">
            Keranjang
        </span>
    </a>
</li>
</ul>
    </div>
    <!-- Mobile Menu (Toggle On) -->
    <ul class="lg:hidden hidden flex-col px-6 pb-4 space-y-4" id="mobile-menu">
        <li>
            <a class="relative group block text-black" href="#produk">
                <span class="pb-1 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-yellow-500 after:transition-all after:duration-300 group-hover:after:w-full">
                    Produk
                </span>
            </a>
        </li>
        <li>
            <a class="relative group block text-black" href="#Tentang">
                <span class="pb-1 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-yellow-500 after:transition-all after:duration-300 group-hover:after:w-full">
                    Tentang
                </span>
            </a>
        </li>
        <li>
            <a class="relative group block text-black" href="#contact">
                <span class="pb-1 after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-yellow-500 after:transition-all after:duration-300 group-hover:after:w-full">
                    Kontak
                </span>
            </a>
        </li>
    </ul>
</nav>

<!-- JS Toggle Script -->
<script>
    const toggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

<!-- JavaScript untuk mengubah warna teks saat di scroll -->
<script>
    window.addEventListener('scroll', () => {
        const brandText = document.getElementById('brand-text');
        if (window.scrollY > 50) {
            // Saat scroll turun
            brandText.classList.remove('text-black');
            brandText.classList.add('text-yellow-500'); 
        } else {
            // Saat kembali ke atas
            brandText.classList.remove('text-yellow-500');
            brandText.classList.add('text-black');
        }
    });
</script>

<!-- Add this padding to ensure the content doesn't go behind the navbar -->
<div class="pt-20"></div>

<style>
    .carousel-item img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        max-width: 100%;
        max-height: 100%;
    }
    .carousel-item {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }
    .carousel-button {
        background-color: black !important;
    }
</style>

<div class="relative w-full" data-carousel="slide" id="default-carousel">
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <div class="duration-700 ease-in-out carousel-item" data-carousel-item="">
            <img alt="Logo Image" class="absolute block object-cover" src="{{ asset('assets/logo.png') }}"/>
        </div>
        <div class="hidden duration-700 ease-in-out carousel-item" data-carousel-item="">
            <img alt="Bandung Image" class="absolute block object-cover" src="{{ asset('assets/bandung.jpg') }}"/>
        </div>
        <div class="hidden duration-700 ease-in-out carousel-item" data-carousel-item="">
            <img alt="Bola Image" class="absolute block object-cover" src="{{ asset('assets/ennma.png') }}"/>
        </div>
    </div>
</div>

   <!-- Slider indicators -->
   <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
    <button aria-current="true" aria-label="Slide 1" class="w-3 h-3 rounded-full" data-carousel-slide-to="0" type="button">
    </button>
    <button aria-current="false" aria-label="Slide 2" class="w-3 h-3 rounded-full" data-carousel-slide-to="1" type="button">
    </button>
    <button aria-current="false" aria-label="Slide 3" class="w-3 h-3 rounded-full" data-carousel-slide-to="2" type="button">
    </button>
   </div>
   <!-- Slider controls -->
   <button class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="" type="button">
    <span class="carousel-button inline-flex items-center justify-center w-10 h-10 rounded-full group-hover:bg-black/50 group-focus:ring-4 group-focus:ring-white">
     <svg aria-hidden="true" class="w-4 h-4 text-white" fill="none" viewbox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
      <path d="M5 1 1 5l4 4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
      </path>
     </svg>
     <span class="sr-only">
      Previous
     </span>
    </span>
   </button>
   <button class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="" type="button">
    <span class="carousel-button inline-flex items-center justify-center w-10 h-10 rounded-full group-hover:bg-black/50 group-focus:ring-4 group-focus:ring-white">
     <svg aria-hidden="true" class="w-4 h-4 text-white" fill="none" viewbox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 9l4-4-4-4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
      </path>
     </svg>
     <span class="sr-only">
      Next
     </span>
    </span>
   </button>
  </div>
  <!-- Tentang Kami -->
  <section class="container mx-auto px-4 py-16 bg-white text-black" id="Tentang">
   <div class="relative w-full overflow-hidden" data-carousel="slide" id="about-carousel">
    <!-- Slide Container -->
    <div class="flex transition-transform duration-700 ease-in-out w-full" id="carousel-inner">
     <!-- Slide 1 -->
     <div class="min-w-full carousel-slide flex flex-row gap-4 md:gap-8 items-stretch p-4">
      <div class="w-1/2 h-64 md:h-96">
       <img alt="Store Image 1" class="rounded-lg shadow-lg w-full h-full object-cover" onerror="this.style.display='block'; 
       this.src='default.png';" src="{{ asset('assets/logo.png') }}"/>
      </div>
      <div class="w-1/2 flex flex-col justify-center text-left">
       <h2 class="text-xl md:text-3xl font-bold text-gray-900 mb-4">
        Enma Apparel
       </h2>
       <p class="text-sm md:text-base text-gray-700 mb-4">
        Enma Apparel adalah toko yang menyediakan berbagai jersey sepak bola dengan kualitas terbaik.
            Kami berkomitmen untuk memberikan produk berkualitas dengan harga terjangkau bagi para pecinta sepak bola.
       </p>
      </div>
     </div>
     <!-- Slide 2 -->
     <div class="min-w-full carousel-slide flex flex-row gap-4 md:gap-8 items-stretch p-4">
      <div class="w-1/2 h-64 md:h-96">
       <img alt="Store Image 2" class="rounded-lg shadow-lg w-full h-full object-cover" onerror="this.style.display='block'; 
       this.src='default.png';" src="{{ asset('assets/x.png') }}"/>
      </div>
      <div class="w-1/2 flex flex-col justify-center text-left">
       <h2 class="text-xl md:text-3xl font-bold text-gray-900 mb-4">
        ENMA X PANSER
       </h2>
       <p class="text-sm md:text-base text-gray-700">
        Kami sudah menjalin kerja sama dengan klub dari Bandung dan telah merilis jersey kerja sama dengan format Home dan 
        Away serta merilis jersey spesial dari mereka.
       </p>
      </div>
     </div>
     <!-- Slide 3 -->
     <div class="min-w-full carousel-slide flex flex-row gap-4 md:gap-8 items-stretch p-4">
      <div class="w-1/2 h-[300px] md:h-96">
       <img alt="Store Image 3" class="rounded-lg shadow-lg w-full h-full object-cover" onerror="this.style.display='block'; 
       this.src='default.png';" src="{{ asset('assets/loba-harkoss.png') }}"/>
      </div>
      <div class="w-1/2 flex flex-col justify-center text-left">
       <h2 class="text-xl md:text-3xl font-bold text-gray-900 mb-4">
        ENMA X LOBA HARKOS
       </h2>
       <p class="text-sm md:text-base text-gray-700">
        Kami juga mencoba menjalin kolaborasi dengan salah satu komunitas di Bandung yang memiliki fokus pada jejepangan,
            dan kami memberikan jersey tersebut dengan variasi ala nuansa Jepang yang asli .
       </p>
      </div>
     </div>
    </div>
    <!-- Navigation Buttons -->
    <button class="absolute top-1/2 left-2 z-30 transform -translate-y-1/2 px-3 py-2 bg-black bg-opacity-70 text-white rounded-full hover:bg-opacity-90" id="prevBtn" type="button">
     ❮
    </button>
    <button class="absolute top-1/2 right-2 z-30 transform -translate-y-1/2 px-3 py-2 bg-black bg-opacity-70 text-white rounded-full hover:bg-opacity-90" id="nextBtn" type="button">
     ❯
    </button>
    <!-- Dot Indicators -->
    <div class="flex justify-center gap-2 mt-4" id="carousel-indicators">
     <button class="w-3 h-3 rounded-full bg-gray-400" data-index="0">
     </button>
     <button class="w-3 h-3 rounded-full bg-gray-300" data-index="1">
     </button>
     <button class="w-3 h-3 rounded-full bg-gray-300" data-index="2">
     </button>
    </div>
   </div>
  </section>
  <!-- CSS Tambahan -->
  <style>
   img {
    max-width: 100%;
    display: block;
    object-fit: cover;
  }
  </style>
  <style>
   .carousel-slide {
    opacity: 0;
    transform: translateX(50px);
    transition: opacity 0.5s ease, transform 0.5s ease;
  }

  .carousel-slide.active {
    opacity: 1;
    transform: translateX(0);
  }
  </style>
  <!-- JavaScript Carousel -->
  <script>
   const carousel = document.getElementById('carousel-inner');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const indicators = document.querySelectorAll('#carousel-indicators button');
  const slides = document.querySelectorAll('.carousel-slide');
  let index = 0;
  const totalSlides = slides.length;

  function updateCarousel() {
    carousel.style.transform = `translateX(-${index * 100}%)`;

    slides.forEach((slide, i) => {
      if (i === index) {
        slide.classList.add('active');
      } else {
        slide.classList.remove('active');
      }
    });

    indicators.forEach((dot, i) => {
      dot.classList.remove('bg-gray-400');
      dot.classList.add('bg-gray-300');
      if (i === index) {
        dot.classList.remove('bg-gray-300');
        dot.classList.add('bg-gray-400');
      }
    });
  }

  nextBtn.addEventListener('click', () => {
    index = (index + 1) % totalSlides;
    updateCarousel();
  });

  prevBtn.addEventListener('click', () => {
    index = (index - 1 + totalSlides) % totalSlides;
    updateCarousel();
  });

  indicators.forEach((dot) => {
    dot.addEventListener('click', () => {
      index = parseInt(dot.getAttribute('data-index'));
      updateCarousel();
    });
  });

  carousel.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
  });

  carousel.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    if (touchStartX - touchEndX > 50) {
      index = (index + 1) % totalSlides;
    } else if (touchEndX - touchStartX > 50) {
      index = (index - 1 + totalSlides) % totalSlides;
    }
    updateCarousel();
  });

  updateCarousel(); // Init
  </script>

  
 <!-- Daftar Produk -->
<section id="produk" class="container mx-auto px-4 py-16 bg-grey text-black">
    <h2 class="text-3xl font-bold text-center mb-8">Daftar Produk</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        <!-- Produk 1 -->
        <div class="relative overflow-hidden rounded-lg shadow-lg">
            <img src="{{ asset('assets/x.png') }}" alt="Jersey 1" class="w-full h-70 object-cover">
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                <a href="{{ route('panser') }}" class="bg-white text-black px-3 py-1.5 rounded-md font-semibold text-sm 
                btn-animate">Panser →</a>
            </div>
        </div>
        <!-- Produk 2 -->
        <div class="relative overflow-hidden rounded-lg shadow-lg">
            <img src="{{ asset('assets/logo.png') }}" alt="Jersey 2" class="w-full h-70 object-cover">
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                <a href="{{ route('our') }}" class="bg-white text-black px-3 py-1.5 rounded-md font-semibold text-sm 
                btn-animate">Our →</a>
            </div>
        </div>
        <!-- Produk 3 -->
        <div class="relative overflow-hidden rounded-lg shadow-lg">
            <img src="{{ asset('assets/custom.jpg') }}" alt="Jersey 3" class="w-full h-70 object-cover">
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                <a href="{{ route('custom') }}" class="bg-white text-black px-3 py-1.5 rounded-md font-semibold text-sm 
                btn-animate">Custom →</a>
            </div>
        </div>
        <!-- Produk 4 -->
        <div class="relative overflow-hidden rounded-lg shadow-lg">
            <img src="{{ asset('assets/loba-harkos.png') }}" alt="Jersey 4" class="w-full h-70 object-cover">
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                <a href="{{ route('lh') }}" class="bg-white text-black px-3 py-1.5 rounded-md font-semibold text-sm 
                btn-animate">LH →</a>
            </div>
        </div>
    </div>
</section>


  <!-- Kontak Section -->
  <section class="py-10 bg-white" id="contact">
   <div class="container mx-auto px-4">
    <h2 class="text-center text-2xl font-bold mb-8">
     Kontak Kami
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
     <div class="flex flex-col items-center text-center bg-gray-100 p-6 rounded-lg shadow-md">
      <img alt="Instagram" class="w-12 h-12 mb-4" src="{{ asset('assets/Ig.png') }}"/>
      <h3 class="text-lg font-semibold">
       Instagram
      </h3>
      <p>
       @enma.Apparel
      </p>
      <a class="text-blue-500 mt-2" href="https://www.instagram.com/enma.apparel?igsh=MTh6Nnp5bTJ5ZzQxdw==">
       Follow Kami
      </a>
     </div>
     <div class="flex flex-col items-center text-center bg-gray-100 p-6 rounded-lg shadow-md">
      <img alt="WhatsApp" class="w-12 h-12 mb-4" src="{{ asset('assets/wa.png') }}"/>
      <h3 class="text-lg font-semibold">
       WhatsApp
      </h3>
      <p>
       +62 815-729-2066
      </p>
      <a class="text-green-500 mt-2" href="https://wa.me/6281572962066">
       Chat Kami
      </a>
     </div>
     <div class="flex flex-col items-center text-center bg-gray-100 p-6 rounded-lg shadow-md">
      <img alt="Email" class="w-12 h-12 mb-4" src="{{ asset('assets/email.jpeg') }}"/>
      <h3 class="text-lg font-semibold">
       Email
      </h3>
      <p>
       enmaapparel@gmail.com
      </p>
      <a class="text-red-500 mt-2" href="mailto:contact@enma-apparel.com">
       Email Kami
      </a>
     </div>
    </div>
   </div>
  </section>
  <!-- Footer -->
  <footer class="bg-white dark:bg-gray-900 w-full rounded-none shadow-sm">
   <div class="w-full p-4 md:py-8">
    <div class="sm:flex sm:items-center sm:justify-between">
     <a flex="" href="logo.png class=" items-center="" mb-4="" rtl:space-x-reverse"="" sm:mb-0="" space-x-3="">
      <img alt="logo" class="h-8" src="{{ asset('assets/logo.png') }}">
       <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
        Enma Apparel
       </span>
      </img>
     </a>
     <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
      <li>
       <a class="hover:underline me-4 md:me-6" href="#Tentang">
        About
       </a>
      </li>
      <a class="hover:underline me-4 md:me-6" href="#">
       Privacy Policy
      </a>
      <a class="hover:underline me-4 md:me-6" href="#">
       Licensing
      </a>
      <a class="hover:underline me-4 md:me-6" href="#contact">
       Contact
      </a>
     </ul>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"/>
    <span class="block text-sm text-grey-500 sm:text-center dark:text-gray-400">
     &copy; 2025
     <a class="hover:underline" href="Enma Apparel">
      Enma Apparel&trade;
     </a>
     . All Rights Reserved.
    </span>
   </div>
  </footer>
 </body>
</html>
