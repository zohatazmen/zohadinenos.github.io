<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationModel extends Model
{
    use HasFactory;

    protected $table = 'reservation';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'email', 'phone', 'time', 'date', 'guest', 'message'];
}
