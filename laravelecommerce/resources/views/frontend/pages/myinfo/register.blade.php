@extends('frontend.layouts.master')
@section('content')

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">Register</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Register</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<div class="register pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title text-capitalize mb-30 pb-25">Create an account</h3>
                <div class="log-in-form">
                    <form action="./assets/php/mail.php" class="personal-information">
                        <div class="order-asguest theme1 mb-3">
                            <span>Already have an account?</span>
                            <a class="text-muted hover-color" href="login.html">Log in instead!</a>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                Social title
                            </label>
                            <div class="col-md-6">
                                <div class="d-flex flex-wrap">
                                    <div class="custom-radio">
                                        <input type="radio" id="test1" name="radio-group">
                                        <label for="test1">Mr</label>
                                    </div>
                                    <div class="custom-radio">
                                        <input type="radio" id="test2" name="radio-group">
                                        <label for="test2">Mrs</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="firstname" class="col-md-3 col-form-label">First
                                name</label>
                            <div class="col-md-6">
                                <input type="text" id="firstname" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-md-3 col-form-label">last name</label>
                            <div class="col-md-6">
                                <input type="text" id="lastname" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-6">
                                <input type="email" id="email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Password" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-6">
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="password" class="form-control" id="Password">
                                    <div class="input-group-prepend">
                                        <button type="button"
                                            class="input-group-text theme-btn--dark1 btn--md show-password">show</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-3 col-form-label">Birthdate</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="birthdate" placeholder="MM/DD/YYYY">
                            </div>
                            <div class="col-md-3"><label><span class="optional">
                                        Optional
                                    </span></label></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="check-box-inner pt-0">
                                    <div class="filter-check-box">
                                        <input type="checkbox" id="20820">
                                        <label for="20820">Receive offers from our partners</label>
                                    </div>
                                    <div class="filter-check-box">
                                        <input type="checkbox" id="20821">
                                        <label for="20821">Sign up for our newsletter</label>
                                        <p class="pl-25">You may unsubscribe at any moment. For that purpose, please
                                            find our contact info in the legal notice.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="sign-btn text-right">
                                    <a href="#" class="btn theme-btn--dark1 btn--md">save</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->






@endsection