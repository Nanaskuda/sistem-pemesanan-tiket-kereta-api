<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Passager;
use App\Models\Schedule;
use App\Models\ticket;



class Booking extends Model
{

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function Passager()
    {
        return $this->belongsTo(Passager::class);
    }
    public function ticket ()
    {
        return $this->hasOne(Ticket::class);

    }

    protected $fillable = [
    'user_id',
    'schedule_id',
    'passenger_name',
    'seat_number',
    'total_price',
    'status',
];
    use HasFactory;

}



