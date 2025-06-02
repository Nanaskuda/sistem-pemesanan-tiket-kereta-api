@extends('layouts.app')

@section('search')
<div class="max-w-2xl mx-auto mt-10 bg-white p-6 mb-4 rounded-xl shadow-lg">
    <h1 class="text-2xl font-bold mb-6 text-center">Cari Tiket Kereta Api</h1>

    {{-- FORM --}}
    <form action="{{ route('search') }}" method="GET">
        <div class="grid grid-cols-1 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Stasiun Asal</label>
                <select name="departure_station_id" class="w-full border rounded p-2">
                    @foreach ($stations as $station)
                        <option value="{{ $station->id }}" {{ request('departure_station_id') == $station->id ? 'selected' : '' }}>
                            {{ $station->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Stasiun Tujuan</label>
                <select name="arrival_station_id" class="w-full border rounded p-2">
                    @foreach ($stations as $station)
                        <option value="{{ $station->id }}" {{ request('arrival_station_id') == $station->id ? 'selected' : '' }}>
                            {{ $station->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Tanggal Keberangkatan</label>
                <input type="date" name="departure_time" value="{{ request('departure_time') }}" class="w-full border rounded p-2">
            </div>
            <button type="submit" class="bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Cari Jadwal
            </button>
        </div>
    </form>
</div>

{{-- HASIL PENCARIAN --}}
@if(isset($schedules))
    <div class="max-w-2xl mx-auto mt-6 bg-white p-6 rounded-xl shadow-lg">
        <h2 class="text-lg font-semibold mb-4">Hasil Pencarian:</h2>
        @forelse($schedules as $schedule)
            <div class="border p-3 mb-3 rounded">
                {{-- <p><strong>Kereta:</strong> {{ $schedule->train->name }}</p> --}}
                <p><strong>Asal:</strong> {{ $schedule->departure_station->name }}</p>
                <p><strong>Tujuan:</strong> {{ $schedule->arrival_station->name }}</p>
                <p><strong>Jam Berangkat:</strong> {{ $schedule->departure_time }}</p>
                <p><strong>Harga:</strong> {{ $schedule->price }}</p>
                <br>
                <div class=" mb-4">
                    <a href="{{ route('booking.form', $schedule->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Pesan Tiket
                    </a>
                </div>
            </div>
        @empty
            <p class="text-red-500 bg-white">Tidak ada jadwal ditemukan.</p>
        @endforelse
    </div>
@endif
@endsection
