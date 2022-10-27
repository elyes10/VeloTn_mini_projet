<?php

namespace App\Http\Controllers;

use App\Models\bike;
use App\Http\Requests\StorebikeRequest;
use App\Http\Requests\UpdatebikeRequest;
use App\Models\booking_bike;
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
        $bikes = (new bike)->orderBy('id','desc')->paginate(10000);
        return view('bikes.index', compact('bikes'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function indexback()
    {
        $bikes = (new bike)->orderBy('id','desc')->paginate(10000);
        return view('bikes.index_backend', compact('bikes'));
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
            'image1' => 'required',
        ]);

        $image= $request->file('image1')->getClientOriginalName();
        $request->file('image1')->storeAs('public/front/images/',$image);
        $request->merge([
            'image' => $image,
        ]);
        (new bike)->create($request->post());

        return redirect()->route('bikes.index_backend')->with('success','Bike has been created successfully.');
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

        ]);
        $image='';
        if ($request->hasFile('image1')) {
        $image= $request->file('image1')->getClientOriginalName();
        $request->file('image1')->storeAs('public/front/images/',$image);
        $request->merge([
            'image' => $image,
        ]); }
        else { $request->merge([
            'image' => $bike->image,
        ]);}
        $bike->fill($request->post())->save();

        return redirect()->route('bikes.index_backend')->with('success','bike Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param bike $bike
     * @return Response
     */
    public function destroy(bike $bike)
    { $bike->reservations()->delete();
        $bike->delete();
        return redirect()->route('bikes.index_backend')->with('success','bike has been deleted successfully');
    }


}
