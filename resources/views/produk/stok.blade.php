<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stok Produk</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.navigation')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
            <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama Produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stok Awal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stok Terjual
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stok Akhir
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($stok as $data)
                    <tr
                        class="border-b odd:bg-white even:bg-gray-50 dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
                        <th scope="row"
                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $data->nama_produk }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->harga }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->stok }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->terjual }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->stok - $data->terjual }}
                        </td>
                        <td class="px-6 py-4">
                            <a href=""
                                class="font-medium text-gray-600 hover:underline dark:text-gray-500">Detail</a>
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="mb-2 me-2 rounded-lg bg-red-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                        </td>
                        </form>
                    </tr>
                @empty
                    <tr
                        class="border-b odd:bg-white even:bg-gray-50 dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
                        <th scope="row"
                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            tidak ada data Produk
                        </th>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('produk.create') }}"
    class="font-medium text-blue-600 hover:underline dark:text-blue-500">Tambah Data</a>
    </div>
    @include('layouts.footer')
</body>

</html>
