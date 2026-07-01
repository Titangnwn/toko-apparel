<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enma Apparel • Koleksi Panser</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        html { scroll-behavior: smooth; }
        body { margin:0; font-family:'Inter', sans-serif; background:#f8fafc; color:#0f172a; }
        .hero-banner { background-image: linear-gradient(180deg, rgba(15,23,42,.82), rgba(15,23,42,.24)), url('{{ asset('assets/x.png') }}'); background-size:cover; background-position:center; }
        .btn-animate { transition: all 0.25s ease-in-out; }
        .btn-animate:hover { transform: translateY(-2px) scale(1.02); }
        .section-card { transition: transform 0.25s ease, box-shadow 0.25s ease; }
        .section-card:hover { transform: translateY(-6px); box-shadow: 0 24px 60px rgba(15,23,42,.12); }
    </style>
</head>
<body class="bg-slate-50 text-slate-900">
<nav class="fixed inset-x-0 top-0 z-50 bg-white/95 backdrop-blur-lg border-b border-slate-200 shadow-sm">
    <div class="container mx-auto flex items-center justify-between px-4 py-4 lg:px-6">
        <a href="{{ route('index') }}" class="flex items-center gap-3">
            <img src="{{ asset('assets/logo.png') }}" alt="Enma Apparel" class="h-10 w-10 rounded-full object-cover" />
            <span class="text-lg font-semibold text-slate-900">Enma Apparel</span>
        </a>
        <div class="hidden lg:flex items-center gap-8 text-sm font-medium text-slate-700">
            <a href="{{ route('index') }}" class="transition hover:text-brand-600">Beranda</a>
            <a href="{{ route('our') }}" class="transition hover:text-brand-600">Our</a>
            <a href="{{ route('custom') }}" class="transition hover:text-brand-600">Custom</a>
            <a href="{{ route('lh') }}" class="transition hover:text-brand-600">LH</a>
            <a href="#contact" class="transition hover:text-brand-600">Kontak</a>
        </div>
        <button id="menu-toggle" class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-900 transition hover:border-brand-500 lg:hidden">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <div id="mobile-menu" class="hidden border-t border-slate-200 bg-white/95 px-4 pb-6 lg:hidden">
        <div class="flex flex-col gap-4 py-4 text-slate-700">
            <a href="{{ route('index') }}" class="transition hover:text-brand-600">Beranda</a>
            <a href="{{ route('our') }}" class="transition hover:text-brand-600">Our</a>
            <a href="{{ route('custom') }}" class="transition hover:text-brand-600">Custom</a>
            <a href="{{ route('lh') }}" class="transition hover:text-brand-600">LH</a>
            <a href="#contact" class="transition hover:text-brand-600">Kontak</a>
        </div>
    </div>
</nav>
<main class="pt-24">
    <section class="hero-banner relative overflow-hidden py-24 text-white">
        <div class="absolute inset-0 bg-slate-950/60"></div>
        <div class="container mx-auto relative px-4 lg:px-6">
            <div class="max-w-3xl">
                <span class="inline-flex rounded-full bg-brand-500/90 px-4 py-2 text-sm font-semibold uppercase tracking-[0.24em] text-white">Koleksi Panser</span>
                <h1 class="mt-6 text-4xl font-bold leading-tight sm:text-5xl lg:text-6xl">Jersey Panser dengan Karakter Tajam</h1>
                <p class="mt-6 max-w-2xl text-base text-slate-200 sm:text-lg">Pilihan jersey Panser resmi untuk supporter fanatik yang ingin tampil kuat, modern, dan nyaman.</p>
                <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                    <a href="#products" class="btn-animate inline-flex items-center justify-center rounded-full bg-brand-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-brand-500/20 transition hover:bg-brand-700">Lihat Koleksi</a>
                    <a href="https://wa.me/6281572962066" class="btn-animate inline-flex items-center justify-center rounded-full border border-white/30 bg-white/10 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/20">Chat Pesan</a>
                </div>
            </div>
        </div>
    </section>
    <section id="products" class="container mx-auto px-4 py-20 lg:px-6">
        <div class="mb-12 text-center">
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-brand-600">Edisi Panser</p>
            <h2 class="mt-4 text-4xl font-bold text-slate-900 sm:text-5xl">Koleksi Terbaik untuk Supporter</h2>
            <p class="mx-auto mt-4 max-w-2xl text-slate-600">Jersey dengan detail tegas, warna bold, dan material yang nyaman dipakai sepanjang pertandingan.</p>
        </div>
        <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
            <article class="section-card overflow-hidden rounded-[28px] bg-white p-4 shadow-lg">
                <img src="{{ asset('assets/home.webp') }}" alt="Panser Home" class="h-72 w-full rounded-[24px] object-cover transition duration-300 hover:scale-105" />
                <div class="mt-5">
                    <span class="inline-flex rounded-full bg-brand-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-brand-700">Home</span>
                    <h3 class="mt-4 text-2xl font-semibold text-slate-900">Panser Home 24/25</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-600">Warna putih bersih berpadu aksen bold untuk kesan elegan dan agresif.</p>
                    <div class="mt-5 flex items-center justify-between gap-4">
                        <span class="text-lg font-semibold text-slate-900">Rp 200.000</span>
                        <a href="https://wa.me/6281572962066" class="inline-flex items-center justify-center rounded-full bg-brand-600 px-5 py-2 text-sm font-semibold text-white transition hover:bg-brand-700">Pesan</a>
                    </div>
                </div>
            </article>
            <article class="section-card overflow-hidden rounded-[28px] bg-white p-4 shadow-lg">
                <img src="{{ asset('assets/away.webp') }}" alt="Panser Away" class="h-72 w-full rounded-[24px] object-cover transition duration-300 hover:scale-105" />
                <div class="mt-5">
                    <span class="inline-flex rounded-full bg-brand-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-brand-700">Away</span>
                    <h3 class="mt-4 text-2xl font-semibold text-slate-900">Panser Away 24/25</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-600">Desain gelap dengan aksen oranye, cocok untuk tampil beda di luar kandang.</p>
                    <div class="mt-5 flex items-center justify-between gap-4">
                        <span class="text-lg font-semibold text-slate-900">Rp 250.000</span>
                        <a href="https://wa.me/6281572962066" class="inline-flex items-center justify-center rounded-full bg-brand-600 px-5 py-2 text-sm font-semibold text-white transition hover:bg-brand-700">Pesan</a>
                    </div>
                </div>
            </article>
            <article class="section-card overflow-hidden rounded-[28px] bg-white p-4 shadow-lg">
                <img src="{{ asset('assets/special.jpg') }}" alt="Panser Special" class="h-72 w-full rounded-[24px] object-cover transition duration-300 hover:scale-105" />
                <div class="mt-5">
                    <span class="inline-flex rounded-full bg-brand-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-brand-700">Special</span>
                    <h3 class="mt-4 text-2xl font-semibold text-slate-900">Panser Special</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-600">Edisi collector dengan detail custom dan sentuhan warna premium.</p>
                    <div class="mt-5 flex items-center justify-between gap-4">
                        <span class="text-lg font-semibold text-slate-900">Rp 220.000</span>
                        <a href="https://wa.me/6281572962066" class="inline-flex items-center justify-center rounded-full bg-brand-600 px-5 py-2 text-sm font-semibold text-white transition hover:bg-brand-700">Pesan</a>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section class="bg-slate-950 py-16 text-white">
        <div class="container mx-auto px-4 lg:px-6">
            <div class="grid gap-8 lg:grid-cols-3">
                <div class="rounded-[32px] bg-white/5 p-8 shadow-2xl shadow-slate-950/20">
                    <h3 class="text-xl font-semibold">Woven Polyester</h3>
                    <p class="mt-3 text-slate-300">Bahan adem dengan finish halus, tetap nyaman untuk latihan dan perjalanan.</p>
                </div>
                <div class="rounded-[32px] bg-white/5 p-8 shadow-2xl shadow-slate-950/20">
                    <h3 class="text-xl font-semibold">Grafis Kuat</h3>
                    <p class="mt-3 text-slate-300">Cetakan tajam dan warna tahan lama sehingga tetap fresh di setiap pertandingan.</p>
                </div>
                <div class="rounded-[32px] bg-white/5 p-8 shadow-2xl shadow-slate-950/20">
                    <h3 class="text-xl font-semibold">Supporter Ready</h3>
                    <p class="mt-3 text-slate-300">Dirancang untuk tim fanatik yang ingin tampil penuh energi dan kebanggaan.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="container mx-auto px-4 py-16 lg:px-6">
        <div class="mb-12 text-center">
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-brand-600">Hubungi Enma</p>
            <h2 class="mt-4 text-4xl font-bold text-slate-900 sm:text-5xl">Siap Bantu Pesan Jersey Panser</h2>
        </div>
        <div class="grid gap-6 md:grid-cols-3">
            <div class="rounded-[28px] border border-slate-200 bg-white p-6 shadow-lg">
                <p class="text-sm uppercase tracking-[0.24em] text-brand-500">WhatsApp</p>
                <p class="mt-3 text-xl font-semibold text-slate-900">+62 815-729-2066</p>
                <a href="https://wa.me/6281572962066" class="mt-4 inline-flex items-center justify-center rounded-full bg-brand-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-brand-700">Chat Sekarang</a>
            </div>
            <div class="rounded-[28px] border border-slate-200 bg-white p-6 shadow-lg">
                <p class="text-sm uppercase tracking-[0.24em] text-brand-500">Instagram</p>
                <p class="mt-3 text-xl font-semibold text-slate-900">@enma.Apparel</p>
                <a href="https://www.instagram.com/enma.apparel" class="mt-4 inline-flex items-center justify-center rounded-full border border-slate-300 px-4 py-3 text-sm font-semibold text-slate-900 transition hover:border-brand-500">Follow</a>
            </div>
            <div class="rounded-[28px] border border-slate-200 bg-white p-6 shadow-lg">
                <p class="text-sm uppercase tracking-[0.24em] text-brand-500">Email</p>
                <p class="mt-3 text-xl font-semibold text-slate-900">enmaapparel@gmail.com</p>
                <a href="mailto:enmaapparel@gmail.com" class="mt-4 inline-flex items-center justify-center rounded-full bg-slate-900 px-4 py-3 text-sm font-semibold text-white transition hover:bg-slate-800">Email Kami</a>
            </div>
        </div>
    </section>
</main>
<footer class="border-t border-slate-200 bg-white py-8 text-center text-sm text-slate-500">
    <div class="container mx-auto px-4">&copy; 2025 Enma Apparel. Semua hak dilindungi.</div>
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

