<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'reservation_date',
        'number_of_people',
        'special_requests',
        '_token',
    ];

    protected $table = 'reservations';

    protected $primary_key = 'id';
}