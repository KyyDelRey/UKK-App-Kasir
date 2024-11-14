<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Penjualan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.navigation')
    @php
        $total_harga = 0;
    @endphp
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
            <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Jumlah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga Satuan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Subtotal
                    </th>>
                </tr>
            </thead>
            <tbody>
                @forelse ($detail as $data)
                    <tr
                        class="border-b odd:bg-white even:bg-gray-50 dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
                        <th scope="row"
                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $data->nama_produk }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->jumlah_produk }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->harga }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->subtotal }}
                        </td>
                        </form>
                    </tr>
                    @php
                        $total_harga += $data->subtotal;
                    @endphp
                @empty
                    <tr
                        class="border-b odd:bg-white even:bg-gray-50 dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
                        <th scope="row"
                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            Tidak Ada Data Penjualan
                        </th>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('penjualan.create') }}"
            class="font-medium text-blue-600 hover:underline dark:text-blue-500">Tambah Data</a>
    </div>
    <form class="mx-auto max-w-md" method="POST" action="{{ route('penjualan.store') }}">
        @csrf

        <div class="group relative z-0 mb-5 w-full">
            <label for="pelanggan_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pilih
                Pelanggan</label>
            <select id="pelanggan_id" name="pelanggan_id"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                <option>Pilih Pelanggan</option>
                @foreach ($penjualan as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_pelanggan }}</option>
                @endforeach
            </select>
        </div>
        <div class="group relative z-0 mb-5 w-full">
            <input type="text" name="total_harga" id="total_harga" readonly
                value="{{ old('total_harga', round($total_harga)) }}"
                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                placeholder=" " required />
            <label for="total_harga"
                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:text-gray-400 peer-focus:dark:text-blue-500">Jumlah</label>
        </div>
        <div class="group relative z-0 mb-5 w-full">
            <input type="date" name="tanggal_penjualan" id="tanggal_penjualan" value="{{ old('tanggal_penjualan') }}"
                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                placeholder=" " required />
            <label for="tanggal_penjualan"
                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:text-gray-400 peer-focus:dark:text-blue-500">Tanggal
                Penjualan</label>
        </div>
        <button type="submit"
            class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Tambah
            Data</button>
    </form>
    @include('layouts.footer')
</body>

</html>
