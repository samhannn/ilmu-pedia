<nav class="w-full bg-white py-1 md:py-2 shadow-sm z-50 relative">
    <div class="max-w-7xl mx-auto px-6 md:px-12 flex justify-between items-center">
        
        <a href="{{ route('dashboard') }}" class="flex items-center">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-8 md:h-10 w-auto object-contain">
        </a>

        <div class="flex items-center gap-4 md:gap-8">
            <div class="hidden md:flex gap-6 text-sm font-semibold text-gray-900">
                <a href="#" class="hover:text-blue-500 transition">Modul</a>
                <a href="#" class="hover:text-blue-500 transition">Tentang Kami</a>
            </div>
            
            <div class="relative">
                <button id="userMenuBtn" class="w-9 h-9 bg-gray-100 rounded-full flex items-center justify-center hover:bg-blue-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </button>

                <div id="userMenuDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl border border-gray-100 py-2 z-50 transform origin-top-right transition-all">
                    
                    <div class="px-4 py-2 border-b border-gray-100 mb-1">
                        <p class="text-xs text-gray-500">Halo,</p>
                        <p class="text-sm font-bold text-gray-800 truncate">{{ Auth::user()->name }}</p>
                    </div>

                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-blue-500 transition">
                        Profil Saya
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition font-medium">
                            Keluar (Logout)
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('userMenuBtn');
        const menu = document.getElementById('userMenuDropdown');

        // 1. Klik tombol untuk memunculkan/menyembunyikan menu
        btn.addEventListener('click', function (e) {
            e.stopPropagation(); // Mencegah klik tembus ke window
            menu.classList.toggle('hidden');
        });

        // 2. Klik di mana saja di luar menu untuk menutupnya
        window.addEventListener('click', function (e) {
            if (!menu.contains(e.target) && !btn.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
    });
</script>