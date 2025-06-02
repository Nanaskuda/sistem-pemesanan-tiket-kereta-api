
    <!-- Navbar -->
    <header class="w-full max-w-7xl flex justify-between items-center py-4 px-6">
        <div class="flex items-center gap-2">
            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
            </svg>
            <h1 class="text-xl font-bold text-blue-500">Apry Express</h1>
        </div>
        <nav class="flex gap-6">
            <a href="{{ route('index') }}" class=" hover:underline text-blue-500">Beranda</a>
            <a href="{{ route('search') }}" class="hover:underline text-blue-500">Cari Tiket</a>
            <a href="#" class="hover:underline text-blue-500">Booking</a>
        </nav>
    </header>

