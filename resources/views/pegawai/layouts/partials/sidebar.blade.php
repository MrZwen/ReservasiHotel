<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
      <a
        class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
        href="#"
      >
        Windmill
      </a>
      <ul class="mt-6">
        <li  class="relative px-6 py-3">
          @if(request()->is('pegawai'))
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
          @endif
          <a
            class="inline-flex items-center w-full text-sm font-semibold
            @if(request()->is('pegawai')) text-gray-800 dark:text-gray-200 @else text-gray-500 dark:bg-gray-600 @endif
            transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
            href="/pegawai"
          >
            <i class="fa-solid fa-house"></i>
            <span class="ml-4">Profile</span>
          </a>
        </li>
      </ul>
      <ul>
        <li class="relative px-6 py-3">
          @if(request()->is('pegawai-kamar'))
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
          @endif
          <a
            class="inline-flex items-center w-full text-sm font-semibold
            @if(request()->is('pegawai-kamar')) text-gray-800 dark:text-gray-200 @else text-gray-500 dark:bg-gray-600 @endif
            transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
            href="pegawai-kamar"
          >
            <i class="fa-solid fa-clipboard-list text-lg"></i>
            <span class="ml-4">Kamar</span>
          </a>
        </li>
      </ul>
      <ul>
        <li class="relative px-6 py-3">
          @if(request()->is('pegawai-user'))
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
          @endif
          <a
            class="inline-flex items-center w-full text-sm font-semibold
            @if(request()->is('pegawai-user')) text-gray-800 dark:text-gray-200 @else text-gray-500 dark:bg-gray-600 @endif
            transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
            href="/pegawai-user"
          >
          <i class="fa-solid fa-user"></i>
            <span class="ml-4">Users</span>
          </a>
        </li>
      </ul>
      <ul>
        <li class="relative px-6 py-3">
          @if(request()->is('pegawai-user'))
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
          @endif
          <a
            class="inline-flex items-center w-full text-sm font-semibold
            @if(request()->is('transaksi')) text-gray-800 dark:text-gray-200 @else text-gray-500 dark:bg-gray-600 @endif
            transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
            href="/transaksi"
          >
          <i class="fa-solid fa-user"></i>
            <span class="ml-4">Transkasi</span>
          </a>
        </li>
      </ul>
    </div>
</aside>
  
  
 <!-- Mobile sidebar -->
      <!-- Backdrop -->
      <div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
      ></div>
<aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu">
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#"
          >
            Windmill
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              @if(request()->is('admin'))
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true"></span>
              @endif
              <a
                class="inline-flex items-center w-full text-sm font-semibold
                @if(request()->is('admin')) text-gray-800 dark:text-gray-200 @else text-gray-500 dark:bg-gray-600 @endif
                transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="/admin"
              >
                  <i class="fa-solid fa-house"></i>
                <span class="ml-4">Profile</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              @if(request()->is('kamar'))
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
              @endif
              <a
                class="inline-flex items-center w-full text-sm font-semibold
                @if(request()->is('kamar')) text-gray-800 dark:text-gray-200 @else text-gray-500 dark:bg-gray-600 @endif
                transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="/kamar"
              >
              <i class="fa-solid fa-clipboard-list text-lg"></i>
                <span class="ml-4">Kamar</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              @if(request()->is('user'))
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
              @endif
              <a
                class="inline-flex items-center w-full text-sm font-semibold
                @if(request()->is('user')) text-gray-800 dark:text-gray-200 @else text-gray-500 dark:bg-gray-600 @endif
                transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="/user"
              >
                <i class="fa-solid fa-user"></i>
                <span class="ml-4">Users</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              @if(request()->is('user'))
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
              @endif
              <a
                class="inline-flex items-center w-full text-sm font-semibold
                @if(request()->is('transaksi')) text-gray-800 dark:text-gray-200 @else text-gray-500 dark:bg-gray-600 @endif
                transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="/transaksi"
              >
                <i class="fa-solid fa-user"></i>
                <span class="ml-4">Transaksi</span>
              </a>
            </li>
          </ul>
        </div>
</aside>