<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Kamu Sudah Login:)') }}
                </div>
            </div>
        </div>
    </div>



    <div
        class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Aplikasi Kasir</h5>
        <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Uji Kopetensi Keahlian SMK Negeri 1
            Wadaslintang
        </p>
        <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
            <a href="https://www.instagram.com/_rizkii11/"
                class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                <svg class="me-3 w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                        clip-rule="evenodd" />
                </svg>

                <div class="text-left rtl:text-right">
                    <div class="mb-1 text-xs">My Social Media</div>
                    <div class="-mt-1 font-sans text-sm font-semibold">Instagram</div>
                </div>
            </a>
            <a href="https://github.com/KyyDelRey"
                class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                <svg class="me-3 w-7 h-7 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.8 8.205 11.388.6.111.82-.261.82-.577 0-.287-.011-1.243-.017-2.248-3.338.724-4.043-1.607-4.043-1.607-.546-1.384-1.333-1.754-1.333-1.754-1.086-.742.083-.727.083-.727 1.204.085 1.838 1.236 1.838 1.236 1.068 1.832 2.8 1.301 3.48.995.108-.773.418-1.301.762-1.601-2.665-.303-5.467-1.333-5.467-5.93 0-1.313.47-2.386 1.236-3.227-.124-.303-.536-1.528.117-3.176 0 0 1.008-.322 3.303 1.227.96-.267 1.993-.4 3.006-.404 1.013.004 2.046.137 3.006.404 2.295-1.549 3.303-1.227 3.303-1.227.653 1.648.241 2.873.118 3.176.766.841 1.236 1.914 1.236 3.227 0 4.61-2.805 5.623-5.471 5.92.43.371.815 1.102.815 2.222 0 1.606-.014 2.903-.017 3.292 0 .319.218.695.825.577A12.026 12.026 0 0 0 24 12c0-6.627-5.373-12-12-12z"
                        clip-rule="evenodd" />
                </svg>
                <div class="text-left rtl:text-right">
                    <div class="mb-1 text-xs">My on Github</div>
                    <div class="-mt-1 font-sans text-sm font-semibold">Github Link</div>
                </div>
            </a>
        </div>
    </div>


    @include('layouts.footer')
</x-app-layout>
