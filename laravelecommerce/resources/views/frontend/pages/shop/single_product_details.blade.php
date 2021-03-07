@extends('frontend.layouts.master')

@section('content')

<style>
	.filter-check-box.color-red input[type=checkbox]+label:before {
    background-color: red!important;
    border: 1px solid #666;
}
	.filter-check-box.color-green input[type=checkbox]+label:before {
    background-color: green!important;
    border: 1px solid #666;
}

.filter-check-box.color-red input[type=checkbox]:checked+label:before, .filter-check-box input[type=checkbox]:checked+label:before {
	background-color: white!important;
    border-radius: 0;
    opacity: 1;
    border-color: transparent #f33535 #f33535 transparent;
    -webkit-transform: rotate(
45deg
);
    transform: rotate(
45deg
);
}

</style>

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme3 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop-grid-3-column.html">Bags & Shoes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Originals Windbreaker Winter Jacket</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product-single start -->
<section class="product-single theme3 pt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="position-relative">
                    <span class="badge badge-danger top-right">New</span>
                </div>
                <div class="product-sync-init mb-20">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/single-product/1.jpg" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/single-product/2.jpg" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/single-product/3.jpg" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="assets/img/single-product/4.jpg" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                </div>

                <div class="product-sync-nav single-product">
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"> <img src="assets/img/single-product/1.2x.jpg"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"> <img src="assets/img/single-product/2.2x.jpg"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"><img src="assets/img/single-product/3.2x.jpg"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"><img src="assets/img/single-product/4.2x.jpg"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-md-0">
                <div class="single-product-info">
                    <div class="single-product-head">
                        <h2 class="title mb-20">Originals Windbreaker Winter Jacket</h2>
                        <div class="star-content mb-20">
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <a href="#" id="write-comment"><span class="ml-2"><i class="far fa-comment-dots"></i></span>
                                Read reviews <span>(1)</span></a>
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><span class="edite"><i
                                        class="far fa-edit"></i></span> Write a review</a>
                        </div>
                    </div>
                    <div class="product-body mb-40">
                        <div class="d-flex align-items-center mb-30">
                            <h6 class="product-price mr-20"><del class="del">$23.90</del>
                                <span class="onsale">$21.51</span></h6>
                            <span class="badge position-static bg-dark rounded-0">Save 10%</span>
                        </div>
                        <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker Jacket.</p>
                        <ul>
                            <li>Part of the Kaval Collection.</li>
                            <li>Regular fit is eased, but not sloppy, and perfect for any activity.</li>
                            <li>Plain-woven jacket specifically constructed for freedom of movement.</li>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <div class="d-flex">
                            <div class="product-size mr-5">
                                <h3 class="title">&nbsp;size</h3>
                                <select>
                                    <option value="0">S</option>
                                    <option value="1">M</option>
                                    <option value="2">L</option>
                                    <option value="3">XL</option>
                                    <option value="3">XXL</option>
                                </select>
                            </div>
                            <div class="check-box ml-5">
                                <h4 class="title">color</h4>
                                <div class="d-flex check-box-wrap-list">
                                    <div class="filter-check-box color-white">
                                        <input type="checkbox" id="test13">
                                        <label for="test13"></label>
                                    </div>
                                    <div class="filter-check-box color-black">
                                        <input type="checkbox" id="test14">
                                        <label for="test14"></label>
                                    </div>
                                    <div class="filter-check-box color-green">
                                        <input type="checkbox" id="test15">
                                        <label for="test15"></label>
                                    </div>
                                    <div class="filter-check-box color-red">
                                        <input type="checkbox" id="test16">
                                        <label for="test16"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-count style d-flex flex-column flex-sm-row mt-30 mb-20">
                            <div class="count d-flex">
                                <input type="number" min="1" max="10" step="1" value="1">
                                <div class="button-group">
                                    <button class="count-btn increment"><i class="fas fa-chevron-up"></i></button>
                                    <button class="count-btn decrement"><i class="fas fa-chevron-down"></i></button>
                                </div>
                            </div>
                            <div>
                                <button class="btn theme-btn--dark3 btn--xl mt-5 mt-sm-0 rounded-5">
                                    <span class="mr-2"><i class="ion-android-add"></i></span>
                                    Add to cart
                                </button>
                            </div>
                        </div>
                        <div class="addto-whish-list">
                            <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
                            <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
                        </div>
                        <div class="pro-social-links mt-10">
                            <ul class="d-flex align-items-center">
                                <li class="share">Share</li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-google"></i></a></li>
                                <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-single end -->
