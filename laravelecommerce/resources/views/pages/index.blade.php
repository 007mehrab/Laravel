@extends('layouts.master')

@section('content')

<!-- main slider start -->

@include('frontend.slider.main-slider')

<!-- main slider end -->


<!-- common banner  start -->

@include('frontend.banner.common-banner')

<!-- common banner  end -->


<!-- product tab start -->

@include('frontend.product.product')

<!-- product tab end -->


<!-- common banner  start -->

@include('frontend.banner.common-banner-second')

<!-- common banner  end -->


<!-- product tab repetation start -->

@include('frontend.product.product-repetation')

<!-- product tab repetation end -->


<!-- staic media start -->

@include('frontend.banner.service-banner')

<!-- staic media end -->


<!-- blog-section start -->

@include('frontend.latest-blog')

<!-- blog-section end -->


<!-- brand slider start -->

@include('frontend.slider.brand-slider')

<!-- brand slider end -->


@endsection