<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use Illuminate\Http\Request;

class FoodItemController extends Controller
{
    public function index()
    {
        $foodItems = FoodItem::all();
        return view('food_items.index', compact('foodItems'));
    }

    public function create()
    {
        return view('food_items.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'availability' => 'required|boolean',
        ]);

        FoodItem::create($validated);
        return redirect()->route('food-items.index');
    }

    public function show(FoodItem $foodItem)
    {
        return view('food_items.show', compact('foodItem'));
    }

    public function edit(FoodItem $foodItem)
    {
        return view('food_items.edit', compact('foodItem'));
    }

    public function update(Request $request, FoodItem $foodItem)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'availability' => 'required|boolean',
        ]);

        $foodItem->update($validated);
        return redirect()->route('food-items.index');
    }

    public function destroy(FoodItem $foodItem)
    {
        $foodItem->delete();
        return redirect()->route('food-items.index');
    }
}
