@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
    <div class="content">


        <div class="container-fluid" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Rides Management</h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive" >
                                <table class="table" >
                                    <thead class=" text-primary">
                                    <th>Ride.N</th>
                                    <th> title</th>
                                    <th>description</th>
                                    <th>destination</th>
                                    <th>started_At</th>
                                    <th >Event</th>
                                    <th >Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($rides as $ride)
                                        <tr>
                                            <td>{{ $ride->id }}</td>
                                            <td>{{ $ride->title }}</td>
                                            <td>{{ $ride->description }}</td>
                                            <td>{{ $ride->destination }}</td>
                                            <td>{{ $ride->startedAt }}</td>
                                            <td>{{ $ride->event()->find($ride->event_id)->name }}</td>
                                            <td>
                                            <td>
                                                <form action="{{ route('rides.destroy', $ride->id) }}"
                                                      method="Post">

                                                    <div>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button style="width: 110px;margin-top: 5px" type="submit"
                                                                class="btn btn-danger">Delete</button>
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
            <a class="btn btn-success" href="{{ route('rides.create') }}"> New Ride</a>
        </div>
    </div>
@endsection
