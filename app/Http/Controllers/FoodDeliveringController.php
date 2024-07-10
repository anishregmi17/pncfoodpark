<?php

// app/Http/Controllers/FoodDeliveringController.php
namespace App\Http\Controllers;

use App\Models\FoodDelivering;
use App\Models\FoodOrdering;
use Illuminate\Http\Request;

class FoodDeliveringController extends Controller
{
    public function index()
    {
        $foodDeliverings = FoodDelivering::all();
        return view('food_deliverings.index', compact('foodDeliverings'));
    }

    public function create()
    {
        $foodOrderings = FoodOrdering::all();
        return view('food_deliverings.create', compact('foodOrderings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'food_ordering_id' => 'required|exists:food_orderings,id',
            'status' => 'required',
        ]);

        FoodDelivering::create($request->all());
        return redirect()->route('food-deliverings.index');
    }

    public function show(FoodDelivering $foodDelivering)
    {
        return view('food_deliverings.show', compact('foodDelivering'));
    }

    public function edit(FoodDelivering $foodDelivering)
    {
        $foodOrderings = FoodOrdering::all();
        return view('food_deliverings.edit', compact('foodDelivering', 'foodOrderings'));
    }

    public function update(Request $request, FoodDelivering $foodDelivering)
    {
        $request->validate([
            'food_ordering_id' => 'required|exists:food_orderings,id',
            'status' => 'required',
        ]);

        $foodDelivering->update($request->all());
        return redirect()->route('food-deliverings.index');
    }

    public function destroy(FoodDelivering $foodDelivering)
    {
        $foodDelivering->delete();
        return redirect()->route('food-deliverings.index');
    }
}
