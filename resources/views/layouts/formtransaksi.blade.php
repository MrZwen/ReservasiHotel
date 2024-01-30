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


    <!-- List kamar -->
    <form action="/transaksi" method="POST" class="container max-w-3xl ">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kamar</label>  
    <select name="id" class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        @foreach ($data as $d)
        <option value="{{$d->id}}">{{$d->no_kamar}}&nbsp;{{$d->tipe_kamar}}&nbsp;{{$d->harga}}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Bukti Pembayaran</label>
    <div class="mb-3">
  <input  name="bukti_pembayaran" class="form-control" type="file" id="formFile">
</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tanggal Pembayaran</label>
    <input  name="tgl_pembayaran" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Submit</button>
</form>




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