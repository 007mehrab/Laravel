<style>
    .header-middle {
        background-color: #f1fbfd !important;
    }
    .imgs{
        max-width: 70px;
    }

    .py-30 {
    padding-top: 15px;
    padding-bottom: 15px;
}
</style>    

<!-- header-middle satrt -->
<div class="header-middle theme3 bg-white py-30">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-5 col-lg-2 order-first">
                <div class="logo text-center text-sm-left mb-30 mb-sm-0">
                    <a href="{{URL::to('/')}}"><img class="imgs" src="assets/img/logo/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-7 order-1 order-lg-0">
                <div class="d-flex flex-wrap w-100 align-items-center">
                    <div class="vertical-menu d-none d-lg-block">
                        <button class="menu-btn d-flex"><span class="ion-android-menu"></span>All Categories<span
                            class="ion-ios-arrow-down d-block ml-auto"></span> </button>
                            <ul class="vmenu-content display-none">
                                <li class="menu-item">
                                    <a href="#"> Beauty & Health <i class="ion-ios-arrow-right"></i></a>
                                    <ul class="verticale-mega-menu flex-wrap">
                                        <li>
                                            <a href="#">
                                                <span> <strong>Makeup</strong></span>
                                            </a>
                                            <ul class="submenu-item">
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Lips</a></li>
                                                <li><a href="#">Face</a></li>
                                                <li><a href="#">Makeup Tools</a></li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><strong>Health Care</strong></span>
                                            </a>
                                            <ul class="submenu-item">
                                                <li><a href="#">Massage &amp; Relaxation</a></li>
                                                <li><a href="#">Household Health Monitors</a></li>
                                                <li><a href="#">Chinese Medicine</a></li>
                                                <li><a href="#">Personal Health Care Items</a></li>
                                            </ul>

                                        </li>

                                        <li>
                                            <a href="#">
                                                <span><strong>Skin Care</strong></span>
                                            </a>
                                            <ul class="submenu-item">
                                                <li><a href="#">Face</a></li>
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Body</a></li>
                                                <li><a href="#">Skin Care Tools</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><strong>Nail Art & Tools</strong></span>
                                            </a>
                                            <ul class="submenu-item">
                                                <li><a href="#">Gel Nail Polish</a></li>
                                                <li><a href="#">Nail Drills</a></li>
                                                <li><a href="#">Nail Dryers</a></li>
                                                <li><a href="#">Nail Glitter</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                    <!-- sub menu -->
                                </li>
                                <li class="menu-item">
                                    <a href="#">Skin Care <i class="ion-ios-arrow-right"></i></a>
                                    <ul class="verticale-sub-menu">
                                        <li>
                                            <ul class="submenu-item">
                                                <li><a href="#">Face</a></li>
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Body</a></li>
                                                <li><a href="#">Skin Care Tools</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>
                                <li class="menu-item">
                                    <a href="#"> Health Care <i class="ion-ios-arrow-right"></i></a>
                                    <ul class="verticale-sub-menu">
                                        <li>
                                            <ul class="submenu-item">
                                                <li><a href="#">Massage & Relaxation</a></li>
                                                <li><a href="#">Household Health Monitors</a></li>
                                                <li><a href="#">Chinese Medicine</a></li>
                                                <li><a href="#">Personal Health Care Items</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>
                                <li class="menu-item"><a href="#">Face</a></li>
                                <li class="menu-item"><a href="#">Eyes</a></li>
                                <li class="menu-item"><a href="#">Lips</a></li>
                                <li class="menu-item"><a href="#">Makeup Tools</a></li>
                                <li class="menu-item"><a href="#">Skin Care Tools</a></li>
                                <li class="menu-item"><a href="#">Massage & Relaxation</a></li>
                            </ul>
                            <!-- menu content -->
                        </div>
                        <div class="search-form width-calc-from-left pl-35 mt-30 mt-lg-0">
                            <form class="form-inline position-relative">
                                <input class="form-control theme3" type="search"
                                placeholder="Enter your search key ...">
                                <button class="btn bg-white search-btn position-left" type="submit"><i
                                    class="icon-magnifier"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-lg-3">
                        <!-- search-form end -->
                        <div class="d-flex align-items-center justify-content-center justify-content-sm-end">
                            <div class="cart-block-links theme3">
                                <ul class="d-flex">
                                    <li>
                                        <a href="{{URL::to('/compare')}}">
                                            <span class="position-relative">
                                                <i class="icon-shuffle"></i>
                                                <span class="badge cbdg1">1</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="offcanvas-toggle" href="#offcanvas-wishlist">
                                            <span class="position-relative">
                                                <i class="icon-heart"></i>
                                                <span class="badge cbdg1">3</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="mr-0 cart-block position-relative">
                                        <a class="offcanvas-toggle" href="#offcanvas-cart">
                                            <span class="position-relative">
                                                <i class="icon-bag"></i>
                                                <span class="badge cbdg1">3</span>
                                            </span>
                                            <span class="cart-total position-relative">$90.00</span>
                                        </a>
                                    </li>
                                    <!-- cart block end -->
                                </ul>
                            </div>
                            <div class="mobile-menu-toggle theme3 d-lg-none">
                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                    <svg viewbox="0 0 800 600">
                                        <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                        <path d="M300,320 L540,320" id="middle"></path>
                                        <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318)">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle end -->