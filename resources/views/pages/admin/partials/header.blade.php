<<header class="bg-white shadow px-8 py-4 flex justify-between items-center">
    <h1 class="text-xl font-semibold text-slate-800">
         Dashboard
    </h1>

    <div class="flex items-center gap-4">
        <span class="text-slate-600 text-sm">
            {{ auth()->user()->name }}
        </span>

      <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="text-red-600 text-sm font-semibold hover:underline">
                Logout
            </button>
        </form>
    </div>
</header>

