<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Train;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $stations = Station::all();

        // Kalau ada input pencarian, cari jadwal
        if ($request->has(['departure_station_id', 'arrival_station_id', 'departure_time'])) {
            $schedules = Schedule::with(['departure_station', 'arrival_station'])
                ->where('departure_station_id', $request->departure_station_id)
                ->where('arrival_station_id', $request->arrival_station_id)
                ->whereDate('departure_time', $request->departure_time)
                ->get();


            return view('search', compact('stations', 'schedules'));
        }

        // Kalau tidak, tampilkan form saja
        return view('search', compact('stations'));
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
    public function store(Request $request)
    {
        // dd($request->all());
        // $schedules = Schedule::with(['train', 'departure_station', 'arrival_station','departure_time','arrival_time', 'price'])
        //     ->where('train', $request->train_id)
        //     ->where('departure_station', $request->departure_station_id)
        //     ->where('arrival_station', $request->arrival_station_id)
        //     ->where('departure_time', $request->departure_time)
        //     ->where('arrival_time', $request->arrival_time)
        //     ->where('price', '>=', $request->price)
        //     ->get();
        //     dd($schedules);
        $request->validate([
            // 'train_id' => 'required|exists:trains,id',
            'departure_station_id' => 'required|exists:stations,id',
            'arrival_station_id' => 'required|exists:stations,id',
            'departure_time' => 'required|date',
            'arrival_time' => 'required|date',
            'price' => 'required|numeric',
        ]);

        return view(('search_results'), compact('schedules'));
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
