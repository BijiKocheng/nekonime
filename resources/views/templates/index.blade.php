<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-md p-5 font-mono bg-gray-300">
        <div class="flex justify-between px-5 py-2">
            <div class="w-1/2">
                <h1 class="text-xl">Nekonime</h1>
                <i class="fas fa-address-book"></i>
            </div>
            <div class="hidden sm:flex space-x-5">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Contact</a>
                @auth
                    <a href="">Dashboard</a>
                    @else
                    <a href="">Login</a>
                    <a href="">Register</a>
                @endauth
            </div>
        </div>
    </div>
    @yield('content')
</body>
</html>