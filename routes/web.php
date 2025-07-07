<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;

// Beranda
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return view('frontend.index');
});

// Halaman Login
Route::get('/login', function () {
    return view('frontend.login');
})->name('login');

// Proses Login
Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // Redirect tergantung role jika diperlukan
        if (Auth::user()->role === 'admin') {
            return redirect()->route('dashboard'); // ganti jika ada dashboard admin
        }

        return redirect()->route('dashboard');
    }

    return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
})->name('login.store');

// Halaman Dashboard
Route::get('/dashboard', function () {
    return view('frontend.index'); // ganti ke view dashboard jika ada
})->middleware('auth')->name('dashboard');

// Registrasi
Route::get('/register', function () {
    return view('frontend.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register.store');

// Logout
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::get('/admin/dashboard', function () {
    if (auth()->check() && auth()->user()->role == 'admin') {
        return view('admin.dashboard');
    }
    return redirect('/');
})->middleware('auth');


// Rute tambahan
Route::get('/panser', function () {
    return view('frontend.panser');
})->name('panser');

Route::get('/our', function () {
    return view('frontend.our');
})->name('our');

Route::get('/custom', function () {
    return view('frontend.custom');
})->name('custom');

Route::get('/lh', function () {
    return view('frontend.lh');
})->name('lh');

Route::get('/', function () {
    return view('frontend.index');
})->name('index');

