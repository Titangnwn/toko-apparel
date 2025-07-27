<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enmma Apparel</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/logo/logo.png') }}">
    <!-- CSS, JS lainnya -->

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans leading-relaxed">

    <!-- Header & Navbar -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">MyProfile</h1>
            <nav class="space-x-4">
                <a href="/" class="text-gray-700 hover:text-blue-500 transition">Home</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-10">
        <div class="container mx-auto px-4 py-6 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} ENMA App. All rights reserved.
        </div>
    </footer>

</body>
</html>
