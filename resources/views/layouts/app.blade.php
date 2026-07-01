<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enmma Apparel</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans leading-relaxed min-h-screen flex flex-col">
    <!-- Main Content -->
    <main class="flex-grow">
        <div class="container mx-auto px-4 py-10">
            @yield('content')
        </div>
    </main>

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
