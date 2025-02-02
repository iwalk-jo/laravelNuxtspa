<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrokerRequest;
use App\Http\Resources\BrokersResource;
use App\Models\Broker;
use Illuminate\Http\Request;

class BrokersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BrokersResource::collection(Broker::all());
    }



    /**
     * Store a newly created resource in storage.
     */

    // handling request from the route.
    public function store(StoreBrokerRequest $request)
    {
        $request->validated();

        $broker = Broker::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'phone_number' => $request->phone_number,
            'logo_path' => $request->logo_path,
        ]);

        return new BrokersResource($broker);
    }

    /**
     * Display the specified resource.
     */
    public function show(Broker $broker)
    {
        return new BrokersResource($broker);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBrokerRequest $request, Broker $broker)
    {
        // ray($request);
        // $request->validated();

        $broker->update($request->only([
            'first_name',
            'last_name',
            'address',
            'city',
            'zip_code',
            'phone_number',
            'logo_path'
        ]));

        return new BrokersResource($broker);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Broker $broker)
    {
        $broker->delete();

        return response()->json([
            'success' => true,
            'message' => 'Broker has been deleted from database',
        ]);
    }
}