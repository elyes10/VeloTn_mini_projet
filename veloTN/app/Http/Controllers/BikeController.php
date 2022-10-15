<?php

namespace App\Http\Controllers;

use App\Models\bike;
use App\Http\Requests\StorebikeRequest;
use App\Http\Requests\UpdatebikeRequest;
use Illuminate\Http\Response;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $bikes = (new bike)->orderBy('id','desc')->paginate(5);
        return view('bikes.index', compact('bikes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('bikes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebikeRequest  $request
     * @return Response
     */
    public function store(StorebikeRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'ratings' => 'required',
        ]);

        (new bike)->create($request->post());

        return redirect()->route('bikes.index')->with('success','Bike has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param bike $bike
     * @return Response
     */
    public function show(bike $bike)
    {
        return view('bikes.show',compact('bike'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param bike $bike
     * @return Response
     */
    public function edit(bike $bike)
    {
        return view('bikes.edit',compact('bike'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebikeRequest  $request
     * @param bike $bike
     * @return Response
     */
    public function update(UpdatebikeRequest $request, bike $bike)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'ratings' => 'required',
        ]);
        $bike->fill($request->post())->save();

        return redirect()->route('bikes.index')->with('success','bike Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param bike $bike
     * @return Response
     */
    public function destroy(bike $bike)
    {
        $bike->delete();
        return redirect()->route('bikes.index')->with('success','bike has been deleted successfully');
    }

}
