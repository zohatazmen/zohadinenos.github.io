<?php
namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminContact extends Model
{
use HasFactory;

protected $table = 'contact'; 

protected $fillable = ['name', 'email', 'message']; 
}