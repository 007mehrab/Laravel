@extends('frontend.layouts.master')

@section('content')

<!-- main slider start -->

@include('frontend.layouts.slider.main-slider')

<!-- main slider end -->


<!-- common banner  start -->

@include('frontend.layouts.banner.common-banner')

<!-- common banner  end -->


<!-- product tab start -->

@include('frontend.layouts.product.product')

<!-- product tab end -->


<!-- common banner  start -->

@include('frontend.layouts.banner.common-banner-second')

<!-- common banner  end -->


<!-- Popular category tab start -->

@include('frontend.layouts.product.popular_categories')

<!-- Popular category tab end -->


<!-- product tab repetation start -->

@include('frontend.layouts.product.product-repetation')

<!-- product tab repetation end -->


<!-- staic media start -->

@include('frontend.layouts.banner.service-banner')

<!-- staic media end -->


<!-- blog-section start -->

@include('frontend.layouts.latest-blog')

<!-- blog-section end -->


<!-- brand slider start -->

@include('frontend.layouts.slider.brand-slider')

<!-- brand slider end -->


@endsection