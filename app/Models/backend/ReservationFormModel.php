<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationFormModel extends Model
{
    
    use HasFactory;

    protected $table = 'reservation';

    protected $fillable = [
        'name', 'email', 'phone', 'time', 'guest', 'date', 'message'
    ];
}