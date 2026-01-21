<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Ilmu Pedia')</title>
    {{-- Panggil CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Font Poppins --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Poppins', sans-serif; } </style>
</head>
<body class="bg-white text-gray-800 antialiased flex flex-col min-h-screen">
    
    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Konten Berubah-ubah --}}
    <div class="flex-grow">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('partials.footer')
</body>
</html>