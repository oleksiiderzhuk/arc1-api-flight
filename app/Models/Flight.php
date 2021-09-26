<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    public function arrivalAirport(){
        return $this->belongsTo('App\Airport', 'arrivalAirport_id');
    }

    public function departureAirport(){
        return $this->belongsTo('App\Airport', 'departureAirport_id');
    }

    public function passengers(){
        return $this->belongsToMany('App\Customer', 'flight_customer');
    }
}
