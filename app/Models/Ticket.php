<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    public function Booking()
    {
        return $this->belongsTo(Booking::class);
    }

    protected $fillable = [
        'schedule_id',
        'booking_id',
        'passenger_name',
        'seat_number',
    ];
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
