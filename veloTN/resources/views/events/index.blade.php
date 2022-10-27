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
            <div class="cy_shop_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 push-lg-4">
                            <div class="cy_shop_page" id="products">
                                <div class="row">

                                    @foreach ($events as $event)

                                        <div class="col-lg-6 col-md-6 list-group-item">
                                            <div class="cy_store_box">
                                                <div class="cy_store_img">
                                                    <a href="#"> <img src="{{ asset('public/front/images/imgbalade1.jpg') }}" alt="imgBalade"  width="367px" height="345px"/></a>
                                                </div>

                                                <div class="cy_store_data" style="min-width: 320px;min-height: 345px;max-height: 345px" >
                                                    <div class="cy_store_text">
                                                        <h3>{{ $event->name }}</h3>
                                                        <ul>

                                                        </ul>
                                                    </div>
                                                    <p>{{ $event->description }}</p>
                                                    <p> <strong style="color: darkorange;font-size: 20px">date : </strong>{{ $event->date }} </p>
                                                    <a href="{{ route('events.show',$event) }}" class="cy_button" data-hover="Show Details"><span>{{ $event->location }}</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-lg-12 col-md-12">
                                        <div class="cy_pagination">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li><a href="#" class="page_pre"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" class="active">1</a></li>
                                                    <li><a href="#" >2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#" class="page_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pull-lg-8">
                            <div class="cy_shop_sidebar">
                                <div class="widget woocommerce widget_product_search">
                                    <form class="search-form">
                                        <div class="input-group">
                                            <input type="text" value="" name="s" class="form-control" placeholder="Search">
                                            <span class="cy_search_btn">
                                        <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="widget woocommerce widget_category">
                                    <h3 class="woocommerce_widget_title">Price Filter</h3>
                                    <ul>
                                        <li>
                                            <label>Ascending
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>Descending
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>

                                    </ul>
                                </div>

                                <div class="widget woocommerce widget_availability">
                                    <h3 class="woocommerce_widget_title">Availability</h3>
                                    <ul>
                                        <li>
                                            <label>Available
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>All Events (120)
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
