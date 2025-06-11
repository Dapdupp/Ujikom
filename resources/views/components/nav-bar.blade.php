<header class="bg-white border-b border-gray-200">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
        
        <div class="flex items-center">
            <img src="{{ asset("images/logo resto d'nov.jpg") }}" alt="Logo" class="h-10 w-auto" />
        </div>

        <div class="sm:hidden">
            <button
                onclick="toggleMenu()"
                class="text-gray-600 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-400 rounded"
                aria-label="Toggle menu"
            >
                ☰
            </button>
        </div>

        
        <div class="hidden sm:flex space-x-6 font-medium text-gray-600">
            <a href="{{ url('pengunjung/index') }}" class="hover:text-gray-900 transition">Home</a>
            <a href="{{ url('pengunjung/produk') }}" class="hover:text-gray-900 transition">Produk</a>
            <a href="{{ url('pengunjung/pemesanan') }}" class="hover:text-gray-900 transition">Pemesanan</a>
            <a href="{{ url('https://wa.me/6281320501381') }}" class="hover:text-gray-900 transition">Kontak</a>
        </div>
    </nav>

    
    <div id="navLinks" class="sm:hidden hidden px-4 pb-4 space-y-2 bg-white border-t border-gray-200">
        <a href="{{ url('pengunjung/index') }}" class="hover:text-gray-900 transition block">Home</a>
        <a href="{{ url('pengunjung/produk') }}" class="block text-gray-700 hover:text-gray-900">Produk</a>
        <a href="{{ url('pengunjung/pemesanan') }}" class="block text-gray-700 hover:text-gray-900">Pemesanan</a>
        <a href="{{ url('https://wa.me/6281320501381') }}" class="block text-gray-700 hover:text-gray-900">Kontak</a>
    </div>

    <script>
        function toggleMenu() {
            const nav = document.getElementById('navLinks');
            nav.classList.toggle('hidden');
        }
    </script>
</header>
