@extends('frontend.layouts.master')

@section('content')

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">login</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Log in to your account </li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<div class="my-account pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 align="center" class="title text-capitalize mb-30 pb-25"> Log in to your account</h3>
                <form class="log-in-form">
                    <div class="form-group row offset-md-3">
                        <label for="staticEmail">Email</label><br>
                        <div class="col-md-8">
                            <input type="email" class="form-control" id="staticEmail">
                        </div>
                    </div>
                    <div class="form-group row offset-md-3">
                        <label for="inputPassword">Password</label><br>
                        <div class="col-md-8">
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="password" class="form-control" id="inputPassword">
                                <div class="input-group-prepend">
                                    <button type="button"
                                        class="input-group-text  theme-btn--dark1 btn--md show-password">show</button>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="form-group row pb-3 text-center">
                        <div class="col-md-6 offset-md-3">
                            <div class="login-form-links">
                                <a href="#" class="for-get">Forgot your password?</a>
                                <div class="sign-btn">
                                    <a href="#" class="btn theme-btn--dark1 btn--md">Sign in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row text-center mb-0">
                        <div class="col-12">
                            <div class="border-top">
                                <a href="{{URL::to('/register')}}" class="no-account">No account? Create one here</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->













@endsection