<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopModel extends Model
{
    use HasFactory;

    protected $table = 'shops';  // Ensure this matches your table name

    protected $fillable = ['name', 'description', 'price', 'image'];
}