<!-- product tab start -->
<div class="product-tab theme3 bg-white pt-60 pb-80">
    <div class="container">
        <div class="product-tab-nav">
            <div class="row align-items-center">
                <div class="col-12">
                    <nav class="product-tab-menu single-product">
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                    aria-controls="pills-home" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-profile-tab" data-toggle="pill"
                                    href="#pills-profile" role="tab" aria-controls="pills-profile"
                                    aria-selected="false">Product Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- product-tab-nav end -->
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <!-- first tab-pane -->
                    <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="single-product-desc">
                            <ul>
                                <li>
                                    Block out the haters with the fresh adidas® Originals Kaval Windbreaker Jacket.
                                </li>
                                <li>
                                    Part of the Kaval Collection.
                                </li>
                                <li>
                                    Regular fit is eased, but not sloppy, and perfect for any activity.
                                </li>
                                <li>
                                    Plain-woven jacket specifically constructed for freedom of movement.
                                </li>
                                <li>
                                    Soft fleece lining delivers lightweight warmth.
                                </li>
                                <li>
                                    Attached drawstring hood.
                                </li>
                                <li>
                                    Full-length zip closure.
                                </li>
                                <li>
                                    Long sleeves with stretch cuffs.
                                </li>
                                <li>
                                    Side hand pockets.
                                </li>
                                <li>
                                    Brand graphics at left chest and back.
                                </li>
                                <li>
                                    Straight hem.
                                </li>
                                <li>
                                    Shell: 100% nylon;<br>Lining: 100% polyester.
                                </li>
                                <li>
                                    Machine wash, tumble dry.
                                </li>
                                <li>
                                    Imported.
                                </li>
                                <li>
                                    <div>Product measurements were taken using size MD. Please note that
                                        measurements may vary by size.</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- second tab-pane -->
                    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <div class="single-product-desc">
                            <div class="studio-thumb">
                                <a href="#"><img class="mb-30" src="assets/img/stodio.jpg" alt="studio-thumb"></a>
                                <h6 class="mb-2">Reference <small>demo_1</small> </h6>
                                <h6>In stock <small>300 Items</small> </h6>
                                <h3>Data sheet</h3>
                            </div>
                            <div class="product-features">
                                <ul>
                                    <li><span>Compositions</span></li>
                                    <li><span>Cotton</span></li>
                                    <li><span>Paper Type</span></li>
                                    <li><span>Doted</span></li>
                                    <li><span>Color</span></li>
                                    <li><span>Black</span></li>
                                    <li><span>Size</span></li>
                                    <li><span>L</span></li>
                                    <li><span>Frame Size</span></li>
                                    <li><span>40x60cm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- third tab-pane -->
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="single-product-desc">
                            <div class="grade-content">
                                <span class="grade">Grade </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <h6 class="sub-title">test</h6>
                                <p>23/09/2020</p>
                                <h4 class="title">test</h4>
                                <p>test</p>
                            </div>
                            <hr class="hr">
                            <div class="grade-content">
                                <span class="grade">Grade </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <h6 class="sub-title">Hastheme</h6>
                                <p>23/09/2020</p>
                                <h4 class="title">demo</h4>
                                <p>ok !</p>
                                <a href="#" class="btn theme-btn--dark3 theme-btn--dark3-sm btn--sm rounded-5 mt-15"
                                    data-toggle="modal" data-target="#exampleModalCenter">Write your review !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- new arrival section start -->
<section class="theme3 bg-white pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-30">
                    <h2 class="title text-dark text-capitalize">You might also like</h2>
                    <p class="text mt-10">Add Related products to weekly line up
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="product-slider-init slick-nav">
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="assets/img/new-products/1.jpg" alt="thumbnail">
                                            <img class="second-img" src="assets/img/new-products/1.1.jpg"
                                                alt="thumbnail">
                                        </a>
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
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="assets/img/new-products/2.jpg" alt="thumbnail">
                                        </a>
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
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                                    Fresh Foam Kaymin from new zeland</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-success top-left">-10%</span>
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="assets/img/new-products/3.jpg" alt="thumbnail">
                                        </a>
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
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                    Couture
                                                    Tricot Logo Stripe Jacket</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"> $21.51</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="assets/img/new-products/4.jpg" alt="thumbnail">
                                            <img class="second-img" src="assets/img/new-products/4.1.jpg"
                                                alt="thumbnail">
                                        </a>
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
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                    Couture
                                                    Tricot Logo Stripe Jacket</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"><del class="del">$23.90</del>
                                                    <span class="onsale">$21.51</span></h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="assets/img/new-products/5.jpg" alt="thumbnail">
                                        </a>
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
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's
                                                    Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="assets/img/new-products/6.jpg" alt="thumbnail">
                                        </a>
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
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's
                                                    Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"><del class="del">$23.90</del>
                                                    <span class="onsale">$21.51</span></h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->

                </div>
            </div>
        </div>
    </div><br>
    <center>
    <h4 style="background-color:black; color: white; width:150px; padding: 10px">
    	<a href="{{URL::to('/shop')}}">See More</a>
    </h4>
    </center>
</section>
<!-- new arrival section end -->

@include('frontend.layouts.product.popular_categories')

@stop