@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 bg-white rounded-2xl shadow-lg overflow-hidden">

        {{-- LEFT SIDE --}}
        <div class="bg-slate-900 text-white p-10 flex flex-col justify-between">
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    Get in Touch With Us
                </h2>

                <p class="text-slate-300 leading-relaxed mb-8">
                    Punya pertanyaan, ingin bekerja sama, atau butuh informasi
                    lebih lanjut? Jangan ragu untuk menghubungi kami.
                    Tim kami siap membantu Anda.
                </p>

                <div class="space-y-4 text-sm">
                    <div class="flex items-start gap-3">
                        <span class="text-sky-400">📍</span>
                        <span>
                            PT Aji Digital Solutions<br>
                            Indonesia
                        </span>
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="text-sky-400">📧</span>
                        <span>info@ajidigitalsolutions@gmail.com
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="text-sky-400">📞</span>
                        <span>+62 895-3916-40225</span>
                    </div>
                </div>
            </div>

            <p class="text-xs text-slate-400 mt-10">
                © {{ date('Y') }} PT Aji Digital Solutions
            </p>
        </div>

        {{-- RIGHT SIDE (FORM) --}}
        <div class="p-10">

            <h3 class="text-2xl font-bold text-slate-800 mb-6">
                Contact Form
            </h3>

            @if(session('success'))
                <div class="mb-6 rounded-lg bg-green-100 text-green-700 px-4 py-3">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">
                        Nama
                    </label>
                    <input
                        type="text"
                        name="name"
                        required
                        class="w-full rounded-lg border border-slate-300 px-4 py-2
                               focus:outline-none focus:ring-2 focus:ring-sky-500"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">
                        Email
                    </label>
                    <input
                        type="email"
                        name="email"
                        required
                        class="w-full rounded-lg border border-slate-300 px-4 py-2
                               focus:outline-none focus:ring-2 focus:ring-sky-500"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">
                        Pesan
                    </label>
                    <textarea
                        name="message"
                        rows="4"
                        required
                        class="w-full rounded-lg border border-slate-300 px-4 py-2
                               focus:outline-none focus:ring-2 focus:ring-sky-500"
                    ></textarea>
                </div>

                <button
                    type="submit"
                    class="w-full rounded-lg bg-sky-600 text-white py-2.5 font-semibold
                           hover:bg-sky-700 transition"
                >
                    Kirim Pesan
                </button>
            </form>

        </div>

    </div>

</div>
@endsection
