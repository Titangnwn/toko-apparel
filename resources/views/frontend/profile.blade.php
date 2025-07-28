<!-- resources/views/frontend/profile.blade.php -->
@extends('layouts.app')
<link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
<header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">MyProfile</h1>
            <nav class="space-x-4">
                <a href="/" class="text-gray-700 hover:text-blue-500 transition">Home</a>
            </nav>
        </div>
    </header>

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">
    <div class="text-center">
        <h1 class="text-3xl font-semibold text-gray-800">My Profile</h1>
        <p class="text-gray-600 mt-2">Kelola informasi pribadi Anda</p>
    </div>

    <div class="mt-8">
        <div class="flex justify-between items-center border-b pb-4">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800">Informasi User</h2>
            </div>
            <a href="{{ route('profile.edit') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">Edit Profile</a>
        </div>

        <div class="mt-6 space-y-4">
            <div class="flex justify-between">
                <span class="text-gray-600">Name:</span>
                <span class="font-semibold text-gray-800">{{ $user->name }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-600">Email:</span>
                <span class="font-semibold text-gray-800">{{ $user->email }}</span>
            </div>
        </div>
        
        <!-- Logout Button -->
        <div class="mt-6">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full bg-red-500 text-white py-3 rounded-md hover:bg-red-600 focus:outline-none">Logout</button>
            </form>
        </div>
    </div>
</div>
@endsection
