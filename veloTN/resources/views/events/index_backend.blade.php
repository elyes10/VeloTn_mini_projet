@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">


    <div class="container-fluid" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Events Management</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive" >
                            <table class="table" >
                                <thead class=" text-primary">
                                <th>Event.N</th>
                                <th> Name of event</th>
                                <th>Description</th>
                                <th>Location</th>
                                <th>Date</th>
                                <th >Action</th>
                                </thead>
                                <tbody>
                                @foreach ($events as $event)
                                <tr>
                                    <td>{{ $event->id }}</td>
                                    <td>{{ $event->name }}</td>
                                    <td>{{ $event->description }}</td>
                                    <td>{{ $event->location }}</td>
                                    <td>{{ $event->date }}</td>
                                    <td>
                                        <form action="{{ route('events.destroy',$event->id) }}" method="Post">
                                            <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Edit</a>
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
        <a class="btn btn-success" href="{{ route('events.create') }}"> New Event</a>
    </div>
</div>
@endsection
