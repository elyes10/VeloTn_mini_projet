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
                                    @foreach ($bike_booking as $booking)
                                        <tr>
                                            <td>{{ $booking->id }}</td>
                                            <td>{{ $booking->user_full_name }}</td>
                                            <td>{{ $booking->email }}</td>
                                            <td>{{ $booking->city }}</td>
                                            <td>{{$booking->quantite }}</td>
                                            <td>{{$booking->start_date }}</td>
                                            <td>{{$booking->end_date }}</td>
                                            <td>{{$booking->nbr_jour }}</td>
                                            <td>{{$booking->status }}</td>
                                            <td>{{$booking->bike()->find($booking->bike_id)->name }}</td>

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
