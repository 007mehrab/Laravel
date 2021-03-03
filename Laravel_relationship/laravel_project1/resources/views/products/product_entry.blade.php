@extends('layouts.default')

@section('content')

@include('layouts.errors')

<br>

@if(Session::has('massage2'))
<p class="alert alert-success">{{Session::get('massage2')}}</p>
@endif

<h2 align="center">Product Form</h2>

<form method="post" action="{{ route('products.store') }}" class="form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group">      
    <label for="product_name">Product Name:</label><br/><br/>  
    <input type="text" class="form-control" name="product_name" /><br/><br/>  
  </div>  
  <div class="form-group">      
    <label for="product_code">Product Code:</label><br/><br/>
    <input type="text" class="form-control" name="product_code"/><br/><br/>  
  </div>  
  <div class="form-group">      
    <label for="quantity">Quantity:</label><br/><br/>  
    <input type="text" class="form-control" name="quantity"/><br/><br/>  
  </div>  
  <div class="form-group">      
    <label for="price">Price:</label><br/><br/>  
    <input type="text" class="form-control" name="price"/><br/><br/>  
  </div>  
  <br/>  
  <button type="submit" class="btn btn-success" >Insert</button>  
</form> <br><br>

@endsection