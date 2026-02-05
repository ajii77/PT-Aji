@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-slate-100">
    <div class="bg-white p-8 rounded-xl shadow w-full max-w-md">
        <h1 class="text-2xl font-bold text-center mb-6">
            Register Admin
        </h1>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <input type="text" name="name" placeholder="Nama Lengkap"
                class="w-full border rounded-lg px-4 py-2" required>

            <input type="email" name="email" placeholder="Email"
                class="w-full border rounded-lg px-4 py-2" required>

            <input type="password" name="password" placeholder="Password"
                class="w-full border rounded-lg px-4 py-2" required>

            <input type="password" name="password_confirmation"
                placeholder="Konfirmasi Password"
                class="w-full border rounded-lg px-4 py-2" required>

            <button class="w-full bg-indigo-600 text-white py-2 rounded-lg">
                Register
            </button>
        </form>

        <p class="text-sm text-center mt-4">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-indigo-600 font-semibold">
                Login
            </a>
        </p>
    </div>
</div>
@endsection
