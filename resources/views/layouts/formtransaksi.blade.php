@extends('layouts/main')

@section('title', 'Landing Page')

@section('content')
    <!-- Navbar -->
    @include('layouts.navbar')


    <!-- List kamar -->
    <div class="mt-36">
        <form action="/transaksi" method="POST" class="container max-w-3xl ">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kamar</label>
                <select name="id" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($data as $d)
                        <option value="{{ $d->id }}">
                            {{ $d->no_kamar }}&nbsp;{{ $d->tipe_kamar }}&nbsp;{{ $d->harga }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Bukti Pembayaran</label>
                <div class="mb-3">
                    <input name="bukti_pembayaran" class="form-control" type="file" id="formFile">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Pembayaran</label>
                <input name="tgl_pembayaran" type="date" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Submit</button>
        </form>
    </div>




    <!-- Footer Section -->
    @include('user.layouts.footer')
@endsection
