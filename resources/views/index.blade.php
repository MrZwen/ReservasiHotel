@extends('layouts/main')

@section('title', 'Landing Page')

@section('content')
    {{-- Hero Section --}}
    <section class="">
        <div class="bg-gray-200 py-5">
            <div class="container mx-5 flex flex-wrap items-center justify-center">
                <div class="mx-auto">
                    <h1 class="font-[lora] font-bold text-[62px]">Enjoy A Lexury <p>Experience</p></h1>
                    <p class="text-1xl text-gray-500">welcome to the place where luxury meets affordabilty</p>
                </div>
                <div class=""><img src='{{"images/hero.png"}}' alt="" class="w-[624px] h-[936px] rounded-t-full"></div>
                </div>
                    <div
                        class="container px-[30px] py-6 max-w-[1170px] mx-auto flex flex-col lg:flex-row justify-between mt-8 gap-4 lg:gap-x-3 relative lg:-top-16 lg:shadow bg-white lg:bg-transparent backdrop-blur rounded-lg">
                        <div>
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guest</label>
                            <input type="text" id="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <div>
                            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                            <input type="date" id="date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                    <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Type</label>
                    <select name="room" id="room" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="Deluxe">Deluxe</option>
                        <option value="Premium">Premium</option>
                        <option value="Standart">Standart</option>
                    </select>
                </div>
                <button type="button"
                    class="bg-orange-902 p-3 rounded-lg text-black font-[poppins] font-medium hover:bg-orange-901 hover:text-white ">
                    <a href="">Booking Room</a>
                </button>
            </div>
        </div>
    </section>
    {{-- End Hero Section --}}
    {{-- Content Section --}}
    <section class="container flex flex-col-reverse sm:flex-row">
        <div class="w-full sm:w-1/2 mb-8 sm:mb-0 order-2 sm:order-1 relative">
            <img src="{{"images/hero.png"}}" alt="Gambar About Section" class="w-full h-auto max-h-96 sm:max-h-[750px] object-cover">
        </div>
        <div class="w-full sm:w-1/2 p-4 sm:p-10 order-1 sm:order-2 relative ml-auto">
            <h1 class="font-lora font-bold text-3xl sm:text-5xl mb-3 sm:mb-5">Ordinary Best Western 5 Stars Hotel Since 1998</h1>
            <p class="text-base sm:text-lg text-gray-500 mb-3 sm:mb-5">
                Each room at this hotel is decorated in detail and equipped with the finest modern amenities. The rooms are usually equipped with comfortable beds with high-quality linens, luxurious bath facilities, state-of-the-art technological equipment, and private balconies offering spectacular views.
            </p>
            <p class="text-base sm:text-lg text-gray-500 mb-3 sm:mb-5">
                Overall, this hotel is a very special place to stay and promises an unforgettable stay, decorated with luxury, the best service, and facilities that pamper guests.
            </p>
            <button class="my-8 sm:my-20">
                <a href="" class="bg-orange-902 p-4 sm:p-5 rounded-lg font-poppins font-semibold text-white transition hover:bg-orange-901">Learn More</a>
            </button>
        </div>
    </section>
@endsection