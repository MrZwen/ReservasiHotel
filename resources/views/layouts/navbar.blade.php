<!-- Navbar -->
<header class="shadow-md fixed top-0 w-full bg-white z-10">
    <div class="container mx-auto px-6 py-3 lg:py-4">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold">ReservaStay</h1>
            <nav class="hidden md:flex items-center gap-x-8">
                <a href="#" class="hover:text-gray-700">Home</a>
                <a href="#" class="hover:text-gray-700">About</a>
                <a href="#" class="hover:text-gray-700">Our Room</a>
                <a href="#" class="hover:text-gray-700">Blog</a>
                <a href="#" class="hover:text-gray-700">Contact</a>
                @guest
                    <div class="flex gap-x-4">
                        <button class="bg-yellow-500 px-6 py-2">
                            <a class="no-underline text-white" href="/login">Login</a>
                        </button>
                    </div>
                @endguest
                @auth
                    <div class="relative">
                        <button type="button" class="flex items-center text-sm bg-gray-800 text-white px-4 py-2 rounded"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            Hello, {{ Auth::user()->username }}
                        </button>
                        <div class="hidden absolute right-0 mt-2 w-48 bg-white divide-y divide-gray-100 rounded-lg shadow-lg"
                            id="user-dropdown">
                            <ul class="py-1" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="{{ route('profile-user') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('dashboard-user') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                                </li>
                                <li>
                                    <a href="/logout"
                                        class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endauth
            </nav>
            <div class="md:hidden">
                <button id="toggleBtn" type="button"
                    class="text-gray-800 hover:bg-yellow-500 hover:text-white focus:outline-none focus:bg-gray-700 focus:text-white px-3 py-2 rounded-md">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- mobile view -->
    <div class="hidden md:hidden" id="menu">
        <div class="px-6 pb-3 space-y-1 bg-white">
            <a href="#" class="block text-gray-700 hover:bg-gray-200 rounded-md px-3 py-2">Home</a>
            <a href="#" class="block text-gray-700 hover:bg-gray-200 rounded-md px-3 py-2">About</a>
            <a href="#" class="block text-gray-700 hover:bg-gray-200 rounded-md px-3 py-2">Our Room</a>
            <a href="#" class="block text-gray-700 hover:bg-gray-200 rounded-md px-3 py-2">Blog</a>
            <a href="#" class="block text-gray-700 hover:bg-gray-200 rounded-md px-3 py-2">Contact</a>
            @guest
                <button class="w-full bg-yellow-500 text-white rounded-md px-6 py-2 mt-3">
                    <a class="no-underline text-white" href="/login">Login</a>
                </button>
            @endguest
        </div>
    </div>
</header>

<script>
    const toggleMenuBtn = document.getElementById("toggleBtn");
    const menuItems = document.getElementById("menu");
    const userMenuButton = document.getElementById("user-menu-button");
    const userDropdown = document.getElementById("user-dropdown");

    toggleMenuBtn.addEventListener("click", function() {
        menuItems.classList.toggle("hidden");
    });

    if (userMenuButton) {
        userMenuButton.addEventListener("click", function() {
            userDropdown.classList.toggle("hidden");
        });
    }
</script>
