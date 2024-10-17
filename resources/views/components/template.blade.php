<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
</head>
<body class="@yield('body-class')">
    @include('components.nav')
    @section('title', 'content')
    @yield('content')
    <footer class="bg-gradient-to-r from-blue-500 to-blue-300 text-white py-8 bottom-0">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h3 class="text-3xl font-semibold">ContactApp</h3>
                    <p class="text-lg mt-1">Provides organization data in your company</p>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold">Contact Us</h3>
                    <p class="mt-2">Email: support@example.com</p>
                    <p>Phone: +1234567890</p>
                </div>
            </div>
        </div>
        <div class="w-full border-t border-gray-300"></div>
        <div class="text-base text-center mt-4">
            <p class="text-sm">&copy; {{ date('Y') }} ContactApp. Faculty of Computer Science</p>
        </div>
    </footer>
    
</body>
</html>
