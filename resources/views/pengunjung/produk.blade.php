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
            @foreach ( $produk as $produk )
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                 <img src="{{ asset('storage/' . $item->url_gambar) }}" alt="{{ $item->nm_produk }}" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">{{ $item->nm_produk }}</h3>
                    <p class="text-gray-600 mb-4">Deskripsi singkat produk A yang menarik dan informatif.</p>
                    <p class="text-orange-500 font-bold text-lg mb-2">Rp 50.000</p>
                    <button class="bg-orange-400 text-white px-4 py-2 rounded-lg hover:bg-orange-500 transition">Beli Sekarang</button>
                </div>
            </div>


            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="https://via.placeholder.com/300x200" alt="Produk 2" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Produk B</h3>
                    <p class="text-gray-600 mb-4">Deskripsi singkat produk B yang menjelaskan manfaatnya.</p>
                    <p class="text-orange-500 font-bold text-lg mb-2">Rp 75.000</p>
                    <button class="bg-orange-400 text-white px-4 py-2 rounded-lg hover:bg-orange-500 transition">Beli Sekarang</button>
                </div>
            </div>


            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="https://via.placeholder.com/300x200" alt="Produk 3" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Produk C</h3>
                    <p class="text-gray-600 mb-4">Produk berkualitas tinggi dengan harga terjangkau.</p>
                    <p class="text-orange-500 font-bold text-lg mb-2">Rp 60.000</p>
                    <button class="bg-orange-400 text-white px-4 py-2 rounded-lg hover:bg-orange-500 transition">Beli Sekarang</button>
                </div>
            </div>


            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="https://via.placeholder.com/300x200" alt="Produk 4" class="w-full h-48 object-cover" />
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Produk D</h3>
                    <p class="text-gray-600 mb-4">Inovatif dan populer di kalangan pelanggan.</p>
                    <p class="text-orange-500 font-bold text-lg mb-2">Rp 90.000</p>
                    <button class="bg-orange-400 text-white px-4 py-2 rounded-lg hover:bg-orange-500 transition">Beli Sekarang</button>
                </div>
            </div>
             @endforeach
        </div>
    </section>
</body>

</html>