@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
    <div class="content">


        <div class="container-fluid" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Bikes Management</h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive" >
                                <table class="table" >
                                    <thead class=" text-primary">
                                    <th>B.No</th>
                                    <th> Model</th>
                                    <th>Description</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Ratings</th>
                                    <th >Image</th>
                                    <th >Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($bikes as $bike)
                                        <tr>
                                            <td>{{ $bike->id }}</td>
                                            <td>{{ $bike->name }}</td>
                                            <td>{{ $bike->description }}</td>
                                            <td>{{ $bike->stock }}</td>
                                            <td>${{ $bike->price }}</td>
                                            <td>{{ $bike->ratings }}</td>
                                            <td>{{ $bike->image }}</td>
                                            <td>
                                                <form action="{{ route('bikes.destroy',$bike->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('bikes.edit',$bike->id) }}">Edit</a>
                                                    <div>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button style="width: 110px;margin-top: 5px" type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </form>
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
            <a class="btn btn-success" href="{{ route('bikes.create') }}"> New Bike</a>
        </div>
    </div>
@endsection
