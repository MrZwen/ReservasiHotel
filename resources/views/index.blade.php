@extends('layouts/main')

@section('title', 'Landing Page')

@section('content')
    {{-- Hero Section --}}
    <section class="py-5">
        <div class="container mx-5 flex flex-wrap items-center justify-center">
            <div class="mx-auto">
                <h1 class="font-[lora] font-bold text-[62px]">Enjoy A Lexury <p>Experience</p></h1>
                <p class="text-1xl text-gray-500">welcome to the place where luxury meets affordabilty</p>
            </div>
            <div class=""><img src='{{"images/hero.png"}}' alt="" class="w-[624px] h-[936px] rounded-t-full"></div>
        </div>
    </section>
    {{-- End Hero Section --}}
@endsection