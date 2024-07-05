<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <!-- Tautkan file CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Tautkan file CSS menggunakan vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body class="bg-gray-100">
    <!-- Bagian Nav Bar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center logo-container">

                    <img class="mr-3 logo-img" src="gambar/diskom.png" alt="Diskominfo Logo">
                    <button class="ml-4 lg:hidden flex focus:outline-none" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex flex-grow items-center justify-center" id="navbarNav">
                    <ul class="flex flex-col lg:flex-row list-none">
                        <li class="nav-item">
                            <a class="px-3 py-2 flex text-xs uppercase leading-snug" href="{{ route('home') }}">Home</a>
                        </li>

                        <li class="nav-item dropdown relative">
                                <a class="px-3 py-2 flex text-xs uppercase leading-snug dropdown-toggle" href="#" role="button">
                                    Dropdown link
                                </a>
                                <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                    <li class="">
                                        <a class="dropdown-item block px-4 py-2 hover:bg-gray-200" href="#">Action</a>
                                    </li>
                                    <li class="">
                                        <a class="dropdown-item block px-4 py-2 hover:bg-gray-200" href="#">Another action</a>
                                    </li>
                                    <li class="">
                                        <a class="dropdown-item block px-4 py-2 hover:bg-gray-200" href="#">Something else here</a>
                                    </li>
                                </ul>
                            {{-- <a class="px-3 py-2 flex text-xs uppercase leading-snug" href="{{ route('profile') }}">Profile</a> --}}
                        </li>
                        <li class="nav-item">
                            <a class="px-3 py-2 flex text-xs uppercase leading-snug" href="{{ route('profile') }}">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="px-3 py-2 flex text-xs uppercase leading-snug" href="{{ route('profile') }}">Contact</a>  
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <div class="background-image">
        <div class="container mx-auto px-6 py-8">
            <h1 class="text-3xl text-gray-800 font-bold">Diskominfo Kota Jambi</h1>
            <p class="mt-4 text-gray-600">This is a simple Laravel application with a navigation bar.</p>
        </div>
    </div>

    <!-- Tambahkan script JS Anda di sini, misalnya Bootstrap -->
    <!-- Tailwind CSS tidak memerlukan JavaScript tambahan -->
</body>
</html>
