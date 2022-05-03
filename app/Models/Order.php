<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'surName', 
        'email', 
        'phone', 
        'city', 
        'address', 
        'postalCode', 
        'images',
        'count',
        'logoCount',
        'wheel',
        'covrikType',
        'model',
        'seria',
        'year',
        'cupe',
        'payment',
        'price'
    ];
}
