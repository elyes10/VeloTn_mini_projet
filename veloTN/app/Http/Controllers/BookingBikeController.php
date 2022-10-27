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
        $booking_bike = (new booking_bike)->orderBy('id','desc')->paginate(10000);
        return view('bikes_booking.index_backend', compact('booking_bike'));
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

        MailController::basic_email($request->input('email'),$request->input('user_full_name'),$request->input('nbr_jour'),$request->input('bike_id'),$request->input('quantite'),$request->input('start_date'));
        return redirect()->back();
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
        return view('bikes_booking.edit',compact('booking_bike'));
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);
        $booking_bike->fill($request->post())->save();

        return redirect()->route('bikes.index_backend')->with('success','bike Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param booking_bike $bike
     * @return Response
     */
    public function destroy(booking_bike $bike)
    {
        $bike->delete();
        return redirect()->route('bikes_booking.index_backend')->with('success','bike has been deleted successfully');
    }
}
