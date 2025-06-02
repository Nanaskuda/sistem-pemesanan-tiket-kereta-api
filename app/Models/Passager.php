<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;
use App\Models\Schedule;

class Passager extends Model
{
use HasFactory;

    public function booking()
{
    return $this->hasMany(Booking::class);
}
}
