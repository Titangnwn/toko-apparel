<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    // Menampilkan halaman profil pengguna
    public function show()
    {
        $user = Auth::user();  // Mendapatkan data pengguna yang sedang login
        return view('frontend.profile', compact('user'));
    }

    // Menampilkan formulir untuk mengedit profil
    public function edit()
    {
        $user = Auth::user();  // Mendapatkan data pengguna yang sedang login
        return view('frontend.edit-profile', compact('user'));
    }

    // Mengupdate data profil pengguna
    public function update(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        // Menyimpan perubahan data pengguna
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->save();  // Menyimpan perubahan ke database

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui');
    }
}
