<?php

namespace App\Http\Controllers;

use App\Models\RestaurantStaff;
use Illuminate\Http\Request;

class RestaurantStaffController extends Controller
{
    public function index()
    {
        $restaurantStaffs = RestaurantStaff::all();
        return view('restaurant_staff.index', compact('restaurantStaffs'));
    }

    public function create()
    {
        return view('restaurant_staff.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'contact' => 'required',
        ]);

        RestaurantStaff::create($validated);
        return redirect()->route('restaurant-staff.index');
    }

    public function show(RestaurantStaff $restaurantStaff)
    {
        return view('restaurant_staff.show', compact('restaurantStaff'));
    }

    public function edit(RestaurantStaff $restaurantStaff)
    {
        return view('restaurant_staff.edit', compact('restaurantStaff'));
    }

    public function update(Request $request, RestaurantStaff $restaurantStaff)
    {
        $validated = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'contact' => 'required',
        ]);

        $restaurantStaff->update($validated);
        return redirect()->route('restaurant-staff.index');
    }

    public function destroy(RestaurantStaff $restaurantStaff)
    {
        $restaurantStaff->delete();
        return redirect()->route('restaurant-staff.index');
    }
}
