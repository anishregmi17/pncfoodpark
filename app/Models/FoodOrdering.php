<?php

// app/Models/FoodOrdering.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodOrdering extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'food_item_id', 'quantity', 'status'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function foodItem()
    {
        return $this->belongsTo(FoodItem::class);
    }

    public function foodDeliverings()
    {
        return $this->hasMany(FoodDelivering::class);
    }
}
