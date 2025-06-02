<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Booking;
use Illuminate\Support\Str;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $stations = Station::all();
        // return view('index', compact('stations'));
    }

public function confirmation(Booking $booking)
{
    return view('booking.confirmation', compact('booking'));
}

public function showBookingForm(Schedule $schedule)
{
    $schedule->load(['departure_station', 'arrival_station']); // load relasi
    return view('booking.form', compact('schedule'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeBooking(Request $request, Schedule $schedule)
{
        // dd($request->all());

    $validated = $request->validate([
        'passenger_name' => 'required|string|max:255',
        'seat_number' => 'required|string|max:10',
    ]);

    // 2. Cek apakah seat sudah dipakai
    $existing = Ticket::where('schedule_id', $schedule->id)
                      ->where('seat_number', $validated['seat_number'])
                      ->first();

    if ($existing) {
        return back()->withErrors(['seat_number' => 'Kursi ini sudah dipesan!'])->withInput();
    }

    // 3. Simpan booking
    $booking = Booking::create([
        'user_id' => auth()->id(), // kalau user login
        'schedule_id' => $schedule->id,
        'passenger_name' => $request->passenger_name,
        'seat_number' => $request->seat_number,
        'total_price' => $schedule->price, // sementara dummy harga

    ]);

    // 4. Generate tiket
    Ticket::create([
        'booking_id' => $booking->id,
        'schedule_id' => $schedule->id,
        'passenger_name' => $validated['passenger_name'],
        'seat_number' => $validated['seat_number'],
    ]);

    // 5. Redirect ke halaman konfirmasi
    return redirect()->route('booking.confirmation', $booking->id)->with('success', 'Tiket berhasil dipesan!');
}




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
