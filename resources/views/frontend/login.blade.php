<!DOCTYPE html>
<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Login - Enma Apparel
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <style>
   @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes shake {
      0%, 100% { transform: translateX(0); }
      20%, 60% { transform: translateX(-10px); }
      40%, 80% { transform: translateX(10px); }
    }

    .animate-fade-in-up {
      animation: fadeInUp 0.6s ease-out both;
    }

    .animate-shake {
      animation: shake 0.5s ease;
    }
  </style>
 </head>
 <body class="bg-gray-100 text-gray-800">
  <!-- Navbar -->
  <nav class="bg-white shadow fixed top-0 w-full z-50">
   <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <a class="flex items-center space-x-2" href="#">
     <img alt="Logo" class="h-10 w-10 object-cover" src="{{ asset('assets/logo.png') }}"/>
     <span class="text-xl font-bold">
      Enma Apparel
     </span>
    </a>
   </div>
  </nav>
  <!-- Spacer -->
  <div class="h-20">
  </div>
  <!-- Login Form -->
  <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-8 mt-10 animate-fade-in-up" id="loginBox">
   <h2 class="text-2xl font-bold text-center mb-6">
    Login ke Akun Anda
   </h2>
   <form class="space-y-4" id="loginForm">
    <div>
     <label class="block mb-1" for="email">
      Email
     </label>
     <input class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" id="email" name="email" required="" type="email"/>
    </div>
    <div>
     <label class="block mb-1" for="password">
      Password
     </label>
     <input class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" id="password" name="password" required="" type="password"/>
    </div>
    <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition flex items-center justify-center space-x-2" id="loginBtn" type="submit">
     <span id="btnText">
      Login
     </span>
     <svg class="hidden animate-spin h-5 w-5 text-white" fill="none" id="spinner" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
      </circle>
      <path class="opacity-75" d="M4 12a8 8 0 018-8v8z" fill="currentColor">
      </path>
     </svg>
    </button>
   </form>
   <p class="text-sm text-center mt-4">
    Belum punya akun?
   <a class="text-blue-600 hover:underline" href="{{ route('register') }}">
    Daftar di sini
</a>
    </a>
   </p>
  </div>
  <!-- Footer -->
  <footer class="bg-white mt-20 py-6 border-t">
   <div class="container mx-auto text-center text-gray-600">
    &copy; 2025 Enma Apparel. All rights reserved.
   </div>
  </footer>
  <!-- Script -->
  <script>
   const loginForm = document.getElementById('loginForm');
    const loginBtn = document.getElementById('loginBtn');
    const spinner = document.getElementById('spinner');
    const btnText = document.getElementById('btnText');
    const loginBox = document.getElementById('loginBox');

    loginForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value.trim();

      // Show spinner
      spinner.classList.remove('hidden');
      btnText.textContent = 'Loading...';
      loginBtn.disabled = true;
      loginBtn.classList.add('opacity-70', 'cursor-not-allowed');

      // Simulasi proses login
      setTimeout(() => {
        spinner.classList.add('hidden');
        btnText.textContent = 'Login';
        loginBtn.disabled = false;
        loginBtn.classList.remove('opacity-70', 'cursor-not-allowed');

        // Simulasi gagal login jika kosong atau password salah
        if (!email || password !== "") {
          // Efek shake
          loginBox.classList.remove('animate-shake'); // reset animasi
          void loginBox.offsetWidth; // force reflow
          loginBox.classList.add('animate-shake');

          alert("Login gagal! Email atau password salah.");
        } else {
          alert("Login berhasil!");
          // window.location.href = "/dashboard"; // contoh redirect
        }
      }, 1500);
    });
  </script>
 </body>
</html>
