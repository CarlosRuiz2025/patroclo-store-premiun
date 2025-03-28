<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patroclo Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
</head>
<body class="bg-gradient-to-br from-gray-100 via-gray-300 to-gray-500 font-sans antialiased text-gray-800 min-h-screen flex flex-col">
    
    <!-- Header -->
    <header>
        @include('partials.menubar')
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900/90 text-white py-12 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-400">© 2025 Patroclo Store. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>