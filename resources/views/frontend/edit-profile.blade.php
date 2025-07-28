<!-- resources/views/frontend/edit-profile.blade.php -->
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
        <h1 class="text-3xl font-semibold text-gray-800">Edit Profile</h1>
        <p class="text-gray-600 mt-2">Update your personal information</p>
    </div>

    <form action="{{ route('profile.update') }}" method="POST" class="mt-8">
        @csrf
        @method('PUT')

        <div class="space-y-4">
            <!-- Name -->
            <div>
                <label for="name" class="block text-gray-600">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-600">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-gray-600">Password</label>
                <input type="password" name="password" id="password" class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Password Confirmation -->
            <div>
                <label for="password_confirmation" class="block text-gray-600">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-md hover:bg-blue-600 transition">Update Profile</button>
            </div>
        </div>
    </form>
</div>
@endsection
