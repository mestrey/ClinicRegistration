<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'name',
        'inn',
        'adress',
        'phone',
        'email',
        'site',
        'contactName',
        'contactPosition',
        'contactPhone',
        'contactEmail',
    ];
}
