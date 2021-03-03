@extends('layouts.app')

@section('content')

<div class="container">

    <center>
        <table class="table table-hover table-bordered">
          <thead>  
            <tr class="alert alert-info">
              <td>ID</td>
              <td>User Id</td>  
              <td>Title Name</td>    
          </tr>  
      </thead>

      <tbody>

        @foreach($categories as $category)
        <tr border="none">

            <td>{{$loop->iteration}}</td>

            <td>{{$category->user_id}}</td>
            <td>{{$category->title}} </td>


            @endforeach
        </tr>  
    </tbody> 

</table>
</center>
</div>
@endsection