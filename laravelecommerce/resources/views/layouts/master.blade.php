<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<meta name="description" content="" />
<title>Ekto – Multipurpose eCommerce HTML Template</title>
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
<link rel="stylesheet" href="assets/css/fontawesome.min.css" />
<link rel="stylesheet" href="assets/css/ionicons.min.css" />
<link rel="stylesheet" href="assets/css/simple-line-icons.css" />
<link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/plugins/plugins.css" />
<link rel="stylesheet" href="assets/css/style.min.css" />

</head>

<body>


<!-- offcanvas-mobile-menu start -->

@include('frontend.offcanvas.mobile.main-menu')

<!-- offcanvas-mobile-menu end -->




<!-- OffCanvas Wishlist Start -->

@include('frontend.offcanvas.Wishlist')

<!-- OffCanvas Wishlist End -->



<!-- OffCanvas Cart Start -->

@include('frontend.offcanvas.cart')

<!-- OffCanvas Cart End -->





<!-- header start -->

@include('frontend.header.header')

<!-- header end -->




<!-- ============Contact============ -->

@yield('content')

<!-- ==========End Contact=========== -->




<!-- footer strat -->

@include('frontend.footer.footer')

<!-- footer end -->





<!-- modals start -->

@include('frontend.modal')

<!-- modals end -->



<!--*********************** 
all js files
***********************-->

<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins/plugins.js"></script>
<script src="assets/js/main.js"></script>


</body>

</html>