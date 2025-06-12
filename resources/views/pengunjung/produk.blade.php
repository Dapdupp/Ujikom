<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produk</title>
    @vite('resources/css/app.css')
    <script>
        function toggleMenu() {
            const nav = document.getElementById('navLinks');
            nav.classList.toggle('hidden');
        }
    </script>
</head>

<body class="font-poppins bg-white text-gray-800">
    <x-nav-bar></x-nav-bar>


    <section class="text-center py-10 px-4">
        <h2 class="text-4xl font-bold text-orange-400 mb-10">Menu</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
            @foreach ( $produk as $item )
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="{{ asset('storage/' . $item->url_gambar) }}" alt="{{ $item->nm_produk }}" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">{{ $item->nm_produk }}</h3>
                    <p class="text-orange-500 font-bold text-lg mb-2">{{ $item->harga }}</p>
                    <a href="{{ route('pemesanan.form', ['id' => $item->id_produk]) }}"
                        class="bg-orange-400 text-white px-4 py-2 rounded-lg hover:bg-orange-500 transition block text-center">
                        Beli Sekarang
                    </a>

                </div>
            </div>

            @endforeach
        </div>
    </section>
</body>

</html>