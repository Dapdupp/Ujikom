<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="font-poppins bg-white text-gray-800">
    <x-nav-bar></x-nav-bar>
    @section('content')
    <div class="max-w-xl mx-auto p-6 bg-white shadow rounded-lg mt-10">
        <h2 class="text-2xl font-bold mb-4 text-center text-orange-400">Form Pemesanan</h2>

        <form action="{{ route('pemesanan.form', ['id' => $produk->id_produk]) }}" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="produk_id" value="{{ $produk->id }}">

            <div>
                <label class="block text-sm font-medium">Nama Produk</label>
                <input type="text" value="{{ $produk->nm_produk }}" disabled class="w-full border px-3 py-2 rounded-lg" />
            </div>

            <div>
                <label class="block text-sm font-medium">Nama Pemesan</label>
                <input type="text" name="nama" required class="w-full border px-3 py-2 rounded-lg" />
            </div>

            <div>
                <label class="block text-sm font-medium">Jumlah</label>
                <input type="number" name="jumlah" min="1" required class="w-full border px-3 py-2 rounded-lg" />
            </div>

            <div>
                <label class="block text-sm font-medium">Alamat</label>
                <textarea name="alamat" required class="w-full border px-3 py-2 rounded-lg"></textarea>
            </div>

            <button type="submit"
                class="bg-orange-400 text-white px-4 py-2 rounded-lg hover:bg-orange-500 transition w-full">
                Pesan Sekarang
            </button>
        </form>
    </div>

</body>

</html>