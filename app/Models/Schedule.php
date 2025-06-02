<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Station; // pastikan ini ada di atas

class Schedule extends Model
{
    use HasFactory;
    
    public function departure_station()
    {
        return $this->belongsTo(Station::class, 'departure_station_id');
    }

    public function arrival_station()
    {
        return $this->belongsTo(Station::class, 'arrival_station_id');
    }
}
