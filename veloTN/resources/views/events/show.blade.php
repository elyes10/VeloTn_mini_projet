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
                            <div class="cy_shop_single_page">
                                <div class="row">


                                    <div class="col-lg-6 col-md-6">
                                        <div class="summary entry-summary">
                                            <h1 class="product_title">Event's Name: <strong>{{$event->name}}</strong></h1>
                                            <h4 class="product-price-amount">Date: {{$event->date}}</h4>
                                            <h4 class="product-price-amount">Location: {{$event->location}}</h4>

                                        </div>
                                    </div>


                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="woocommerce-tabs">
                                        <ul class="tabs">
                                            <li class="nav-item">
                                                <a class="nav-link " href="#discription" data-toggle="tab">Description</a>
                                            </li>

                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane " id="discription">
                                                <h3>Description</h3>
                                                <p class="woocommerce-product-detail">{{$event->description}}</p>
                                            </div>
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
                                            <input type="text" value="" name="s" class="form-control"
                                                   placeholder="Search">
                                            <span class="cy_search_btn">
                                        <button class="btn btn-search" type="submit"><i class="fa fa-search"
                                                                                        aria-hidden="true"></i></button>
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
                                            <label>All Events (41)
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


