@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Edit Bike</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('bikes.index_backend') }}" enctype="multipart/form-data">
                                Back</a>
                        </div>
                    </div>
                </div>
                @if(session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('bikes.update',$bike->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Bike Model:</strong>
                                <input type="text" name="name" value="{{ $bike->name }}" class="form-control"
                                       placeholder="bike model">
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Bike Description:</strong>
                                <input type="text" name="description" class="form-control" placeholder="description"
                                       value="{{ $bike->description }}">
                                @error('description')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Stock:</strong>
                                <input type="number" name="stock" value="{{ $bike->stock }}" class="form-control"
                                       placeholder="stock" min="0">
                                @error('stock')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Price:</strong>
                                <input type="text" name="price" value="{{ $bike->price }}" class="form-control"
                                       placeholder="price" min="0">
                                @error('price')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div >
                                <strong>Image file:</strong>
                                <input type="file" name="image1" id="image1" class="form-control"
                                       placeholder="image upload"  accept="image/png, image/jpeg" >
                                @error('image1')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary ml-3">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
