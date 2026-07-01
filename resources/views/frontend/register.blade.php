<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Registrasi</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6">Registrasi Akun</h2>

    @if(session('success'))
      <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
      </div>
    @endif

    @if ($errors->any())
      <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
        <ul class="list-disc list-inside">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('register.store') }}" method="POST" class="space-y-4">
      @csrf

      <input type="text" name="name" placeholder="Nama Lengkap"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2
         focus:ring-blue-500"
        value="{{ old('name') }}" required />

      <input type="email" name="email" placeholder="Email"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2
         focus:ring-blue-500"
        value="{{ old('email') }}" required />

      <input type="password" name="password" placeholder="Password"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2
         focus:ring-blue-500"
        required />

      <input type="password" name="password_confirmation" placeholder="Konfirmasi Password"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2
         focus:ring-blue-500"
        required />

      <button type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
        Daftar
      </button>
    </form>

    <p class="text-center text-sm text-gray-600 mt-4">
      Sudah punya akun?
      <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login di sini</a>
    </p>
  </div>
</body>
</html>
