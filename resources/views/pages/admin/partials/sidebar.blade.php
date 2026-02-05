<aside class="w-64 bg-slate-900 text-white flex flex-col">
    <div class="px-6 py-5 text-lg font-bold border-b border-slate-700">
        PT Aji Digital Solutions
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2">

        <a href="{{ route('admin.dashboard') }}"
           class="block px-4 py-2 rounded hover:bg-slate-700">
            Dashboard
        </a>

        <a href="{{ route('admin.products.index') }}"
           class="block px-4 py-2 rounded hover:bg-slate-700">
            Produk
        </a>

        <a href="{{ route('admin.articles.index') }}"
           class="block px-4 py-2 rounded hover:bg-slate-700">
            Artikel
        </a>


       <a href="{{ route('admin.gallery.index') }}"
   class="block px-4 py-2 rounded hover:bg-slate-700">
    Gallery
</a>


    </nav>
</aside>
