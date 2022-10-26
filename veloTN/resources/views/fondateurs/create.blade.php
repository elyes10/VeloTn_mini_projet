@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left mb-2">
                            <h2>Add Fondateur</h2>
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
                <form action="{{ route('fondateurs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Fondateur name:</strong>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Fondateur model">
                                @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong> Description:</strong>
                                <input type="text" name="description" class="form-control" placeholder="Description">
                                @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div>
                                <input type="file" name="file" id="file" accept="image/*"
                                    class="form-control @error('file') is-invalid @enderror">
                                @error('file')
                                    <div class="invalid-feedback">{{ $message }}</div>
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
