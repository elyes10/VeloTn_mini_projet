@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left mb-2">
                            <h2>Add Reservation</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('bikes_booking.index_backend') }}"> Back</a>
                        </div>
                    </div>
                </div>
                @if(session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('bookings.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>User Full Name:</strong>
                                <input type="text" name="user_full_name"  class="form-control"
                                       placeholder="User Full Name">
                                @error('user_full_name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="email" name="email" class="form-control" placeholder="email"
                                      >
                                @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Bike</strong>
                                    <select type="text" name="bike_id" class="form-control" style="color: purple">

                                        @foreach($bikes as $bike)
                                        <option value={{$bike->id}}>{{$bike->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('bike_id')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>City:</strong>
                                <input type="text" name="city" class="form-control"
                                       placeholder="city" >
                                @error('city')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Quantity:</strong>
                                <input type="number" name="quantite"  class="form-control"
                                       placeholder="quantite" min="0">
                                @error('quantite')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Satart date:</strong>
                                <input type="date" name="start_date"  class="form-control"
                                       placeholder="start_date" >
                                @error('start_date')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12" >
                            <div >
                                <strong>End date:</strong>
                               <input type="date" name="end_date" class="form-control"
                                       placeholder="end_date"  >
                                @error('end_date')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div >
                                <strong>Nbr Jour:</strong>
                                <input type="number" name="nbr_jour"  class="form-control"
                                       placeholder="nbr_jour"   >
                                @error('nbr_jour')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div >
                                <strong>Status:</strong>
                                <input type="number" name="status"  max=1 min="0" class="form-control"
                                       placeholder="status(active:1/expired:0)"  >
                                @error('status')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary ml-3" style="margin-top: 15px">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
