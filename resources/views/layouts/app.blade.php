{{-- <x-app-layout>のコンポーネントとして使用 --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

{{-- Chatbot用 --}}
<style>
@media (max-width: 768px) { /* Tailwindのsmブレークポイントに相当 */
    .botman-chat-widget-container {
        position: fixed!important;
        bottom: 0!important;
        left: 0!important;
        width: 100%!important;
        height: 50%!important; /* 画面の下半分に表示 */
        z-index: 9999!important;
    }
}
</style>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif


        <!-- Page Content -->
        {{-- <main>
            {{ $slot }}
        </main> --}}
        <main class="bg-cover bg-center" style="background-image: url('{{ url('/storage/japanese-paper.jpg') }}');">
            {{ $slot }}
        </main>

        <!-- Page footer -->
        <fotter class="px-0">
            @include('layouts.footer')
        </fotter>

    </div>
</body>

</html>
