    <nav id="sticky" class="header-bottom theme1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10 offset-lg-2 d-flex flex-wrap align-items-center position-relative">
                    <ul class="main-menu d-flex">

                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="{{URL::to('/contact')}}">contact Us</a></li>
                        <li><a href="{{URL::to('/about')}}">About Us</a></li>
                        <li><a href="{{URL::to('/blog')}}">Blog</a></li>

                        <li>
                            <a href="#">Pages<i class="ion-ios-arrow-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{URL::to('/cart')}}">Cart</a></li>
                                <li><a href="{{URL::to('/compare')}}">Compare</a></li>
                                <li><a href="{{URL::to('/wishlist')}}">Wishlist</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Account<i class="ion-ios-arrow-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{URL::to('/myaccount')}}">My Account</a></li>
                                <li><a href="{{URL::to('/checkout')}}">Checkout</a></li>
                            </ul>
                        </li>

                        <li><a href="/register">Register</a></li>

                        <li><a href="/login">Login</a></li>




                        <!-- <li class="active ml-0">
                            <a href="#" class="pl-0">Pages <i class="ion-ios-arrow-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="/cart">Cart</a></li>
                                <li><a href="/compare">Compare</a></li>
                                <li><a href="/wishlist">Wishlist</a></li>
                            </ul>
                        </li> -->


                    <!--<li class="position-static">
                            <a href=" #">Shop <i class="ion-ios-arrow-down"></i></a>
                            <ul class="mega-menu row">
                                <li class="col-3">
                                    <ul>
                                        <li class="mega-menu-title"><a href="#">Shop Grid</a></li>
                                        <li><a href="shop-grid-3-column.html">Shop Grid 3 Column</a></li>
                                        <li><a href="shop-grid-4-column.html">Shop Grid 4 Column</a></li>
                                        <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                        <li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="col-3">
                                    <ul>
                                        <li class="mega-menu-title"><a href="#">Shop List</a></li>
                                        <li><a href="shop-grid-list.html">Shop List</a></li>
                                        <li><a href="shop-grid-list-left-sidebar.html">Shop List Left Sidebar</a>
                                        </li>
                                        <li><a href="shop-grid-list-right-sidebar.html">Shop List Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-3">
                                    <ul>
                                        <li class="mega-menu-title"><a href="#">Shop Single</a></li>
                                        <li><a href="single-product.html">Shop Single</a></li>
                                        <li><a href="single-product-configurable.html">Shop Variable</a></li>
                                        <li><a href="single-product-affiliate.html">Shop Affiliate</a></li>
                                        <li><a href="single-product-group.html">Shop Group</a></li>
                                    </ul>
                                </li>
                                <li class="col-3">
                                    <ul>
                                        <li class="mega-menu-title"><a href="#">other pages</a></li>
                                        <li><a href="about-us.html">About Page</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="compare.html">Compare Page</a></li>
                                    </ul>
                                </li>
                                <li class="col-6 mt-4">
                                    <a href="single-product.html" class="zoom-in overflow-hidden"><img
                                            src="assets/img/mega-menu/1.jpg" alt="img"></a>
                                </li>
                                <li class="col-6 mt-4">
                                    <a href="single-product.html" class="zoom-in overflow-hidden"><img
                                            src="assets/img/mega-menu/2.jpg" alt="img"></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages <i class="ion-ios-arrow-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Page</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout Page</a></li>
                                <li><a href="compare.html">Compare Page</a></li>
                                <li><a href="login.html">Login &amp; Register Page</a></li>
                                <li><a href="myaccount.html">Account Page</a></li>
                                <li><a href="wishlist.html">Wishlist Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog <i class="ion-ios-arrow-down"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Blog Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid-3-column.html">Blog Grid 3 column</a></li>
                                        <li><a href="blog-grid-4-column.html">Blog Grid 4 column</a></li>
                                        <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                        <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog List</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                        <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog Single</a>
                                    <ul class="sub-menu">
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                        <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a>
                                        </li>
                                        <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidbar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                        
                    </ul>

                </div>
            </div>
        </div>
    </nav>