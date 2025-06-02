{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('index')
<div class="max-w-4xl mx-auto mt-10">
    <h1 class="text-3xl font-bold mb-4">Selamat Datang di Sistem Pemesanan Tiket Kereta Apry Express</h1>
    <p class="text-gray-600">Pesan tiket kereta dengan mudah dan cepat!</p>

    <div class="mt-8">
        <a href="{{ route('search') }}" class="bg-blue-600 border-2 border-blue-600 text-white px-4 py-2 rounded hover:bg-white hover:text-blue-600 transition">
            Cari Tiket Sekarang
        </a>
    </div>
</div>

<section>
    <div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Tentang Kami</h2>
        <p class="text-gray-700 mb-4">
            Apry Express adalah layanan pemesanan tiket kereta api yang menyediakan kemudahan dalam mencari dan memesan tiket kereta api di Indonesia. Dengan antarmuka yang sederhana dan intuitif, Anda dapat dengan mudah menemukan jadwal kereta, harga tiket, dan melakukan pemesanan secara online.
        </p>
        <p class="text-gray-700">
            Kami berkomitmen untuk memberikan pengalaman terbaik bagi pengguna kami dengan menyediakan informasi yang akurat dan layanan pelanggan yang responsif.
        </p>
    </div>
</section>
<section>
    <div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Fitur Utama</h2>
        <ul class="list-disc pl-5 text-gray-700">
            <li>Cari jadwal kereta dengan mudah</li>
            <li>Lihat harga tiket secara real-time</li>
            <li>Pemesanan tiket secara online</li>
            <li>Antarmuka yang user-friendly</li>
            <li>Layanan pelanggan yang responsif</li>
        </ul>
    </div>
</section>
@endsection
