@extends('layouts.front')
@section('content')

    <body>

        <form class="mx-auto max-w-md" method="POST" action="{{ route('detail.store') }}">
            @csrf
            <div class="group relative z-0 mb-5 w-full">
                <label for="produk_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pilih
                    Produk</label>
                <select id="produk_id" name="produk_id"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                    <option>Pilih Produk</option>
                    @foreach ($detail as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_produk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="group relative z-0 mb-5 w-full">
                <input type="text" name="jumlah_produk" id="jumlah_produk" value="{{ old('jumlah_produk') }}"
                    class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                    placeholder=" " required />
                <label for="jumlah_produk"
                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:text-gray-400 peer-focus:dark:text-blue-500">Jumlah
                    Beli</label>
            </div>

            <button type="submit"
                class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Tambah
                Data</button>
        </form>
    </body>
@endsection
