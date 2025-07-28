<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Enma Apparel</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <!-- Navbar -->
  <nav class="bg-white shadow fixed top-0 w-full z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a href="#" class="flex items-center space-x-2">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-10 w-10 object-cover">
        <span class="text-xl font-bold">Enma Apparel</span>
      </a>
    </div>
  </nav>

  <!-- Spacer -->
  <div class="h-20"></div>

  <!-- Login Form -->
  <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-8 mt-10">
    <h2 class="text-2xl font-bold text-center mb-6">Login ke Akun Anda</h2>

    @if(session('success'))
      <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
      </div>
    @endif

    @if($errors->any())
      <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-sm">
        {{ $errors->first() }}
      </div>
    @endif

    <form method="POST" action="{{ route('login.store') }}" class="space-y-4">
      @csrf

      <div>
        <label for="email" class="block mb-1">Email</label>
        <input type="email" name="email" id="email"
               value="{{ old('email') }}"
               class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      </div>

      <div>
        <label for="password" class="block mb-1">Password</label>
        <input type="password" name="password" id="password"
               class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      </div>

      <button type="submit"
              class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
        Login
      </button>
    </form>

    <p class="text-sm text-center mt-4">
      Belum punya akun?
      <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Daftar di sini</a>
    </p>
  </div>

  <!-- Footer -->
  <footer class="bg-white mt-20 py-6 border-t">
    <div class="container mx-auto text-center text-gray-600">
      &copy; 2025 Enma Apparel. All rights reserved.
    </div>
  </footer>
</body>
</html>
