@extends('layouts.default')
@section('content')
<br>

<h2 align="center">Products List</h2>

<a class="btn btn-success" href="{{URL::to('/products/create')}}">New Entry</a>
<br><br>
<center>
<table class="table table-hover table-bordered">
  <thead>  
    <tr class="alert alert-info">
      <td>SL#</td>  
      <td>Product Name</td>   
      <td>Product Code</td>  
      <td>Quantity</td>
      <td>Price</td>
      <td colspan="2" align="center">Action</td> 
    </tr>  
  </thead>

<tbody>
    @foreach($products as $product)
    <tr border="none">
    <td>{{$loop->iteration}}</td>
      <!-- <td>{{$product->id}}</td>   -->
      <td>{{$product->product_name}} </td>
      <td>{{$product->product_code}}</td>   
      <td>{{$product->quantity}}</td>  
      <td>{{$product->price}}</td>

      <td>

          <a class="btn btn-success" href="{{route('products.edit', $product->id)}}">Update</a>

      </td>



      <td>
        <form action="/products/{{$product->id}}" method="post">

          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="_method" value="delete">

          <button class="btn btn-danger" type="submit">Delete</button>

        </form>
      </td>


      @endforeach
      </tr>  
    </tbody> 
   
  </table>
</center>


@endsection 