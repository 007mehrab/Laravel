@extends('frontend.layouts.master')


@section('content')




<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">compare</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">compare</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="compare-section theme1 pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title  mb-30 pb-25 text-capitalize">compare</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">product info</th>
                                <th scope="col" class="text-center"> <img src="assets/img/product/14.jpg" alt="img">
                                    <span class="sub-title d-block">Water and Wind Resistant</span>
                                    <a href="cart.html" class="btn  theme-btn--dark1 btn--lg"> add to cart</a>
                                </th>
                                <th scope="col" class="text-center"> <img src="assets/img/product/15.jpg" alt="img">
                                    <span class="sub-title d-block">Originals Kaval Windbreaker</span>
                                    <a href="cart.html" class="btn  theme-btn--dark1 btn--lg"> add to cart</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    Price
                                </th>
                                <td class="text-center">
                                    <span class="whish-list-price">
                                        $38.24
                                    </span>
                                </td>
                                <td class="text-center">
                                    <span class="whish-list-price">
                                        $38.24
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Description
                                </th>
                                <td class="text-center">
                                    <p>Water and Wind Resistant</p>
                                </td>
                                <td class="text-center">
                                    <p>Originals Kaval Windbreaker</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Availability
                                </th>
                                <td class="text-center">
                                    <span class="badge badge-danger position-static">In Stock</span>
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-danger position-static">In Stock</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Rgb color
                                </th>
                                <td class="text-center">
                                    yes
                                </td>
                                <td class="text-center">
                                    No
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    colors
                                </th>
                                <td class="text-center">
                                    3
                                </td>
                                <td class="text-center">
                                    4
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->











@endsection