<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-orange-50 font-sans">

    <div class="max-w-6xl mx-auto mt-10 mb-10 px-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-orange-600">Daftar Produk</h1>
            <a href="{{ route('produk.create') }}"
                class="px-5 py-2 bg-orange-500 text-white rounded-full hover:bg-orange-600 transition shadow">
                + Tambah Produk
            </a>
        </div>

        @if (session('success'))
        <div class="mb-4 p-3 rounded bg-green-500 text-white shadow">
            {{ session('success') }}
        </div>
        @endif

        <div class="bg-white p-6 rounded-lg shadow overflow-x-auto">
            <table class="w-full table-auto text-sm text-gray-700">
                <thead>
                    <tr class="bg-orange-100 text-orange-700">
                        <th class="px-4 py-2 text-left">No</th>
                        <th class="px-4 py-2 text-left">ID Produk</th>
                        <th class="px-4 py-2 text-left">Nama Produk</th>
                        <th class="px-4 py-2 text-left">Gambar</th>
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($admin as $produk)
                    <tr class="border-t border-orange-100 hover:bg-orange-50">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $produk->id_produk }}</td>
                        <td class="px-4 py-2">{{ $produk->nm_produk }}</td>
                        <td class="px-4 py-2">
                            <img src="{{ asset('storage/' . $produk->gambar) }}"
                                class="w-16 h-16 object-cover rounded" alt="gambar produk">
                        </td>
                        <td class="px-4 py-2">{{ $produk->status }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('produk.edit', $produk->id_produk) }}"
                                class="inline-block bg-blue-500 text-white px-4 py-1.5 rounded-full text-xs hover:bg-blue-600 transition shadow">
                                Edit
                            </a>

                            <form action="{{ route('produk.destroy', $produk->id_produk) }}" method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-600 text-white px-4 py-1.5 rounded-full text-xs hover:bg-red-700 transition shadow">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-gray-500 py-6">Data produk kosong.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $admin->links('pagination::tailwind') }}
        </div>
    </div>

</body>

</html>