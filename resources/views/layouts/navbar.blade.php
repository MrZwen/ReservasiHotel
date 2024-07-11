 <!-- Navbar -->
 <header class="shadow-md fixed top-0 w-full bg-white z-10">
     <div class="container mx-auto px-6 py-4">
         <div class="flex justify-between items-center">
             <h1 class="text-3xl font-bold">ReservaStay</h1>
             <nav class="flex items-center gap-x-8">
                 <a href="">Home</a>
                 <a href="">About</a>
                 <a href="">Our Room</a>
                 <a href="">Blog</a>
                 <a href="">Contact</a>
                 @guest
                     <div class="flex gap-x-4">
                         <button class="bg-yellow-500 px-6 py-2">
                             <a class="no-underline text-white" href="/login">Login</a>
                         </button>
                     </div>
                 @endguest
                 @auth
                     <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                         <button type="button"
                             class="flex text-sm bg-gray-800 md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 text-white px-8 py-2"
                             id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                             data-dropdown-placement="bottom">
                             <h3>Hello, {{ Auth::user()->username }}</h3>
                         </button>
                         <!-- Dropdown menu -->
                         <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                             id="user-dropdown">
                             <ul class="py-2" aria-labelledby="user-menu-button">
                                 <li>
                                     <a href=""
                                         class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                                 </li>                                 
                                 <li>
                                     <a href="{{ route('dashboard-user') }}"
                                         class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                                 </li>                                 
                                 <li>
                                     <a href="/logout"
                                         class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</a>
                                 </li>
                             </ul>
                         </div>
                         <button data-collapse-toggle="navbar-user" type="button"
                             class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                             aria-controls="navbar-user" aria-expanded="false">
                             <span class="sr-only">Open main menu</span>
                             <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 17 14">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M1 1h15M1 7h15M1 13h15" />
                             </svg>
                         </button>
                     </div>
                 @endauth
             </nav>
         </div>
     </div>
 </header>
