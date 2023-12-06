<?php

namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Http\Request;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allCars = car::all();
        foreach ($allCars as $car) {
            echo $car;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cars.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newcar = new car();
        $newcar->Brand = $request->Marka;
        $newcar->Model = $request->Model;
        $newcar->Price = $request->Cena;
        $newcar->save();
        return redirect("car");

    }

    /**
     * Display the specified resource.
     */
    public function show(car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(car $car)
    {
        //
    }
}
