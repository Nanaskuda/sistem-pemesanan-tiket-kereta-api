@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4 text-center ">Form Pemesanan Tiket</h2>
    {{-- <pre>{{ dd($schedule) }}</pre> --}}
    {{-- <pre>{{ var_dump($schedule) }}</pre> --}}

<form action="{{ route('booking.store', $schedule->id) }}" method="POST" class="space-y-4">
    @csrf

    <div>
        <label class="block mb-1 font-semibold" for="passenger_name">Nama Penumpang</label>
        <input
            type="text"
            name="passenger_name"
            id="passenger_name"
            class="w-full border rounded px-3 py-2"
            required
        >
    </div>

    <input type="hidden" name="schedule_id" value="{{ $schedule->id }}">

    <div>
        <label class="block mb-1 font-semibold" for="schedule_info">Jadwal Kereta</label>
        <input
            type="text"
            id="schedule_info"
            class="w-full border rounded px-3 py-2 bg-gray-100"
            value="{{ $schedule->departure_station->name }} ke {{ $schedule->arrival_station->name }} ({{ $schedule->departure_time }})"
            disabled
        >
    </div>

    <div>
        <label class="block mb-1 font-semibold" for="seat_number">Nomor Kursi</label>
        <input
            type="number"
            name="seat_number"
            id="seat_number"
            class="w-full border rounded px-3 py-2"
            required
        >
    </div>

    <div>
        <label class="block mb-1 font-semibold" for="total_price">Total Harga</label>
        <input
            type="text"
            id="total_price"
            class="w-full border rounded px-3 py-2 bg-gray-100"
            value="{{ $schedule->price }}"
            disabled
        >
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Pesan Tiket
    </button>
</form>


@endsection
