<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'quantity', 'regular_price', 'sale_price', 'rating', 'colorway', 'status', 'images', 'sold', 'gender', 
    ];


}
