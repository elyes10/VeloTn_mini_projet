@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left mb-2">
                            <h2>Add Ride</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('rides.index_backend') }}"> Back</a>
                        </div>
                    </div>
                </div>
                @if(session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('rides.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Ride's Tile:</strong>
                                <input type="text" name="title"  class="form-control"
                                       placeholder="title">
                                @error('title')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description</strong>
                                <input type="text" name="description"  class="form-control"
                                       placeholder="description">
                                @error('description')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Destination</strong>
                                <input type="text" name="destination"  class="form-control"
                                       placeholder="destination">
                                @error('destination')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Started_At:</strong>
                                <input type="date" name="startedAt"  class="form-control"
                                       placeholder="startedAt" >
                                @error('startedAt')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Event</strong>
                                <select type="text" name="event_id" class="form-control" style="color: purple">
                                    <option value="0">---select an Event---</option>
                                    @foreach($events as $event)
                                        <option value={{$event->id}}>{{$event->name}}</option>
                                    @endforeach
                                </select>
                                @error('event_id')
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
