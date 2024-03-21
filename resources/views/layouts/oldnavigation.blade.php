{{-- ヘッダーのコンポーネント --}}
<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <header class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-9">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('packages.index') }}">
                        <x-application-logo class="block h-9 w-auto fill-current" />
                    </a>
                </div>
                <div class="flex items-center">
                    <h2>Shokunin</h2>
                </div>

                <!-- ハンバーガーメニューのトグル -->
                <button class="block lg:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>

                <!-- ナビゲーションメニュー -->
                <nav class="hidden lg:flex lg:items-center lg:w-auto">
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Home</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">About</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Services</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Contact</a>
                </nav>
            </div>
        </div>

    </header>
</nav>
