<aside class="w-72 h-screen bg-gray-700 shadow-md fixed">
    <div class="container mx-auto px-6 py-6">
        <div class="flex flex-col text-white">
            <h1 class="text-3xl font-bold">ReservaStay</h1>
            <hr class="my-3">
            <div class="flex-1">
                <ul class="space-y-3">
                    <li>
                        <a class="no-underline text-white flex items-center" href="{{ route('dashboard-user') }}">
                            <i class="fa-solid fa-home mr-3"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a class="no-underline text-white flex items-center" href="{{ route('profile-user') }}">
                            <i class="fa-solid fa-user mr-3"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a class="no-underline text-white flex items-center" href="{{ route('booking') }}">
                            <i class="fa-solid fa-bars mr-3"></i> Booking
                        </a>
                    </li>
                    <li>
                        <a class="no-underline text-white flex items-center" href="/logout">
                            <i class="fa-solid fa-right-from-bracket mr-3"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>