{{-- ヘッダーのコンポーネント --}}
<nav x-data="{ open: false }">

    <!-- Primary Navigation Menu -->
<header class="max-w-7xl mx-auto pl-2 sm:px-6 lg:px-8">
    <div class="flex justify-between h-9 ">
        <div class="flex items-center">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('packages.index') }}">
                    <x-application-logo class="block h-9 w-auto fill-current" />
                </a>
            </div>
            <div class="flex items-center">
                <h2>Shokunin</h2>
            </div>
        </div>

        <!-- ハンバーガーメニューのトグル -->
        <button id="menuToggle" class="block lg:hidden">
            <svg class="w-10 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

<!-- ナビゲーションメニュー -->
<nav id="navMenu" class="hidden lg:flex lg:items-center lg:w-auto">
    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">About</a>
    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Services</a>
    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Contact</a>
    <form id="logoutForm" method="POST" action="{{ route('logout') }}">
        @csrf
    </form>
    <a href="#" onclick="document.getElementById('logoutForm').submit();" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Logout</a>
</nav>

</header>

{{-- ハンバーガーメニューの開閉処理 --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    menuToggle.addEventListener('click', function() {
        navMenu.classList.toggle('hidden');
    });
});
</script>

</nav>
