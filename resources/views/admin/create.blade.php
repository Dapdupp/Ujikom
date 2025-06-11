<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tambah Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-orange-50 font-sans">

<div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded shadow">
    <h1 class="text-3xl font-bold text-orange-600 mb-6">Tambah Produk</h1>

    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="id_produk" class="block font-medium text-orange-700">ID Produk</label>
            <input type="text" name="id_produk" value="{{ old('id_produk') }}" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500">
            @error('id_produk')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="nm_produk" class="block font-medium text-orange-700">Nama Produk</label>
            <input type="text" name="nm_produk" value="{{ old('nm_produk') }}" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500">
            @error('nm_produk')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="url_gambar" class="block font-medium text-orange-700">Gambar Produk</label>
            <input type="file" name="url_gambar" accept="image/*" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500">
            @error('url_gambar')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="status" class="block font-medium text-orange-700">Status</label>
            <select name="status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500">
                <option value="Tersedia">Tersedia</option>
                <option value="Tidak tersedia">Tidak tersedia</option>
            </select>
            @error('status')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="id_kategori" class="block font-medium text-orange-700">ID Kategori</label>
            <input type="text" name="id_kategori" value="{{ old('id_kategori') }}" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500">
            @error('id_kategori')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center mt-6">
            <button type="submit"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full shadow">
                Simpan
            </button>
            <a href="{{ route('adminResto') }}"
               class="ml-4 text-orange-700 hover:underline text-sm">
                Kembali
            </a>
        </div>
    </form>
</div>

</body>
</html>
