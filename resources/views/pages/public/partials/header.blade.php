<nav class="bg-slate-900 text-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center gap-6">

        <span class="font-bold text-lg whitespace-nowrap">
            PT Aji Digital Solutions
        </span>

        <a href="{{ route('home') }}" class="hover:text-sky-400">Home</a>
        <a href="{{ route('about') }}" class="hover:text-sky-400">About</a>
        <a href="{{ route('product') }}" class="hover:text-sky-400">Product</a>
        <a href="{{ route('article') }}" class="hover:text-sky-400">Article</a>
        <a href="{{ route('clients') }}" class="hover:text-sky-400">Clients</a>
        <a href="{{ route('gallery') }}" class="hover:text-sky-400">Gallery</a>
        <a href="{{ route('vision') }}" class="hover:text-sky-400">Vision & Mission</a>
        <a href="{{ route('contact') }}" class="hover:text-sky-400">Contact</a>

    

        <div class="ml-auto">
            @auth
                <a href="{{ route('admin.dashboard') }}" class="text-sky-400 font-semibold">
                   
                </a>
            @else
                <a href="{{ route('login') }}" class="text-sky-400 font-semibold">
                    
                </a>
            @endauth
        </div>

    </div>
</nav>
