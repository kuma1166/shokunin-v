<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOKUNIN</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex flex-col h-screen">
        <div class="h-1/3 top-color-red"></div>

        <div class="absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <img src="{{ url('/storage/newlogo.png') }}" class="w-14 h-14 rounded-full" alt="logo">
        </div>

        <div class="maintop-image" style="background-image: url({{ url('/storage/shutterstock_1543757588.jpg') }})">
            <div class="flex items-center justify-center items-end h-2/3">
                <a href="{{ route('packages.index') }}">
                    <button class="px-9 py-3 ">Let's start WOW!!</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
