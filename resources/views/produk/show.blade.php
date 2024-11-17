@extends('layouts.front')
@section('content')

    <body>
        <form class="mx-auto max-w-md">
            <div class="mb-5">
                <label for="base-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama
                    Produk</label>
                <p class="mb-3 text-gray-500 dark:text-gray-400"> {{ $produk->nama_produk }}
            </div>
            <div class="mb-5">
                <label for="base-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Harga
                    Produk</label>
                <p class="mb-3 text-gray-500 dark:text-gray-400"> {{ $produk->harga }}
            </div>
            <div class="mb-5">
                <label for="base-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Stok
                    Produk</label>
                <p class="mb-3 text-gray-500 dark:text-gray-400"> {{ $produk->stok }}
            </div>
            <a href="{{ route('produk.index') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kembali</a>
        </form>
    </body>
@endsection
