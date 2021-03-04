@extends('frontend.layouts.master')

@section('content')




<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">check out</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">check out</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="check-out-section pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-30">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    1 Personal Information
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <form action="./assets/php/mail.php" class="personal-information">
                                    <div class="order-asguest mt-2 mb-4">
                                        <a href="#">Order as a guest</a> <span class="separator"></span>
                                        <a class="gray" href="login.html">Sign in</a>
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
                                        <div class="col-md-3"><label><span class="optional">
                                                    Optional
                                                </span></label></div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="birthdate" class="col-md-3 col-form-label">Birthdate</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="birthdate"
                                                placeholder="MM/DD/YYYY">
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
                                                    <p class="pl-25">Be the First to Know. Sign up for
                                                        newsletter
                                                        today !</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="sign-btn text-right">
                                                <a href="#" class="btn theme-btn--dark1 btn--md">Continue</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    2 Addresses
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="checkout-inner border-0">
                                    <div class="checkout-address p-0">
                                        <p>
                                            The selected address will be used both as your personal address (for
                                            invoice) and as your delivery address.
                                        </p>
                                    </div>
                                    <div class="check-out-content">
                                        <form id="contact-form" class="p-0" action="assets/php/mail.php" method="post">
                                            <div class="form-group row">
                                                <label class="col-md-3" for="firstName2">First name</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="firstName2" name="firstname"
                                                        type="text" required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="lastName2">Last name</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="lastName2" name="lastname"
                                                        type="text" required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="company">Company</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="company" name="company" type="text"
                                                        required="">
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="optional">
                                                        Optional
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="address1">Address</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="address1" name="address1"
                                                        type="text" required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="address2">Address Complement</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="address2" name="address2"
                                                        type="text" required="">
                                                </div>
                                                <div class="col-md-3"> <span class="optional">
                                                        Optional
                                                    </span> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="city">City</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="city" name="city" type="text"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3">State</label>
                                                <div class="col-md-6">
                                                    <select class="form-control">
                                                        <option>-- please choose --</option>
                                                        <option value="1">AA</option>
                                                        <option value="2">AE</option>
                                                        <option value="3">AP</option>
                                                        <option value="4">Alabama</option>
                                                        <option value="5">Alaska</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="zip">Zip/Postal Code</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="zip" name="postcode" type="text"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3">Country</label>
                                                <div class="col-md-6">
                                                    <select class="form-control">
                                                        <option>-- please choose --</option>
                                                        <option>United States</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="phone">Phone</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="phone" type="text" required="">
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="optional">
                                                        Optional
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-9 col-md-offset-3">
                                                    <div class="filter-check-box mb-0">
                                                        <input type="checkbox" id="20824" required="">
                                                        <label class="checkout" for="20824">check out</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-12 text-right">
                                                    <button type="submit"
                                                        class="btn theme-btn--dark1 btn--md">Continue</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>3</span> Shipping Method
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                <div class="delivery-options-list">
                                    <form>
                                        <div class="delivery-option">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row align-items-center">
                                                        <div class="col-sm-1">
                                                            <div class="custom-radio-modify">
                                                                <div class="custom-radio">
                                                                    <input type="radio" id="test3" name="radio-group">
                                                                    <label id="pull-up" for="test3"> </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11 delivery-option-2">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-5 col-12">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-3">
                                                                            <img src="assets/img/icon/10.jpg"
                                                                                alt="My carrier">
                                                                        </div>
                                                                        <div class="col-9">
                                                                            <span class="carrier-name">My
                                                                                carrier</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4 col-12">
                                                                    <span class="carrier-delay">Delivery next
                                                                        day!</span>
                                                                </div>
                                                                <div class="col-sm-3 col-12">
                                                                    <span class="carrier-price">$7.00 tax excl.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-options">
                                            <div id="delivery" class="text-right">
                                                <label class="text-left d-block">If you would like to add a comment
                                                    about your order, please write it in the field
                                                    below.</label>
                                                <textarea class="form-control mt-2 mb-4"></textarea>
                                                <button type="submit" class="btn theme-btn--dark1 btn--md">
                                                    Continue
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span>4</span> Payment
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body pt-0">
                                <div class="custom-radio mb-4">
                                    <input type="radio" id="test5" name="radio-group">
                                    <label for="test5">Pay by Check</label>
                                </div>
                                <div class="custom-radio mb-4">
                                    <input type="radio" id="test6" name="radio-group">
                                    <label for="test6">Pay by bank wire</label>
                                </div>
                                <div class="custom-radio mb-4">
                                    <input type="radio" id="test7" name="radio-group">
                                    <label for="test7">Pay by Cash on Delivery</label>
                                </div>
                                <div class="filter-check-box mb-4">
                                    <input type="checkbox" id="20828" required="">
                                    <label class="checkout" for="20828">I agree to the terms and Conditions</label>
                                </div>

                                <button class="btn theme-btn--dark1 btn--md text-capitalize">
                                    order now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-30">
                <ul class="list-group cart-summary rounded-0">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <ul class="items">
                            <li>1 item</li>
                            <li>Shipping</li>
                        </ul>
                        <ul class="amount">
                            <li>$11.90</li>
                            <li>$7.00</li>
                        </ul>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <ul class="items">
                            <li>Total (tax excl.)</li>
                            <li>Taxes</li>
                        </ul>
                        <ul class="amount">
                            <li>$18.90</li>
                            <li>$0</li>
                        </ul>
                    </li>
                    <li class="list-group-item text-center">
                        <button class="btn theme-btn--dark1 btn--md">Proceed to checkout</button>
                    </li>
                </ul>

                <div class="delivery-info mt-20">
                    <ul>
                        <li>
                            <img src="assets/img/icon/10.png" alt="icon"> Security policy (edit with Customer
                            reassurance module)
                        </li>
                        <li>
                            <img src="assets/img/icon/11.png" alt="icon"> Delivery policy (edit with Customer
                            reassurance module)
                        </li>
                        <li class="mb-0">
                            <img src="assets/img/icon/12.png" alt="icon"> Return policy (edit with Customer
                            reassurance module)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->






@endsection