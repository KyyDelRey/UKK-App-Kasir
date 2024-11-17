@extends('layouts.front')
@section('content')

    <body>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Pelanggan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor Telepon
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pelanggan as $data)
                        <tr
                            class="border-b odd:bg-white even:bg-gray-50 dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
                            <th scope="row"
                                class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $data->nama_pelanggan }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $data->alamat }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->nomor_telepon }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('pelanggan.edit', $data->id) }}"
                                    class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                                <a href="{{ route('pelanggan.show', $data->id) }}"
                                    class="font-medium text-gray-600 hover:underline dark:text-gray-500">Detail</a>
                                <form action="{{ route('pelanggan.destroy', $data->id) }}" method="POST">
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
                                tidak ada data Pelanggan
                            </th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <a href="{{ route('pelanggan.create') }}"
            class="font-medium text-blue-600 hover:underline dark:text-blue-500">Tambah Data</a>
    </body>
@endsection
