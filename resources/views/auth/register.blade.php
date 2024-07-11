@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <form role="form" action="register" method="POST">
        @csrf
        <div class="flex justify-center items-center h-screen bg-gray-200">
            <div class="bg-white rounded shadow-lg w-[400px] min-h-[100px] p-9">
                <h1 class="text-3xl text-center font-semibold">Signup Form</h1>
                <p class="text-center mb-4">Create your an account get access login</p>
                @if ($errors->any())
                    @foreach ($errors->all() as $item)
                        <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                            role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium"></span> {{ $item }}.
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="mb-3">
                    <label for="username" class="font-bold block">Username</label>
                    <input
                        class="rounded font-semibold border border-solid border-slate-100 shadow-lg block py-2 w-full focus:outline-blue-700"
                        type="text" value="{{ old('username') }}" name="username" autocomplete="off"
                        placeholder="Masukkan Username..." />
                </div>
                <div class="mb-3">
                    <label for="email" class="font-bold block">Email</label>
                    <input
                        class="rounded font-semibold border border-solid border-slate-100 shadow-lg block py-2 w-full focus:outline-blue-700"
                        type="email" value="{{ old('email') }}" name="email" autocomplete="off"
                        placeholder="Masukkan email anda..." />
                </div>
                <div class="mb-3">
                    <label for="password" class="font-bold block">Password</label>
                    <input
                        class="rounded font-semibold border border-solid border-slate-100 shadow-lg block py-2 w-full focus:outline-blue-700"
                        type="password" name="password" autocomplete="off" placeholder="Masukkan Password..." />
                </div>
                <div class="mb-4">
                    <label for="no_hp" class="font-bold block">Telepon</label>
                    <input
                        class="rounded font-semibold border border-solid border-slate-100 shadow-lg block py-2 w-full focus:outline-blue-700"
                        type="number" name="no_hp" autocomplete="off" placeholder="Masukkan no hp anda..." />
                </div>
                <button class="bg-blue-700 text-white px-4 py-1 rounded hover:bg-blue-600 w-full mb-2" type="submit">Signup</button>
                <p>Sudah Punya Akun? <a href="/login" class="text-blue-700 font-bold">Login here</a></p>
            </div>
        </div>
    </form>
@endsection
