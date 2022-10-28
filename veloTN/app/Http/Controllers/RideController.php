<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\ride;
use Illuminate\Http\Request;

class RideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rides = ride::orderBy('id','desc')->paginate(1000);
        return view('rides.index', compact('rides'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function indexback()
    {
        $rides = (new ride)->orderBy('id','desc')->paginate(10000);
        return view('rides.index_backend', compact('rides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $events = (new event)->orderBy('id','desc')->paginate(10000);
        return view('rides.create',compact('events'));
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
            'title' => 'required',
            'description' => 'required',
            'destination' => 'required',
            'startedAt' => 'required',
            'event_id' => 'required',
        ]);

        $postData = ['title' => $request->title,'description'=>$request->description, 'destination' => $request->destination,'startedAt' => $request->startedAt, 'event_id' => $request->event_id];

        ride::create($postData);

        //return redirect()->back();
        return redirect()->route('rides.index_backend')->with('success','Ride has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function show(ride $ride)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function edit(ride $ride)
    {
        return view('rides.edit',compact('ride'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ride $ride)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'destination' => 'required',
            'startedAt' => 'required',
            'event_id' => 'required',
        ]);
        $ride->fill($request->post())->save();

        return redirect()->route('rides.index_backend')->with('success','Ride Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ride $ride
     * @return Response
     */
    public function destroy(ride $ride)
    {
        $ride->delete();
        return redirect()->route('rides.index_backend')->with('success','Ride has been deleted successfully');
    }
}
