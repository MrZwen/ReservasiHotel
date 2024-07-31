@extends('layouts.main')

@section('title', 'Landing Page')

@section('content')

    {{-- sidebar --}}
    @include('user.layouts.sidebar')

    @if (Auth::user())
        {{-- Main Content --}}
        <div class="flex-1 p-4 ml-72">
            <table class="min-w-full bg-white">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                        <th class="px-4 py-3">Bukti Pembayaran</th>
                        <th class="px-4 py-3">Tanggal Pembayaran</th>
                        <th class="px-4 py-3">Tanggal Checkin</th>
                        <th class="px-4 py-3">Tanggal Checkout</th>
                        <th class="px-4 py-3">Nominal</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y">
                    @foreach ($data as $item)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 flex justify-center"><img width="150px"
                                    src="{{ asset('storage/' . $item->bukti_pembayaran) }}" alt="bukti pembayaran"></td>
                            <td class="px-4 py-3">{{ $item->tgl_pembayaran }}</td>
                            <td class="px-4 py-3">{{ $item->tgl_checkin }}</td>
                            <td class="px-4 py-3">{{ $item->tgl_checkout }}</td>
                            <td class="px-4 py-3">Rp.{{ number_format($item->nominal, 0, ',', '.') }}</td>
                            <td class="px-4 py-3">
                                @if ($item->status == 'Belum Terverifikasi')
                                    <span
                                        class="inline-flex items-center rounded-md bg-pink-50 px-2 py-1 text-xs font-medium text-pink-700 ring-1 ring-inset ring-pink-700/10 uppercase">{{ str_replace('_', ' ', $item->status) }}</span>
                                @endif     
                                @if ($item->status == 'Terverifikasi' || $item->status == 'Selesai')
                                    <span
                                        class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">{{ str_replace('_', ' ', $item->status) }}</span>
                                @endif
                            </td>
                        </tr>
                        @include('admin.layouts.pages.modal.edit-verifikasi')
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

@endsection
