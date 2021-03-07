@extends('frontend.layouts.master')


@section('content')


<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">Mobile </h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bags &amp; Shoes</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<div class="product-tab bg-white pt-80 pb-80">
    <div class="container">
        <div class="grid-nav-wraper bg-lighten2 mb-30">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <nav class="shop-grid-nav">
                        <ul class="nav nav-pills align-items-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">
                                <i class="fa fa-th"></i>

                            </a>
                        </li>
                        <li class="nav-item mr-0">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                            role="tab" aria-controls="pills-profile" aria-selected="false"><i
                            class="fa fa-list"></i></a>
                        </li>
                        <li> <span class="total-products text-capitalize">There are 13 products.</span></li>
                    </ul>
                </nav>
            </div>
            <div class="col-12 col-md-6 position-relative">
                <div class="shop-grid-button d-flex align-items-center">
                    <span class="sort-by">Sort by:</span>
                    <button class="btn-dropdown rounded d-flex justify-content-between" type="button"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Relevance <span class="ion-android-arrow-dropdown"></span>
                </button>
                <div class="dropdown-menu shop-grid-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Relevance</a>
                    <a class="dropdown-item" href="#"> Name, A to Z</a>
                    <a class="dropdown-item" href="#"> Name, Z to A</a>
                    <a class="dropdown-item" href="#"> Price, low to high</a>
                    <a class="dropdown-item" href="#"> Price, high to low</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-tab-nav end -->
<div class="tab-content" id="pills-tabContent">
    <!-- first tab-pane -->
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="row grid-view theme1">


            <!-- loop Start -->
            @foreach ($products as $product)
            <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">

                <div class="card product-card">
                    <div class="card-body">
                        <div class="product-thumbnail position-relative">
                            <span class="badge badge-danger top-right">New</span>
                            @foreach ($product->images as $img)
                            <a href="{{URL::to('/details')}}">
                                <img class="first-img" src="{{asset('assets/products/'.$img->image)}}" alt="thumbnail">
                            </a>
                            @endforeach
                            <!-- product links -->
                            <ul class="product-links d-flex justify-content-center">
                                <li>
                                    <a href="wishlist.html">
                                        <span data-toggle="tooltip" data-placement="bottom"
                                        title="add to wishlist" class="icon-heart"> </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#compare">
                                        <span data-toggle="tooltip" data-placement="bottom"
                                        title="Add to compare" class="icon-shuffle"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#quick-view">
                                        <span data-toggle="tooltip" data-placement="bottom" title="Quick view"
                                        class="icon-magnifier"></span>
                                    </a>
                                </li>
                            </ul>
                            <!-- product links end-->
                        </div>
                        <div class="product-desc py-0"><br>
                            <h3 class="title"><a href="{{URL::to('/details')}}">
                                {{$product->title}}
                            </a></h3>
                            <div class="star-rating">
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star de-selected"></span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="product-price">{{$product->price}}</h6>
                                <button class="pro-btn" data-toggle="modal" data-target="#add-to-cart"><i
                                    class="icon-basket"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Loop End -->
                <!-- product-list End -->
            </div>
            
        </div>
        <div class="row">
            <div class="col-12">
                <nav class="pagination-section mt-30">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <ul class="pagination justify-content-center">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
</div><br>
<!-- product tab end -->




@endsection