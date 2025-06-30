<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return view('frontend.index');
});

Route::get('/login', function () {
    return view('frontend.login');
})->name('login');


Route::get('/dashboard', function () {
    return view('frontend.index'); // atau dashboard.blade.php kalau ada
})->middleware('auth')->name('dashboard');

Route::get('/register', function () {
    return view('frontend.register');
})->name('register');

Route::get('/panser', function () {
return view('frontend.panser'); // atau sesuaikan lokasi view Anda
})->name('panser');