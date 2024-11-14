<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data User</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.navigation')
    <form class="mx-auto max-w-md">
        <div class="mb-5">
            <label for="base-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama</label>
            <p class="mb-3 text-gray-500 dark:text-gray-400"> {{ $user->name }}
        </div>
        <div class="mb-5">
            <label for="base-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <p class="mb-3 text-gray-500 dark:text-gray-400"> {{ $user->email }}
        </div>
        <div class="mb-5">
            <label for="base-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Username</label>
            <p class="mb-3 text-gray-500 dark:text-gray-400"> {{ $user->username }}
        </div>
        <div class="mb-5">
            <label for="base-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Level</label>
            <p class="mb-3 text-gray-500 dark:text-gray-400"> {{ $user->level }}
        </div>
        <a href="{{ route('user.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kembali</a>
    </form>
    @include('layouts.footer')
</body>

</html>
