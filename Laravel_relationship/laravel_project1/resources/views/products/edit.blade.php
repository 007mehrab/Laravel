@extends('layouts.default')
@section('content')
<br>

@include('layouts.errors')


  <h2>Edit Form</h2>

<form method="post" action="{{ route('products.update',$product->id )}}" class="form">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="_method" value="PUT">



          <div class="form-group">      
              <label for="product_name">Product Name:</label><br/><br/>  
              <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}" /><br/><br/>  
          </div>  
<div class="form-group">      
<label for="product_code">Product Code :</label><br/><br/>  
              <input type="text" class="form-control" name="product_code" value="{{$product->product_code}}" /><br/><br/>  
          </div>  
<div class="form-group">      
              <label for="quantity">Quantity:</label><br/><br/>  
              <input type="text" class="form-control" name="quantity"
              value="{{$product->quantity}}"/><br/><br/>  
          </div>  
<div class="form-group">      
              <label for="price">Price:</label><br/><br/>  
              <input type="text" class="form-control" name="price" value="{{$product->price}}" /><br/><br/>  
          </div>  
<br/>  
<button type="submit" class="btn btn-success" >Update</button>
</form> <br><br>

@endsection