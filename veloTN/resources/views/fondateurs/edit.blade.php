@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Edit Fondateur</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('fondateurs.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
                @if (session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('fondateurs.update', $fondateur->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Fondateur name:</strong>
                                <input type="text" name="name" id="name" value="{{ $fondateur->name }}"
                                    class="form-control" placeholder="fondateur name">
                                @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Fondateur Description:</strong>
                                <input type="text" name="description" class="form-control"
                                    value="{{ $fondateur->description }}" placeholder="description">
                                @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div>
                                <input type="file" name="file" id="file" accept="image/*"
                                    class="form-control @error('file') is-invalid @enderror">
                                <br>
                                <img src="{{ asset('storage/images/' . $fondateur->url) }}" class="img-fluid img-thumbnail"
                                    width="150">
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
