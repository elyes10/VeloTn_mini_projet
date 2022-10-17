<?php

namespace App\Http\Controllers;

use App\Models\bike;
use App\Models\booking_bike;
use App\Http\Requests\Storebooking_bikeRequest;
use App\Http\Requests\Updatebooking_bikeRequest;
use Illuminate\Http\Response;

class BookingBikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function indexback()
    {
        $bike_booking = (new booking_bike)->orderBy('id','desc')->paginate(10000);
        return view('bikes_booking.index_backend', compact('bike_booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $bikes = (new bike)->orderBy('id','desc')->paginate(10000);
        return view('bikes_booking.create',compact('bikes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storebooking_bikeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storebooking_bikeRequest $request)
    {
        $request->validate([
            'user_full_name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'quantite' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'nbr_jour' => 'required',
            'status' => 'required',
            'bike_id' => 'required',
        ]);



        (new booking_bike)->create($request->post());

        return redirect()->route('bikes_booking.index_backend')->with('success','Booking has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booking_bike  $booking_bike
     * @return \Illuminate\Http\Response
     */
    public function show(booking_bike $booking_bike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booking_bike  $booking_bike
     * @return \Illuminate\Http\Response
     */
    public function edit(booking_bike $booking_bike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatebooking_bikeRequest  $request
     * @param  \App\Models\booking_bike  $booking_bike
     * @return \Illuminate\Http\Response
     */
    public function update(Updatebooking_bikeRequest $request, booking_bike $booking_bike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booking_bike  $booking_bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking_bike $booking_bike)
    {
        //
    }
}
