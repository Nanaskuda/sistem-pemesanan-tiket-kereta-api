<aside id="sidebar"
    class="fixed top-0 left-0 z-40 h-screen pt-20 transition-all duration-300 bg-white text-blue-800 border-r border-blue-300 w-16 sm:w-64 overflow-x-hidden"
    data-collapsed="true">
    <div class="h-full px-3 pb-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('index') }}" class="flex items-center p-2 rounded-lg hover:bg-blue-400">
                    <svg class="w-6 h-6 flex-shrink-0 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6" />
                    </svg>
                    <span class="sidebar-label">Beranda</span>
                </a>
            </li>
            @if (isset($schedules) && count($schedules))
                @foreach ($schedules as $schedule)
                    <li>
                        <a href="{{ route('booking.form', $schedule->id) }}"
                            class="flex items-center p-2 rounded-lg hover:bg-blue-400">
                            <svg class="w-6 h-6 flex-shrink-0 mr-2" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path d="M9 17v-2a4 4 0 014-4h6" />
                                <path d="M9 5v2a4 4 0 004 4h6" />
                                <path d="M3 7v10a4 4 0 004 4h10a4 4 0 004-4V7a4 4 0 00-4-4H7a4 4 0 00-4 4z" />
                            </svg>
                            <span class="sidebar-label">Pesan Tiket</span>
                        </a>
                    </li>
                @endforeach
            @endif

            <li>
                <a href="booking.confirmation"
                    class="flex items-center p-2 rounded-lg hover:bg-blue-400">
                    <svg class="w-6 h-6 flex-shrink-0 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="sidebar-label">Riwayat Pemesanan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('search') }}" class="flex items-center p-2 rounded-lg hover:bg-blue-400">
                    <svg class="w-6 h-6 flex-shrink-0 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M8 7V3M16 7V3M4 11h16M4 19h16M4 15h16" />
                    </svg>
                    <span class="sidebar-label">Jadwal Kereta</span>
                </a>
            </li>

            @guest
                <li>
                    <a href="{{ route('login') }}" class="flex items-center p-2 rounded-lg hover:bg-blue-400">
                        <svg class="w-6 h-6 flex-shrink-0 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M15 12H3m0 0l4-4m-4 4l4 4" />
                        </svg>
                        <span class="sidebar-label">Login</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="flex items-center p-2 rounded-lg hover:bg-blue-400">
                        <svg class="w-6 h-6 flex-shrink-0 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M12 4v16m8-8H4" />
                        </svg>
                        <span class="sidebar-label">Sign Up</span>
                    </a>
                </li>
            @else
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center w-full p-2 rounded-lg hover:bg-blue-400">
                            <svg class="w-6 h-6 flex-shrink-0 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M17 16l4-4m0 0l-4-4m4 4H7" />
                            </svg>
                            <span class="sidebar-label">Logout</span>
                        </button>
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</aside>

<!-- Toggle Sidebar Button -->
<button id="toggleSidebarBtn" class="fixed top-4 left-4 z-50 bg-blue-500 text-white p-2 rounded-md sm:hidden">
    ☰
</button>

<script>
    const sidebar = document.getElementById('sidebar');
    const sidebarLabels = document.querySelectorAll('.sidebar-label');
    const toggleBtn = document.getElementById('toggleSidebarBtn');

    function setSidebar(collapsed) {
        if (collapsed) {
            sidebar.classList.remove('w-64');
            sidebar.classList.add('w-16');
            sidebar.setAttribute('data-collapsed', 'true');
            sidebarLabels.forEach(label => label.style.display = 'none');
        } else {
            sidebar.classList.remove('w-16');
            sidebar.classList.add('w-64');
            sidebar.setAttribute('data-collapsed', 'false');
            sidebarLabels.forEach(label => label.style.display = '');
        }
    }

    // Default collapsed
    setSidebar(true);

    toggleBtn.addEventListener('click', () => {
        const isCollapsed = sidebar.getAttribute('data-collapsed') === 'true';
        setSidebar(!isCollapsed);
    });
</script>
