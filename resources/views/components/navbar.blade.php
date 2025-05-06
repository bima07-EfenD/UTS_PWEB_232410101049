<nav class="bg-black bg-opacity-80 text-white px-4 sm:px-6 py-3 sm:py-4 flex justify-between items-center fixed w-full top-0 left-0 z-50">
    <div class="font-bold text-lg sm:text-xl">Sukosari Bersemi</div>

    <button id="mobile-menu-button" class="sm:hidden text-white focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>

    <ul class="hidden sm:flex gap-4 sm:gap-6">
        <li><a href="{{ route('dashboard', ['username' => request('username')]) }}" class="hover:underline text-sm sm:text-base">Dashboard</a></li>
        <li><a href="{{ route('profile', ['username' => request('username')]) }}" class="hover:underline text-sm sm:text-base">Profile</a></li>
    </ul>

    <div id="mobile-menu" class="hidden sm:hidden absolute top-full left-0 w-full bg-black bg-opacity-90 py-2">
        <ul class="flex flex-col items-center gap-4">
            <li><a href="{{ route('dashboard', ['username' => request('username')]) }}" class="hover:underline text-sm">Dashboard</a></li>
            <li><a href="{{ route('profile', ['username' => request('username')]) }}" class="hover:underline text-sm">Profile</a></li>
        </ul>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>
