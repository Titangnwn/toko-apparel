<!DOCTYPE html>
<html lang="id">
 <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Enma Apparel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
  <script>
   tailwind.config = {
    theme: {
     extend: {
      colors: {
       brand: {
        50: '#fff7df',
        100: '#fbe8b1',
        500: '#f59e0b',
        600: '#d97706',
        900: '#0f172a',
       },
      },
     },
    },
   };
  </script>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
   html {
    scroll-behavior: smooth;
   }
   body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background: #f8fafc;
    color: #0f172a;
   }
   .btn-animate {
    transition: all 0.25s ease-in-out;
   }
   .btn-animate:hover {
    transform: translateY(-2px) scale(1.02);
   }
   .hero-glass {
    background: rgba(15, 23, 42, 0.72);
    backdrop-filter: blur(18px);
    border: 1px solid rgba(255, 255, 255, 0.12);
   }
   .section-card {
    transition: transform 0.25s ease, box-shadow 0.25s ease;
   }
   .section-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 40px rgba(15, 23, 42, 0.12);
   }
   .hero-banner {
    background-image: linear-gradient(180deg, rgba(15, 23, 42, 0.75), rgba(15, 23, 42, 0.15)), url('{{ asset('assets/bandung.jpg') }}');
    background-size: cover;
    background-position: center;
   }
  </style>
 </head>
 <body>
  <nav class="fixed inset-x-0 top-0 z-50 bg-white/95 backdrop-blur-lg border-b border-slate-200 shadow-sm">
   <div class="container mx-auto flex items-center justify-between px-4 py-4 lg:px-6">
    <a href="#" class="flex items-center gap-3">
     <img src="{{ asset('assets/logo.png') }}" alt="Enma Apparel" class="h-10 w-10 rounded-full object-cover" />
     <span class="text-xl font-semibold text-slate-900">Enma Apparel</span>
    </a>
    <div class="hidden lg:flex items-center gap-8 text-sm font-medium text-slate-700">
     <a href="#produk" class="transition hover:text-brand-600">Produk</a>
     <a href="#Tentang" class="transition hover:text-brand-600">Tentang</a>
     <a href="#contact" class="transition hover:text-brand-600">Kontak</a>
     <a href="{{ route('cart.index') }}" class="inline-flex items-center gap-2 rounded-full border border-slate-300 bg-white px-4 py-2 text-slate-900 transition hover:border-brand-500 hover:bg-brand-50">
      <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
       <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 7M7 13l-1.3 5.5a1 1 0 001 1.5H19a1 1 0 001-1.5L17 13" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      Keranjang
     </a>
    </div>
    <button id="menu-toggle" class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-900 transition hover:border-brand-500 lg:hidden">
     <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round" />
     </svg>
    </button>
   </div>
   <div id="mobile-menu" class="hidden border-t border-slate-200 bg-white/95 px-4 pb-6 lg:hidden">
    <div class="flex flex-col gap-4 py-4 text-slate-700">
     <a href="#produk" class="transition hover:text-brand-600">Produk</a>
     <a href="#Tentang" class="transition hover:text-brand-600">Tentang</a>
     <a href="#contact" class="transition hover:text-brand-600">Kontak</a>
     <a href="{{ route('cart.index') }}" class="inline-flex items-center gap-2 rounded-full border border-slate-300 bg-brand-50 px-4 py-2 text-slate-900 transition hover:border-brand-500">
      Keranjang
     </a>
    </div>
   </div>
  </nav>

  <main class="pt-24">
   <section class="hero-banner relative overflow-hidden py-24 text-white">
    <div class="absolute inset-0 bg-slate-950/60"></div>
    <div class="container mx-auto relative px-4 lg:px-6">
     <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
      <div class="max-w-2xl">
       <p class="mb-4 inline-flex rounded-full bg-brand-600/90 px-4 py-2 text-sm font-semibold uppercase tracking-[0.16em] text-white shadow-lg shadow-brand-500/20">
        Jersey Olahraga Premium
       </p>
       <h1 class="text-4xl font-bold leading-tight sm:text-5xl lg:text-6xl">
        Enma Apparel<br />
        Toko Jersey Sporty dan Custom Berkualitas
       </h1>
       <p class="mt-6 max-w-xl text-base text-slate-100 sm:text-lg">
        Temukan koleksi jersey sepak bola, basket, dan olahraga lainnya dengan desain modern, bahan nyaman, dan detail eksklusif. Cocok untuk bermain, komunitas, atau tampil beda di lapangan.
       </p>
       <div class="mt-10 flex flex-col gap-4 sm:flex-row sm:items-center">
        <a href="#produk" class="btn-animate inline-flex items-center justify-center rounded-full bg-brand-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-brand-500/20 transition hover:bg-brand-700">
         Lihat Koleksi
        </a>
        <a href="https://wa.me/6281572962066" class="btn-animate inline-flex items-center justify-center rounded-full border border-white/40 bg-white/10 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/20">
         Chat Sekarang
        </a>
       </div>
      </div>
      <div class="grid gap-6 sm:grid-cols-2">
       <div class="hero-glass rounded-3xl p-6 shadow-2xl shadow-slate-950/20">
        <img src="{{ asset('assets/ennma.png') }}" alt="Jersey Enma" class="h-64 w-full rounded-3xl object-cover shadow-xl" />
       </div>
       <div class="grid gap-6">
        <div class="rounded-3xl border border-white/10 bg-white/10 p-6 shadow-2xl shadow-slate-950/15">
         <p class="text-sm uppercase tracking-[0.24em] text-brand-300">Best Seller</p>
         <h2 class="mt-3 text-2xl font-semibold text-white">Jersey Kolaborasi</h2>
         <p class="mt-3 text-sm leading-6 text-slate-100">Dapatkan edisi khusus ENMA X PANSER dan ENMA X LOBA HARKOS dengan desain eksklusif.</p>
        </div>
        <div class="rounded-3xl border border-white/10 bg-white/10 p-6 shadow-2xl shadow-slate-950/15">
         <p class="text-sm uppercase tracking-[0.24em] text-brand-300">Custom</p>
         <h2 class="mt-3 text-2xl font-semibold text-white">Buat Jersey Sendiri</h2>
         <p class="mt-3 text-sm leading-6 text-slate-100">Custom jersey untuk tim, komunitas, atau hadiah spesial dengan logo dan nama Anda.</p>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>

   <section id="produk" class="container mx-auto px-4 py-20 lg:px-6">
    <div class="mb-12 text-center">
     <p class="text-sm font-semibold uppercase tracking-[0.24em] text-brand-600">Koleksi Pilihan</p>
     <h2 class="mt-4 text-4xl font-bold text-slate-900 sm:text-5xl">Jersey Terbaik untuk Atlet & Fans</h2>
     <p class="mx-auto mt-4 max-w-2xl text-slate-600">Jelajahi koleksi jersey original dan custom dengan cutting modern, kain ringan, dan finishing premium.</p>
    </div>
    <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-4">
     <article class="section-card overflow-hidden rounded-3xl bg-white p-4 shadow-lg">
      <img src="{{ asset('assets/x.png') }}" alt="Panser" class="h-72 w-full rounded-[30px] object-cover transition duration-300 hover:scale-105" />
      <div class="mt-5">
       <span class="inline-flex rounded-full bg-brand-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-brand-700">Panser</span>
       <h3 class="mt-4 text-xl font-semibold text-slate-900">EDISI PANser</h3>
       <p class="mt-3 text-sm leading-6 text-slate-600">Jersey klub Bandung dengan detail tim, kombinasi warna bold, dan material yang adem saat dipakai.</p>
       <a href="{{ route('panser') }}" class="mt-5 inline-flex items-center rounded-full bg-slate-900 px-5 py-3 text-sm font-semibold text-white transition hover:bg-brand-600">Lihat Produk</a>
      </div>
     </article>

     <article class="section-card overflow-hidden rounded-3xl bg-slate-950 p-4 text-white shadow-lg shadow-slate-950/20">
      <img src="{{ asset('assets/logo.png') }}" alt="Our" class="h-72 w-full rounded-[30px] object-cover transition duration-300 hover:scale-105" />
      <div class="mt-5">
       <span class="inline-flex rounded-full bg-white/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-white/80">Our</span>
       <h3 class="mt-4 text-xl font-semibold">Koleksi Official</h3>
       <p class="mt-3 text-sm leading-6 text-slate-300">Temukan jersey resmi untuk pecinta olahraga dengan warna kontras dan desain otentik.</p>
       <a href="{{ route('our') }}" class="mt-5 inline-flex items-center rounded-full border border-white/10 bg-white/10 px-5 py-3 text-sm font-semibold text-white transition hover:border-brand-500 hover:bg-brand-500/10">Jelajahi</a>
      </div>
     </article>

     <article class="section-card overflow-hidden rounded-3xl bg-white p-4 shadow-lg">
      <img src="{{ asset('assets/custom.jpg') }}" alt="Custom Jersey" class="h-72 w-full rounded-[30px] object-cover transition duration-300 hover:scale-105" />
      <div class="mt-5">
       <span class="inline-flex rounded-full bg-brand-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-brand-700">Custom</span>
       <h3 class="mt-4 text-xl font-semibold text-slate-900">Custom Desain</h3>
       <p class="mt-3 text-sm leading-6 text-slate-600">Kreasikan jersey sesuai gaya tim dan komunitas dengan print nama, nomor, dan logo favorit.</p>
       <a href="{{ route('custom') }}" class="mt-5 inline-flex items-center rounded-full bg-slate-900 px-5 py-3 text-sm font-semibold text-white transition hover:bg-brand-600">Pesan Custom</a>
      </div>
     </article>

     <article class="section-card overflow-hidden rounded-3xl bg-white p-4 shadow-lg">
      <img src="{{ asset('assets/loba-harkos.png') }}" alt="Loba Harkos" class="h-72 w-full rounded-[30px] object-cover transition duration-300 hover:scale-105" />
      <div class="mt-5">
       <span class="inline-flex rounded-full bg-brand-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-brand-700">Kolaborasi</span>
       <h3 class="mt-4 text-xl font-semibold text-slate-900">Loba Harkos</h3>
       <p class="mt-3 text-sm leading-6 text-slate-600">Kolaborasi seni dan olahraga dengan sentuhan nuansa Jepang yang unik dan berenergi.</p>
       <a href="{{ route('lh') }}" class="mt-5 inline-flex items-center rounded-full bg-slate-900 px-5 py-3 text-sm font-semibold text-white transition hover:bg-brand-600">Selengkapnya</a>
      </div>
     </article>
    </div>
   </section>

   <section id="Tentang" class="bg-slate-950 py-20 text-white">
    <div class="container mx-auto px-4 lg:px-6">
     <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
      <div>
       <p class="text-sm font-semibold uppercase tracking-[0.28em] text-brand-400">Tentang Enma Apparel</p>
       <h2 class="mt-4 text-4xl font-bold sm:text-5xl">Toko Jersey yang Siap Mendukung Setiap Langkahmu</h2>
       <p class="mt-6 max-w-2xl text-slate-300 leading-8">Kami menghadirkan jersey yang cocok untuk olahraga kompetitif, acara komunitas, dan kegiatan santai. Fokus kami adalah kualitas bahan, detail cetak yang tajam, dan kenyamanan saat bergerak.</p>
       <div class="mt-10 grid gap-4 sm:grid-cols-2">
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
         <p class="text-sm uppercase tracking-[0.24em] text-brand-300">Fast Delivery</p>
         <p class="mt-3 text-lg font-semibold">Pengiriman cepat</p>
        </div>
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
         <p class="text-sm uppercase tracking-[0.24em] text-brand-300">Material</p>
         <p class="mt-3 text-lg font-semibold">Bahan breathable</p>
        </div>
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
         <p class="text-sm uppercase tracking-[0.24em] text-brand-300">Custom Ready</p>
         <p class="mt-3 text-lg font-semibold">Desain fleksibel</p>
        </div>
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
         <p class="text-sm uppercase tracking-[0.24em] text-brand-300">Support</p>
         <p class="mt-3 text-lg font-semibold">Layanan 24/7</p>
        </div>
       </div>
      </div>
      <div class="grid gap-6">
       <div class="rounded-[40px] bg-white/5 p-6 shadow-2xl shadow-slate-950/30">
        <img src="{{ asset('assets/bandung.jpg') }}" alt="Foto toko" class="h-96 w-full rounded-[32px] object-cover" />
       </div>
       <div class="rounded-[40px] bg-brand-600 p-8 shadow-2xl shadow-brand-700/30">
        <p class="text-sm uppercase tracking-[0.24em] text-white/80">Kenapa Pilih Kami?</p>
        <h3 class="mt-4 text-3xl font-semibold text-white">Desain eksklusif, kualitas maksimal</h3>
        <p class="mt-4 leading-7 text-white/80">Kami mendesain jersey dengan detail rapi dan warna yang cocok untuk tampil percaya diri di lapangan maupun di luar lapangan.</p>
       </div>
      </div>
     </div>
    </div>
   </section>

   <section id="contact" class="container mx-auto px-4 py-20 lg:px-6">
    <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
     <div>
      <p class="text-sm font-semibold uppercase tracking-[0.24em] text-brand-600">Hubungi Kami</p>
      <h2 class="mt-4 text-4xl font-bold text-slate-900 sm:text-5xl">Siap bantu wujudkan jersey timmu.</h2>
      <p class="mt-6 max-w-xl text-slate-600 leading-8">Tanyakan stock, ukuran, atau buat pesanan custom. Tim Enma Apparel siap jawab lewat WhatsApp, Instagram, atau email.</p>
      <div class="mt-8 space-y-4">
       <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <p class="text-sm uppercase tracking-[0.24em] text-slate-500">WhatsApp</p>
        <p class="mt-2 text-lg font-semibold text-slate-900">+62 815-729-2066</p>
       </div>
       <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
        <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Email</p>
        <p class="mt-2 text-lg font-semibold text-slate-900">enmaapparel@gmail.com</p>
       </div>
      </div>
     </div>
     <div class="grid gap-6 sm:grid-cols-2">
      <a href="https://wa.me/6281572962066" class="rounded-3xl bg-brand-600 p-8 text-white transition hover:bg-brand-700">
       <h3 class="text-xl font-semibold">Chat Sekarang</h3>
       <p class="mt-3 text-sm text-white/80">Dapatkan rekomendasi jersey terbaik langsung lewat WhatsApp.</p>
      </a>
      <a href="https://www.instagram.com/enma.apparel?igsh=MTh6Nnp5bTJ5ZzQxdw==" class="rounded-3xl border border-slate-200 bg-white p-8 text-slate-900 transition hover:border-brand-500">
       <h3 class="text-xl font-semibold">Follow Instagram</h3>
       <p class="mt-3 text-sm text-slate-600">Lihat koleksi terbaru, promo, dan hasil custom pelanggan.</p>
      </a>
     </div>
    </div>
   </section>
  </main>

  <footer class="border-t border-slate-200 bg-slate-950 text-slate-300">
   <div class="container mx-auto px-4 py-10 lg:px-6">
    <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
     <div class="flex items-center gap-3">
      <img src="{{ asset('assets/logo.png') }}" alt="Enma Apparel" class="h-10 w-10 rounded-full object-cover" />
      <div>
       <p class="text-lg font-semibold text-white">Enma Apparel</p>
       <p class="text-sm text-slate-400">Toko jersey olahraga & custom jersey.</p>
      </div>
     </div>
     <div class="flex flex-wrap gap-4 text-sm text-slate-400">
      <a href="#Tentang" class="transition hover:text-white">About</a>
      <a href="#contact" class="transition hover:text-white">Contact</a>
      <a href="#produk" class="transition hover:text-white">Produk</a>
     </div>
    </div>
    <div class="mt-8 border-t border-slate-800 pt-6 text-center text-sm text-slate-500">
     &copy; 2025 Enma Apparel. Semua hak dilindungi.
    </div>
   </div>
  </footer>

  <script>
   const toggle = document.getElementById('menu-toggle');
   const mobileMenu = document.getElementById('mobile-menu');
   toggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
   });
  </script>
 </body>
</html>
