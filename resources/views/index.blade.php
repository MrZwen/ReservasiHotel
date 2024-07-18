@extends('layouts.main')

@section('title', 'Landing Page')

@section('content')
    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Hero Section -->
    <section class="">
        <div class="container mx-auto px-4 mt-20 lg:mt-32">
            <div class="flex flex-col lg:flex lg:flex-row justify-center items-center">
                <div class="mb-4">
                    <h1 class="font-bold text-4xl lg:text-6xl leading-tight mt-4">Enjoy A Lexury Experience</h1>
                    <p class="text-gray-700 text-text-[20px] opacity-50 mt-2">Experience the epitome of elegance with
                        personalized services and exquisite surroundings.</p>
                    <div>
                        <button class="bg-yellow-500 text-white font-medium px-6 py-2 mt-4">Get Started</button>
                    </div>
                    <div class="flex text-start space-x-6 mt-4 mb-6">
                        <i class="fa-brands fa-whatsapp"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-x-twitter"></i>
                    </div>
                </div>
                <div>
                    <img src="img/hero-img.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section>
        <div class="container mx-auto mt-14 lg:mt-28">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="font-bold text-3xl mb-2">Our Room & Suites</h1>
                    <p class="text-sm">Choose a hotel in your category</p>
                </div>
                <div>
                    <button
                        class="px-6 py-2 lg:p-4 bg-yellow-500 text-white border justify-center items-center inline-flex">See
                        All</button>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 justify-center text-center gap-8 px-14 mt-8">
                <div
                    class="max-w-[350px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-80 w-full" src="img/product1.png" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Deluxe Room
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">The Deluxe room at the hotel is a
                            luxurious space that offers extra comfort. Designed with elegant furniture, comfortable beds,
                            and modern amenities like Wi-Fi and flat-screen televisions.</p>
                        <a href="/costumer"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Booking now!
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="max-w-[350px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-80 w-full" src="img/product1.png" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Standard Room
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Standard type rooms in hotels are
                            comfortable and functional accommodation spaces. Designed simply but efficiently, this room
                            provides a comfortable bed, basic facilities.</p>
                        <a href="/costumer"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Booking now!
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="max-w-[350px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-80 w-full" src="img/product3.png" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Premium Room
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Premium type rooms in hotels are rooms
                            that combine high comfort with a touch of luxury. With its elegant design, quality furniture and
                            additional facilities, this room creates a special atmosphere.</p>
                        <a href="/costumer"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Booking now!
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="max-w-[350px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-80 w-full" src="img/product4.png" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Special Room
                                Couple</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Escape into an enchanting world of
                            intimacy and luxury with our Special Room Couple package. Designed for those seeking a romantic
                            retreat, this carefully curated experience.</p>
                        <a href="/costumer"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Booking now!
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Step Book -->
    <section class="bg-[#27343F] py-12 mt-24">
        <div class="container mx-auto justify-center items-center text-center">
            <div class="p-3 rounded-lg md:p-8 ">
                <h1 class="font-bold text-4xl leading-tight text-white mb-2">How to Book</h1>
                <p class="text-gray-400 mb-4">We provide an easy and efficient way to book rooms.</p>
                <dl
                    class="lg:grid max-w-screen-xl justify-center grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-3 dark:text-white sm:p-8">
                    <div class="flex flex-col mb-2 items-center">
                        <dt class="mb-2 text-3xl text-white font-extrabold"><i class="fa-solid fa-lock"
                                style="color: #ffffff;"></i></dt>
                        <dd class="text-2xl text-white dark:text-gray-400 mb-2">Verification Account</dd>
                        <p class="text-white mb-3">Melakukan login, apabila belum punya akun anda dapat registrasi terlebih
                            dahulu</p>
                    </div>
                    <div class="flex flex-col mb-2 items-center">
                        <dt class="mb-2 text-3xl font-extrabold text-white"><i class="fa-regular fa-folder"
                                style="color: #ffffff;"></i></dt>
                        <dd class="text-2xl text-white dark:text-gray-400 mb-2">Fill Data Book</dd>
                        <p class="text-white mb-3">Melakukan pemilihan kamar dengan mengisi form booking</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <dt class="mb-2 text-3xl font-extrabold text-white"><i class="fa-solid fa-money-bill"
                                style="color: #ffffff;"></i></dt>
                        <dd class="text-2xl text-white dark:text-gray-400 mb-2">Get The Payment</dd>
                        <p class="text-white">Mendapatkan pembayaran, setelah selesai melakukan pemmesanan kamar</p>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- About -->
    <section>
        <div class="px-6 mt-12 md:mt-36">
            <div class="flex flex-col lg:flex-row justify-center items-center gap-8 lg:gap-14">
                <img src="img/about-img.png" class="rounded-sm w-full lg:w-auto lg:max-w-md" alt="">
                <div class="max-w-lg lg:w-[473px]">
                    <h1
                        class="font-bold text-2xl md:text-3xl lg:text-4xl leading-tight mt-4 mb-3 text-slate-900 font-['Lora'] tracking-tight">
                        Ordinary Best Western 5 Stars Hotel Since 1998
                    </h1>
                    <p class="text-left text-base md:text-lg lg:text-[18px] mt-2">
                        Each room at this hotel is decorated in detail and equipped with the finest modern amenities. The
                        rooms are usually equipped with comfortable beds with high-quality linens, luxurious bath
                        facilities, state-of-the-art technological equipment, and private balconies offering spectacular
                        views.
                    </p>
                    <p class="text-left text-base md:text-lg lg:text-[18px] mt-2">
                        Overall, this hotel is a very special place to stay and promises an unforgettable stay, decorated
                        with luxury, the best service, and facilities that pamper guests.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- About 2 -->
    <section>
        <div class="px-6 mt-12 md:mt-36">
            <div class="flex flex-col lg:flex-row justify-center items-center gap-8 lg:gap-14">
                <div class="max-w-lg lg:w-[473px]">
                    <h1
                        class="font-bold text-2xl md:text-3xl lg:text-4xl leading-tight mt-4 mb-3 text-slate-900 font-['Lora'] tracking-tight">
                        Ocenia Waterpool
                    </h1>
                    <p class="text-left text-base md:text-lg lg:text-[18px] mt-2">
                        Ocenia Waterpool adalah sebuah kolam renang yang menakjubkan yang tersembunyi di tengah hutan,
                        menawarkan pengalaman renang yang mempesona di bawah naungan pepohonan hijau yang lebat. Dengan
                        air yang jernih dan sejuk, kolam renang ini memberikan kesan menyatu dengan alam sekitar.
                        Pemandangan luar biasa dari tepi kolam memperlihatkan keindahan alam hutan yang memukau,
                        menciptakan suasana tenang dan memanjakan bagi setiap pengunjung yang mencari ketenangan di
                        dalam hutan yang asri.
                    </p>
                </div>
                <img src="img/about4.png" class="rounded-sm w-full lg:w-auto lg:max-w-md" alt="">
            </div>
        </div>
    </section>

    <!-- About 3 -->
    <section>
        <div class="px-6 mt-12 md:mt-36">
            <div class="flex flex-col lg:flex-row justify-center items-center gap-8 lg:gap-14">
                <img src="img/about3.png" class="rounded-sm w-full lg:w-auto lg:max-w-md" alt="">
                <div class="max-w-lg lg:w-[473px]">
                    <h1
                        class="font-bold text-2xl md:text-3xl lg:text-4xl leading-tight mt-4 mb-3 text-slate-900 font-['Lora'] tracking-tight">
                        Jazucci Private Spa
                    </h1>
                    <p class="text-left text-[18px] text-lg md:text-[18px] mt-2">
                        Jazucci Private Spa adalah tempat pelarian eksklusif yang menawarkan pengalaman relaksasi tanpa
                        tanding dengan fasilitas jacuzzi pribadi, memadukan kemewahan spa dan privasi untuk menciptakan
                        momen-momen penuh kenyamanan dan ketenangan bagi para tamu.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer Section -->
    @include('user.layouts.footer')
@endsection
