<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    function appointment()
    {
        return $this->hasMany(AppointmentAvailableTime::class);
    }

}
