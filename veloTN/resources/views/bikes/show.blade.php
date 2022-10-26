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
                                        <div class="woocommerce-product-gallery">
                                            <div id="sync1" class="owl-carousel owl-theme">
                                                <div class="item">
                                                    <div class="cy_product_img">
                                                        <img
                                                            src="{{ asset('storage/front') }}/images/{{ $bike->image }}"
                                                            alt="product" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6">
                                        <div class="summary entry-summary">
                                            <h1 class="product_title">{{$bike->name}}</h1>
                                            <h4 class="product-price-amount">${{$bike->price}}</h4>
                                            <p class="woocommerce-product-detail">{{$bike->description}}</p>

                                        </div>
                                    </div>


                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="woocommerce-tabs">
                                        <ul class="tabs">
                                            <li class="nav-item">
                                                <a class="nav-link " href="#discription" data-toggle="tab">Discription</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#review" data-toggle="tab">Book this bike</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane " id="discription">
                                                <h3>Discription</h3>
                                                <p class="woocommerce-product-detail">{{$bike->description}}</p>
                                            </div>

                                        <div role="tabpanel" class="tab-pane fade show active" id="review">
                                            <div class="woocommerce-Reviews">
                                                <div class="comments">
                                                    <h2 class="woocommerce-Reviews-title">Book it now</h2>

                                                </div>
                                                <div class="review_form_wrapper">
                                                    <div class="comment-respond">
                                                        <span class="comment-reply-title" >Model: <strong style="color: orange">{{$bike->name}}</strong></span>
                                                        <div class="comment-form">
                                                            <p class="review_message">
                                                                <span>Price: <strong style="color: orange">${{$bike->price}}</strong></span>
                                                            </p>

                                                            <form action="{{ route('bookings.store') }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <strong> Full Name:</strong>
                                                                            <input type="text" name="user_full_name"  class="form-control"
                                                                                   placeholder="Full Name">
                                                                            @error('user_full_name')
                                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <strong>Email:</strong>
                                                                            <input type="email" name="email" class="form-control" placeholder="email"
                                                                            >
                                                                            @error('email')
                                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <strong>Bike</strong>
                                                                            <select type="text" name="bike_id" class="form-control" style="color: purple">


                                                                                    <option value={{$bike->id}}>{{$bike->name}}</option>

                                                                            </select>
                                                                            @error('bike_id')
                                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                                                            <strong>City:</strong>
                                                                            <input type="text" name="city" class="form-control"
                                                                                   placeholder="city" >
                                                                            @error('city')
                                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <strong>Quantity:</strong>
                                                                            <input type="number" name="quantite"  class="form-control"
                                                                                   placeholder="quantite" min="0">
                                                                            @error('quantite')
                                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <strong>Satart date:</strong>
                                                                            <input type="date" name="start_date"  class="form-control"
                                                                                   placeholder="start_date" >
                                                                            @error('start_date')
                                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12" >
                                                                        <div >
                                                                            <strong>End date:</strong>
                                                                            <input type="date" name="end_date" class="form-control"
                                                                                   placeholder="end_date"  >
                                                                            @error('end_date')
                                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                        <div >
                                                                            <strong>Nbr Jour:</strong>
                                                                            <input type="number" name="nbr_jour"  class="form-control"
                                                                                   placeholder="nbr_jour"   >
                                                                            @error('nbr_jour')
                                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                        <div hidden>
                                                                            <strong>Status:</strong>
                                                                            <input type="number" name="status"  value="1" class="form-control"
                                                                                   placeholder="status(active:1/expired:0)"  >
                                                                            @error('status')
                                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-warning ml-3" style="margin-top: 15px">confirm</button>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <label>All Bikes (3141)
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

