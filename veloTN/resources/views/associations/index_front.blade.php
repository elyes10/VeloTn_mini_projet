@extends('layouts.FrontMainLayout')
@section('title', 'Home')
<div>
    @section('navbar')
        @parent

    @endsection
</div>

<div>

    @section('content')

        <div class="container mt-2">

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <!-- search section -->
            <div class="cy_search_form">
                <button class="search_close"><i class="fa fa-times"></i></button>
                <div class="cy_search_input">
                    <input type="search" placeholder="search">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <!-- shop section start -->
            <div class="cy_bread_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1>Les Associations</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cy_shop_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 push-lg-4">
                            <div class="cy_shop_page" id="products">
                                <div class="row">

                                    @foreach ($associations as $association)
                                        <div class="col-lg-6 col-md-6 list-group-item">
                                            <div class="cy_store_box">
                                                <div class="cy_store_img">
                                                    <a href="shop_single.html"> <img
                                                            src="{{ asset('storage/images/' . $association->url) }}"
                                                            width="367px" height="400px"> </a>
                                                </div>
                                                <div class="cy_store_data"
                                                    style="min-width: 320px;min-height: 400px;max-height: 345px">
                                                    <div class="cy_store_text">
                                                        <h5>Nom :</h5>
                                                        <br>
                                                        <h3>{{ $association->name }}</h3>
                                                    </div>
                                                    <div class="cy_store_text">
                                                        <h5>email :</h5>
                                                        <h3>{{ $association->email }}</h3>
                                                    </div>
                                                    <div class="cy_store_text">
                                                        <h5>address :</h5>
                                                        <h3>{{ $association->address }}</h3>
                                                    </div>
                                                    <div class="cy_store_text">
                                                        <h5>numero :</h5>
                                                        <h3>{{ $association->numero }}</h3>
                                                    </div>
                                                    <div class="cy_store_text">
                                                        <h5>Fondateur Name :</h5>
                                                        <h3> {{ $association->fondateur()->find($association->fondateur_id)->name }}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-lg-12 col-md-12">
                                        <div class="cy_pagination">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li><a href="#" class="page_pre"><i class="fa fa-chevron-left"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#" class="active">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#" class="page_next"><i class="fa fa-chevron-right"
                                                                aria-hidden="true"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pull-lg-8">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
