@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
    <div class="content">


        <div class="container-fluid" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Associations Management</h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Numero</th>
                                        <th>Fondateur</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($associations as $association)
                                            <tr>
                                                <td>{{ $association->id }}</td>
                                                <td>{{ $association->name }}</td>
                                                <td>{{ $association->email }}</td>
                                                <td>{{ $association->address }}</td>
                                                <td>{{ $association->numero }}</td>
                                                <td>{{ $association->fondateur()->find($association->fondateur_id)->name }}                                           </td>
                                                <td>
                                                    <img src="{{ asset('storage/images/' . $association->url) }}"
                                                        width="100" height="100"></td>
                                                <td>
                                                    <form action="{{ route('associations.destroy', $association->id) }}"
                                                        method="Post">
                                                        <a class="btn btn-primary"
                                                            href="{{ route('associations.edit', $association->id) }}">Edit</a>
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
            <a class="btn btn-success" href="{{ route('associations.create') }}"> New association</a>
        </div>
    </div>
@endsection
