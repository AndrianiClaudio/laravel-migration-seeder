<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    //
    protected $fillable = [
        'id',
        'agency',
        'departure_station',
        'arrival_station',
        'departure_time',
        'arrival_time',
        'train_code',
        'carriages',
        'in_time',
        'deleted'
    ];
}
