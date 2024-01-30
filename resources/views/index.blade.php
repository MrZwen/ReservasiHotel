@extends('layouts/main')

@section('title', 'Landing Page')

@section('content')
    <!-- Navbar -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.html" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="" class="h-8" alt="" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ReservaStay</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Room & Suites</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blog</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="">
        <div class="container mx-auto px-4 py-32 mt-6">
            <div class="flex flex-wrap grid grid-cols-12 justify-center items-center">
                <div class="col-span-12 col-span-4 order-2">
                    <div class="text-start">
                        <h1 class="font-bold text-4xl text-7xl text-[24px] leading-tight text-center mt-4">Enjoy A Lexury Experience</h1>
                        <p class="text-center text-gray-700 text-text-[18px] opacity-50 mt-2">Indulge in Opulence: Elevate Your Lifestyle with a Luxurious Experience</p>
                        <div class="flex flex-col flex-row justify-center gap-4 py-6">
                            <a href="/register" class="py-3 px-8 bg-yellow-500 text-white text-center rounded-full hover:opacity-80">Get Started</a>
                            <a href="/login" class="py-3 px-8 bg-white border border-[#C7923E] text-gray-900 font-medium text-center rounded-full hover:bg-orange-902 hover:text-white">Login</a>
                        </div>
                        <div class="flex text-start justify-center items-center space-x-6 mt-4 mb-6">
                            <i class="fa-brands fa-whatsapp"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-x-twitter"></i>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 col-span-8 mt-4 order-1">
                    <div>
                        <img src="img/hero-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section>
        <div class="container mx-auto px-8 py-32 pt-8">
            <div class="flex flex-wrap grid grid-cols-12 justify-center items-center pt-24">
                <div class="col-span-12 col-span-8 w-full mt-4 px-4 self-center">
                    <div class="mr-12 order-2">
                        <img src="img/about-img.png" class="rounded-sm" alt="">
                    </div>
                </div>
                <div class="col-span-12 col-span-4 w-full px-4 self-end">
                    <div class="basis-[55%] md:text-start text-start">
                        <h1 class="font-bold text-3xl text-7xl md:text-[24px] leading-tight mt-4 mb-3 w-[473px] text-slate-900 font-['Lora'] tracking-tight">
                            Ordinary Best Western 5 Stars Hotel Since 1998
                        </h1>
                        <p class="text-left text-[18px] text-gray-700 text-lg md:text-[18px] opacity-50 mt-2">
                            Each room at this hotel is decorated in detail and equipped with the finest modern amenities. The rooms are usually equipped with comfortable beds with high-quality linens, luxurious bath facilities, state-of-the-art technological equipment, and private balconies offering spectacular views.
                        </p> 
                        <p class="text-left text-gray-700 text-lg md:text-[18px] opacity-50 mt-2">
                            Overall, this hotel is a very special place to stay and promises an unforgettable stay, decorated with luxury, the best service, and facilities that pamper guests.
                        </p>
        
                        <div class="flex justify-start gap-4 py-6">
                            <button class="py-3 px-8 bg-yellow-500 text-white text-base rounded-full">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Step Book -->
    <section class="bg-[#27343F] p-8">
        <div class="container mx-auto justify-center items-center text-center">
            <div class="p-4 rounded-lg md:p-8  mt-14">
                <h1 class="font-bold text-3xl leading-tight text-white mb-2">How to Book</h1>
                <p class="text-gray-400">We provide an easy and efficient way to book rooms.</p>
                <dl class="lg:grid max-w-screen-xl justify-center grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-3 dark:text-white sm:p-8">
                    <div class="flex flex-col mb-2 items-center">
                        <dt class="mb-2 text-3xl text-white font-extrabold"><i class="fa-solid fa-lock" style="color: #ffffff;"></i></dt>
                        <dd class="text-gray-500 dark:text-gray-400">Verification Account</dd>
                    </div>
                    <div class="flex flex-col mb-2 items-center">
                        <dt class="mb-2 text-3xl font-extrabold text-white"><i class="fa-regular fa-folder" style="color: #ffffff;"></i></dt>
                        <dd class="text-gray-500 dark:text-gray-400">Fill Data Book</dd>
                    </div>
                    <div class="flex flex-col items-center">
                        <dt class="mb-2 text-3xl font-extrabold text-white"><i class="fa-solid fa-money-bill" style="color: #ffffff;"></i></dt>
                        <dd class="text-gray-500 dark:text-gray-400">Get The Payment</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section>
        <div class="container mx-auto lg:h-screen mt-12">
            <div class="flex justify-between mt-4 pt-8">
                <div>
                    <h1 class="font-bold text-3xl mb-2">Our Room & Suites</h1>
                    <p class="text-sm">Choose a hotel in your category</p>
                </div>
                <div>
                    <button class="px-6 py-2 lg:p-4 bg-yellow-500 text-white border justify-center items-center inline-flex">See All</button>
                </div>
            </div>
            <div class="lg:flex items-center justify-center text-center gap-12 mt-8">
                <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-80" src="img/product1.png" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Deluxe Room</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">The Deluxe room at the hotel is a luxurious space that offers extra comfort. Designed with elegant furniture, comfortable beds, and modern amenities like Wi-Fi and flat-screen televisions.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-80" src="img/product1.png" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Standard Room</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Standard type rooms in hotels are comfortable and functional accommodation spaces. Designed simply but efficiently, this room provides a comfortable bed, basic facilities.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-80" src="img/product3.png" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Premium Room</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Premium type rooms in hotels are rooms that combine high comfort with a touch of luxury. With its elegant design, quality furniture and additional facilities, this room creates a special atmosphere for guests.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-80" src="img/product4.png" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Special Room Couple</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Escape into an enchanting world of intimacy and luxury with our Special Room Couple package. Designed for those seeking a romantic retreat, this carefully curated experience promises an unforgettable escape.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About 2 -->
    <section>
        <div class="container mx-auto px-8 py-32 pt-8">
            <div class="flex flex-wrap grid grid-cols-12 justify-center items-center pt-24">
                <div class="col-span-12 col-span-4 w-full px-4 self-end">
                    <div class="basis-[55%] md:text-start text-start">
                        <h1 class="font-bold text-3xl text-7xl md:text-[24px] leading-tight mt-4 mb-3 w-[473px] text-slate-900 font-['Lora'] tracking-tight">
                            La Vie Hotel
                        </h1>
                        <p class="text-left text-[18px] text-lg md:text-[18px] mt-2">
                            La Vie Hotel, tersembunyi di tengah hutan, menawarkan pengalaman menginap yang mewah dengan pemandangan sungai yang mengalir lembut, menciptakan atmosfer damai dan alami bagi para tamu.
                        </p>
                        <div class="mt-6 text-gray-400 text-2xl font-bold leading-[28.80px] tracking-tight">
                            <p>Infinity swing pool</p>
                            <p>Rolio Club</p>
                            <p>In Room Dinning</p>
                        </div>
                        <div class="flex justify-start gap-4 py-6">
                            <button class="py-3 px-8 bg-yellow-500 text-white text-base rounded-full">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 col-span-8 w-full mt-4 px-4 self-center">
                    <div class="mr-12 order-2">
                        <img src="img/hotelview.png" class="rounded-sm" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About 3 -->
    <section>
        <div class="container mx-auto px-8 py-32 pt-8">
            <div class="flex flex-wrap grid grid-cols-12 justify-center items-center pt-24">
                <div class="col-span-12 col-span-8 w-full mt-4 px-4 self-center">
                    <div class="mr-12 order-2">
                        <img src="img/about3.png" class="rounded-sm" alt="">
                    </div>
                </div>
                <div class="col-span-12 col-span-4 w-full px-4 self-end">
                    <div class="basis-[55%] md:text-start text-start">
                        <h1 class="font-bold text-3xl text-7xl md:text-[24px] leading-tight mt-4 mb-3 w-[473px] text-slate-900 font-['Lora'] tracking-tight">
                            Jazucci Private Spa
                        </h1>
                        <p class="text-left text-[18px] text-lg md:text-[18px] mt-2">
                            Jazucci Private Spa adalah tempat pelarian eksklusif yang menawarkan pengalaman relaksasi tanpa tanding dengan fasilitas jacuzzi pribadi, memadukan kemewahan spa dan privasi untuk menciptakan momen-momen penuh kenyamanan dan ketenangan bagi para tamu.
                        </p>
                        <div class="flex justify-start gap-4 py-6">
                            <button class="py-3 px-8 bg-yellow-500 text-white text-base rounded-full">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About 4 -->
    <section>
        <div class="container mx-auto px-8 py-32 pt-8">
            <div class="flex flex-wrap grid grid-cols-12 justify-center items-center pt-24">
                <div class="col-span-12 col-span-4 w-full px-4 self-end">
                    <div class="basis-[55%] md:text-start text-start">
                        <h1 class="font-bold text-3xl text-7xl md:text-[24px] leading-tight mt-4 mb-3 w-[473px] text-slate-900 font-['Lora'] tracking-tight">
                            Ocenia Waterpool
                        </h1>
                        <p class="text-left text-[18px] text-lg md:text-[18px] mt-2">
                            Ocenia Waterpool adalah sebuah kolam renang yang menakjubkan yang tersembunyi di tengah hutan, menawarkan pengalaman renang yang mempesona di bawah naungan pepohonan hijau yang lebat. Dengan air yang jernih dan sejuk, kolam renang ini memberikan kesan menyatu dengan alam sekitar. Pemandangan luar biasa dari tepi kolam memperlihatkan keindahan alam hutan yang memukau, menciptakan suasana tenang dan memanjakan bagi setiap pengunjung yang mencari ketenangan di dalam hutan yang asri.
                        </p>
                        <div class="flex justify-start gap-4 py-6">
                            <button class="py-3 px-8 bg-yellow-500 text-white text-base rounded-full">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-8 w-full mt-4 px-4 self-center">
                    <div class="lg:mr-12 order-2">
                        <img src="img/about4.png" class="rounded-sm" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="text-white mt-8">
        <div class="bg-gray-800 flex flex-wrap justify-center items-center">
            <!-- Contact Section -->
            <div class="mx-auto p-8">
                <h1 class="text-2xl font-semibold font-serif leading-8 mb-2">If you have any question, Let us help you!</h1>
                <p class="text-sm font-normal leading-6 mb-6">is a friendly invitation from us to provide assistance in answering questions or providing the information you need.</p>
                <div class="flex gap-4">
                    <input class="rounded-md p-2 border border-gray-600" type="text" placeholder="Input your email here">
                    <button class="px-4 py-2 bg-yellow-500 rounded-md"><i class="fa-solid fa-paper-plane"></i></button>
                </div>
            </div>
    
            <!-- About ReservaStay Section -->
            <div class="p-8 mx-auto">
                <h1 class="text-yellow-400 text-lg font-normal font-sans uppercase mb-2">ReservaStay</h1>
                <p class="text-base font-normal leading-6 mb-6">Hotel reservation websites that simplify finding, selecting, and securing your dream accommodation quickly and efficiently.</p>
                
                <!-- Navigation Links -->
                <div class="flex flex-wrap justify-between">
                    <div class="mb-6">
                        <h3 class="text-white font-medium mb-1">Home</h3>
                        <ul class="text-sm">
                            <li>Room & Suites</li>
                            <li>Packages</li>
                            <li>Voucher</li>
                            <li>Promo</li>
                        </ul>
                    </div>
                    <div class="px-8 mb-6">
                        <h3 class="text-white font-medium mb-1">About Us</h3>
                        <ul class="text-sm">
                            <li>Restaurant & Bar</li>
                            <li>Events</li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                    <div class="px-8 mb-6">
                        <h3 class="text-white font-medium mb-1">Our Team</h3>
                        <ul class="text-sm">
                            <li>Blog</li>
                            <li>Contact Us</li>
                            <li>Careers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection