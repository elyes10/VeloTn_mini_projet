@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
    <div class="content">


        <div class="container-fluid" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Fondateurs Management</h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($fondateurs as $fondateur)
                                            <tr>
                                                <td>{{ $fondateur->id }}</td>
                                                <td>{{ $fondateur->name }}</td>
                                                <td>{{ $fondateur->description }}</td>
                                                <td><img src="{{ asset('storage/images/' . $fondateur->url) }}"
                                                        width="100" height="100"></td>
                                                <td>
                                                    <form action="{{ route('fondateurs.destroy', $fondateur->id) }}"
                                                        method="Post">
                                                        <a class="btn btn-primary"
                                                            href="{{ route('fondateurs.edit', $fondateur->id) }}">Edit</a>
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
            <a class="btn btn-success" href="{{ route('fondateurs.create') }}"> New fondateur</a>
        </div>
    </div>
@endsection
