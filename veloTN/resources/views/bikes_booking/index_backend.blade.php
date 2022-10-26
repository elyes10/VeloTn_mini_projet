@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
    <div class="content">


        <div class="container-fluid" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Bikes Booking Management</h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive" >
                                <table class="table" >
                                    <thead class=" text-primary">
                                    <th>R.No</th>
                                    <th> Full Name</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>Nbr.Bikes</th>
                                    <th>Start date</th>
                                    <th >End date</th>
                                    <th >Nbr.Jours</th>
                                    <th >status</th>
                                    <th >Bike</th>
                                    <th >Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($booking_bike as $booking_bike)
                                        <tr>
                                            <td>{{ $booking_bike->id }}</td>
                                            <td>{{ $booking_bike->user_full_name }}</td>
                                            <td>{{ $booking_bike->email }}</td>
                                            <td>{{ $booking_bike->city }}</td>
                                            <td>{{$booking_bike->quantite }}</td>
                                            <td>{{$booking_bike->start_date }}</td>
                                            <td>{{$booking_bike->end_date }}</td>
                                            <td>{{$booking_bike->nbr_jour }}</td>
                                            <td>{{$booking_bike->status }}</td>
                                            <td>{{$booking_bike->bike()->find($booking_bike->bike_id)->name }}</td>
                                            <td>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div style="float: right;margin-right: 30px">
            <a class="btn btn-success" href="{{ route('bookings.create') }}"> New Reservation</a>
        </div>
    </div>
@endsection
