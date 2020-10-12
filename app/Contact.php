<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable= [
        'location_name', 'location_address', 'phone_number', 'email', 'facebook', 'instagram', 'twitter', 'image', 'map', 'status'
    ];
}
