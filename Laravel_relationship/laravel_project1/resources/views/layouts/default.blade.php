<!DOCTYPE html>
<html lang="en">
<head>

  <title> @yield('title') </title>
  

<!-- laravel comment -->
  {{--<!-- <title>{{$title}}</title> -->--}}



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">

  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>

</head>
<body>
@include('layouts.header')
  
<div class="container-fluid text-center">    
  <div class="row content">

    @include('layouts.leftbar')

  <div class="col-sm-8 text-left">

    @yield('content')

  </div>
    

    
    @include('layouts.rightbar')
      
    
  </div>
</div>

@include('layouts.footer')


</body>
</html>
