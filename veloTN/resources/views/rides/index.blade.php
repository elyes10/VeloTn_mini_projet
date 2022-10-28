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
                            <h1>Rides</h1>
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

                                    @foreach ($rides as $ride)
                                        <div class="col-lg-6 col-md-6 list-group-item">
                                            <div class="cy_store_box">

                                                <div class="cy_store_data"
                                                     style="min-width: 320px;min-height: 400px;max-height: 345px">
                                                    <div class="cy_store_text">
                                                        <h5><strong> Ride's Title :</strong></h5>
                                                        <br>
                                                        <h3>{{ $ride->title }}</h3>
                                                    </div>
                                                    <div class="cy_store_text">
                                                        <h5><strong>Description :</strong></h5>
                                                        <h3>{{ $ride->description }}</h3>
                                                    </div>
                                                    <div class="cy_store_text">
                                                        <h5><strong>Destination :</strong> </h5>
                                                        <h3>{{ $ride->destination }}</h3>
                                                    </div>
                                                    <div class="cy_store_text">
                                                        <h5><strong>Started_At :</strong> </h5>
                                                        <h3>{{ $ride->startedAt }}</h3>
                                                    </div>
                                                    <div class="cy_store_text">
                                                        <h5><strong>Event's Name :</strong></h5>
                                                        <h3> {{ $ride->event()->find($ride->event_id)->name }}</h3>
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
