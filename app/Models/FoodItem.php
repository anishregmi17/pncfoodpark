<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'availability'];

    public function foodOrderings()
    {
        return $this->hasMany(FoodOrdering::class);
    }
}