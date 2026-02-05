@extends('layouts.app')

@section('content')
<div class="min-h-screen relative flex items-center justify-center overflow-hidden">

    {{-- BACKGROUND GRADIENT --}}
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-indigo-900 to-slate-800"></div>

    {{-- BACKGROUND IMAGE OVERLAY --}}
    <div class="absolute inset-0 opacity-20">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-afiwE5pD-rmf3kUgAHlx2GkHZBbW0aFDwQ&s"
             alt="Background"
             class="w-full h-full object-cover">
    </div>

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-slate-900/70"></div>

    {{-- LOGIN CARD --}}
    <div class="relative z-10 w-full max-w-md px-6">
        <div class="rounded-2xl border border-white/10 bg-white/10 backdrop-blur-xl shadow-2xl p-8">

            {{-- HEADER --}}
            <div class="text-center mb-6">
                <h1 class="text-3xl font-extrabold text-white">
                    Login
                </h1>
                <p class="mt-2 text-sm text-slate-300">
                    Masuk ke dashboard App Premium
                </p>
            </div>

            {{-- FORM --}}
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                {{-- EMAIL --}}
                <div>
                    <input type="email"
                           name="email"
                           placeholder="Email"
                           class="w-full rounded-lg px-4 py-3
                                  bg-slate-900/60 text-white placeholder-slate-400
                                  border border-white/10
                                  focus:outline-none focus:ring-2 focus:ring-indigo-500"
                           required>
                </div>

                {{-- PASSWORD --}}
                <div>
                    <input type="password"
                           name="password"
                           placeholder="Password"
                           class="w-full rounded-lg px-4 py-3
                                  bg-slate-900/60 text-white placeholder-slate-400
                                  border border-white/10
                                  focus:outline-none focus:ring-2 focus:ring-indigo-500"
                           required>
                </div>

                {{-- BUTTON --}}
                <button type="submit"
                        class="w-full rounded-lg bg-indigo-600 py-3
                               font-semibold text-white
                               hover:bg-indigo-700 transition">
                    Login
                </button>
            </form>

            {{-- FOOTER --}}
            <p class="mt-6 text-center text-sm text-slate-300">
                Belum punya akun?
                <a href="{{ route('register') }}"
                   class="font-semibold text-indigo-400 hover:text-indigo-300">
                    Register
                </a>
            </p>
        </div>

        {{-- BRAND --}}
        <p class="mt-6 text-center text-xs text-slate-400">
            © {{ date('Y') }} PT Aji Digital Solutions
        </p>
    </div>
</div>
@endsection
