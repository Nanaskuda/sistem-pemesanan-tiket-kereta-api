@extends('layouts.app')

@section('confirmation')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-xl shadow text-center">
    <h1 class="text-2xl font-bold text-green-600">Tiket Berhasil Dipesan!</h1>
    <p class="mt-4">Kode Booking Anda:</p>
    <div class="text-3xl font-bold bg-gray-100 p-4 rounded my-4">
        {{ $booking->booking_code }}
    </div>
    <p>Silakan screenshot atau catat kode ini untuk check-in.</p>
    <a href="{{ route('index') }}" class="mt-6 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Kembali ke Beranda
    </a>
</div>
@endsection
