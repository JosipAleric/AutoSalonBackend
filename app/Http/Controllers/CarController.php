<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function uploadImage(Request $request){
        $pathToFile = $request->file('image')->store('images', 'public');

        return $pathToFile;
    }

    public function index()
    {
        return Car::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand'=>'required',
            'model'=>'required',
            'price'=>'required',
            'year'=>'required',
            'mileage'=>'required',
            'drivetrain'=>'required',
            'fuel_type'=>'required',
            'power'=>'required',
            'engine'=>'required'
        ]);
        return Car::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return $car;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return bool
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'brand'=>'required',
            'model'=>'required',
            'price'=>'required',
            'year'=>'required',
            'mileage'=>'required',
            'drivetrain'=>'required',
            'fuel_type'=>'required',
            'power'=>'required',
            'engine'=>'required',
        ]);
        return $car->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        return $car->delete();
    }
}
