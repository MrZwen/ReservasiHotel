@extends('layouts.main')

@section('title', 'Landing Page')

@section('content')

    {{-- Sidebar --}}
    @include('user.layouts.sidebar')

    <div class="flex justify-center items-center h-screen p-6 ml-72">
        <div class="w-96">
            <h1 class="text-3xl font-bold">Edit Profile</h1>
            <p class="text-[15px] mb-4">Masukkan data diri anda</p>
            <form action="" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group-flex mb-3">
                    <label for="nama-lengkap">Username</label>
                    <input class="form-control" type="text" id="nama-lengkap" name="name" value="{{ $user->username }}"
                        placeholder="Masukkan username anda...">
                </div>
                <div class="form-group-flex mb-3">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email" value="{{ $user->email }}"
                        placeholder="Masukkan email anda...">
                </div>
                <div class="form-group-flex mb-3">
                    <label for="no_telephone">Password</label>
                    <input class="form-control" type="text" id="no_telephone" name="no_telephone"
                        value="{{ $user->password }}" placeholder="Masukkan nomor telepon anda...">
                </div>
                <div class="form-group-flex mb-4">
                    <label for="password">No. Telepon</label>
                    <input class="form-control" type="number" id="password" name="password" value="{{ $user->no_hp }}"
                        placeholder="Masukkan password baru jika ingin mengubahnya">
                </div>
                <button class="btn float-end"
                    style="font-size: 18px; padding: 6px 28px; color: #FFF; background-color: #002379; border: none;" type="submit">Simpan</button>
            </form>
        </div>
    </div>

@endsection
