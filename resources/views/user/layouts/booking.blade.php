@extends('layouts.main')

@section('title', 'Halaman Booking')

@section('content')
    @include('layouts.navbar')
    
    <div class="min-h-screen flex items-center justify-center py-24">
        <div class="bg-white max-w-lg shadow-lg p-6 mx-6 w-full md:w-1/2 lg:w-1/3">
          <h1 class="text-center font-semibold text-2xl">Book Kamar</h1>
          <p class="text-center text-[16px]">
            Silahkan melakukan pemesanan anda di bawah ini
          </p>
          @if(session('error'))
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
              <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium"></span> {{ session('error') }}.
              </div>
            </div>
          @endif
          <div class="flex justify-center items-center mt-6">
            <form id="bookingForm" action="/transaksi" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{ $kamar->id }}">
              <div class="flex flex-col mb-4">
                  <label class="text-[15px] mb-1">Tipe Kamar</label>
                  <input class="w-full cursor-not-allowed bg-gray-200" type="text" name="tipe_kamar" value="{{ $kamar->tipe_kamar }}" required disabled>
              </div>
              <div class="flex flex-col mb-4">
                  <label class="text-[15px] mb-1 ">No Kamar</label>
                  <input class="w-full cursor-not-allowed bg-gray-200" type="text" name="no_kamar" value="{{ $kamar->no_kamar }}" required disabled>
              </div>
              <div class="flex flex-col mb-4">
                  <label class="text-[15px] mb-1">Tanggal Check-in</label>
                  <input id="tgl_checkin" class="w-full" type="date" name="tgl_checkin" required>
              </div>
              <div class="flex flex-col mb-4">
                  <label class="text-[15px] mb-1">Tanggal Check-out</label>
                  <input id="tgl_checkout" class="w-full" type="date" name="tgl_checkout" required>
              </div>
              <div class="flex flex-col mb-4">
                  <label class="text-[15px] mb-1">Bukti Pembayaran</label>
                  <input class="w-full" type="file" name="bukti_pembayaran" required>
              </div>
              <div class="flex flex-col mb-4">
                  <label class="text-[15px] mb-1">Nominal Pembayaran</label>
                  <input id="nominal" class="w-full cursor-not-allowed bg-gray-200" type="text" name="nominal" required readonly>
              </div>
              <button class="bg-[#1100ff] text-white px-4 py-2 w-full" type="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
 
    @include('user.layouts.footer')
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const checkinInput = document.getElementById('tgl_checkin');
        const checkoutInput = document.getElementById('tgl_checkout');
        const nominalInput = document.getElementById('nominal');
        const hargaPerMalam = {{ $kamar->harga }};
        
        function calculateNominal() {
            const checkinDate = new Date(checkinInput.value);
            const checkoutDate = new Date(checkoutInput.value);
            const timeDifference = checkoutDate - checkinDate;
            const daysDifference = timeDifference / (1000 * 3600 * 24);
            
            if (!isNaN(daysDifference) && daysDifference > 0) {
                const totalNominal = daysDifference * hargaPerMalam;
                nominalInput.value = totalNominal.toFixed(2);
            } else {
                nominalInput.value = '';
            }
        }

        checkinInput.addEventListener('change', calculateNominal);
        checkoutInput.addEventListener('change', calculateNominal);
      });
    </script>
@endsection