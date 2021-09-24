<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    public function arrivingFlights(){
        return $this->hasany('App\Flight','arrivalAirport_id');
    }

    departingFlights(){
        return $this->hasany('App\Flight','departureAirport_id');
    }

}
