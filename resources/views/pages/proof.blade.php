@extends('layouts.proof')

@section('content')
    @push('addon-css')
        <style>
            @media print {
                .btn {
                    display: none !important;
                }
            }
        </style>
    @endpush
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-md p-6">
        <h2 class="text-2xl font-bold mb-4">Bukti Pemesanan Hotel</h2>
        <div class="flex flex-col md:flex-row mb-4">
            <div class="md:w-1/3">
                <h3 class="text-lg font-bold mb-2">Detail Pemesan</h3>
                <div class="flex flex-col">
                    <span class="font-semibold">Nama:</span>
                    <span>{{ $data['name'] }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-semibold">Email:</span>
                    <span>{{ $data['email'] }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-semibold">Nomor Telepon:</span>
                    <span>{{ $data['phone'] }}</span>
                </div>
            </div>
            <div class="md:w-1/3">
                <h3 class="text-lg font-bold mb-2">Detail Hotel</h3>
                <div class="flex flex-col">
                    <span class="font-semibold">Nama Hotel:</span>
                    <span>HOTEL HEBAT</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-semibold">Alamat:</span>
                    <span>Jl. Cipayung, Jakarta Timur</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-semibold">Jenis Kamar:</span>
                    <span>{{ $roomType->name }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-semibold">Jumlah Kamar:</span>
                    <span>{{ $data['amount'] }}</span>
                </div>
            </div>
            <div class="md:w-1/3">
                <h3 class="text-lg font-bold mb-2">Detail Pemesanan</h3>
                <div class="flex flex-col">
                    <span class="font-semibold">Check-in:</span>
                    <span>{{ $data['checkin'] }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-semibold">Check-out:</span>
                    <span>{{ $data['checkout'] }}</span>
                </div>
                {{-- <div class="flex flex-col">
                    <span class="font-semibold">Total Biaya:</span>
                    <span>IDR 2.500.000</span>
                </div> --}}
            </div>
        </div>
        <p class="text-gray-600 text-sm">Terima kasih telah melakukan pemesanan di Hotel Hebat. Silakan simpan bukti ini
            sebagai referensi untuk check-in di hotel.</p>
        <button class="btn btn-primary mt-4" onclick="window.print()">Cetak Bukti Pemesanan
        </button>
        <a href="{{ route('home') }}" class="btn btn-outline mt-4">Kembali</a>
    </div>
@endsection
