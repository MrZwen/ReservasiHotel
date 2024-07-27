@extends('layouts.main')

@section('title', 'Dashboard Home')

<style>
    section {
        height: 95vh;
        background-size: cover;
        background-position: center;
        object-fit: cover;
    }
</style>

@section('content')

    {{-- navbar --}}
    @include('layouts.navbar')

    {{-- hero section --}}
    <section style="background-image: url('{{ asset('img/hero.jpg') }}')">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-5xl font-bold">Welcome to Our Reservation Hotel</h1>
        </div>
    </section>

    <!-- Product Section -->
    <section>
        <div class="container mx-auto lg:mt-16">
            <div class="flex justify-between">
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
            <div class="flex flex-col justify-center items-center lg:grid lg:grid-cols-3 md:grid md:grid-cols-2 text-center gap-x-8 mt-8">
            @foreach ($data as $kamar)
                <div class="max-w-[350px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-80 w-full" src="img/product1.png" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $kamar->tipe_kamar }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ substr($kamar->deskripsi, 0, 100) }}{{ strlen($kamar->deskripsi) > 100 ? '...' : '' }}</p>
                        <a href="/costumer?id={{ $kamar->id }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Booking now!
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    @include('user.layouts.footer')

@endsection
