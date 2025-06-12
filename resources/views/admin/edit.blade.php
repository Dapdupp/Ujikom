<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-orange-50 font-sans">

    <div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded shadow">
        <h1 class="text-3xl font-bold text-orange-600 mb-6">Edit Produk</h1>

        <form action="{{ route('produk.update', $produk->id_produk) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block font-medium text-orange-700">ID Produk</label>
                <input type="text" name="id_produk" value="{{ old('id_produk', $produk->id_produk) }}" required
                    class="w-full px-4 py-2 border rounded-lg">
                @error('id_produk') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium text-orange-700">Nama Produk</label>
                <input type="text" name="nm_produk" value="{{ old('nm_produk', $produk->nm_produk) }}" required
                    class="w-full px-4 py-2 border rounded-lg">
                @error('nm_produk') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium text-orange-700">Harga</label>
                <input type="text" name="harga" value="{{ old('harga', $produk->harga) }}" required
                    class="w-full px-4 py-2 border rounded-lg">
                @error('harga') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium text-orange-700">Gambar Produk</label>
                <img src="{{ asset('storage/' . $produk->url_gambar) }}" alt="gambar" class="w-32 h-32 mb-2 rounded shadow">
                <input type="file" name="url_gambar" accept="image/*" class="w-full px-4 py-2 border rounded-lg">
                @error('url_gambar') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium text-orange-700">Status</label>
                <select name="status" class="w-full px-4 py-2 border rounded-lg">
                    <option value="Tersedia" {{ $produk->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                    <option value="Tidak tersedia" {{ $produk->status == 'Tidak tersedia' ? 'selected' : '' }}>Tidak tersedia</option>
                </select>
                @error('status') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium text-orange-700">ID Kategori</label>
                <input type="text" name="id_kategori" value="{{ old('id_kategori', $produk->id_kategori) }}" required
                    class="w-full px-4 py-2 border rounded-lg">
                @error('id_kategori') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="flex items-center mt-6">
                <button type="submit"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full shadow">
                    Update
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