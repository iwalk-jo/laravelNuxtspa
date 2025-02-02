<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyRequest;
use Illuminate\Http\Request;
use \App\Http\Resources\PropertiesResource;
use \App\Models\Property;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PropertiesResource::collection(Property::all());
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePropertyRequest $request)
    {
        $request->validated();

        $property = Property::create([
            'broker_id' => $request->broker_id,
            'address' => $request->address,
            'listing_type' => $request->listing_type,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'description' => $request->description,
            'build_year' => $request->build_year,
            'units' => $request->units
        ]);

        $property->characteristic()->create([
            'property_id' => $property->id,
            'price' => $request->price,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'sqft' => $request->sqft,
            'price_sqft' => $request->price_sqft,
            'property_type' => $request->property_type,
            'date_available' => $request->date_available,
            'laundry' => $request->laundry,
            'cooling' => $request->cooling,
            'heating' => $request->heating,
            'parking_area' => $request->parking_area,
            'status' => $request->status,
        ]);

        return new PropertiesResource($property);
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        return new PropertiesResource($property);
    }




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        $property->update($request->only([
            'broker_id',
            'address',
            'listing_type',
            'city',
            'zip_code',
            'description',
            'build_year',
            'units'
        ]));

        $property->characteristic->where('property_id', $property->id)->update($request->only([
            'property_id',
            'price',
            'bedrooms',
            'bathrooms',
            'sqft',
            'price_sqft',
            'date_available',
            'laundry',
            'cooling',
            'heating',
            'parking_area',
            'property_type',
            'status'
        ]));

        return new PropertiesResource($property);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();

        return response()->json([
            'success' => true,
            'message' => 'Property has been deleted from database',
        ]);
    }
}
