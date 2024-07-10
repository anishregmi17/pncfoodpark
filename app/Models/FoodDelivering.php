<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodDelivering extends Model
{
    use HasFactory;

    protected $fillable = ['food_ordering_id', 'status'];
}
