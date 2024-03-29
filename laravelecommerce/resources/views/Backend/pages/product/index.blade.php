@extends('Backend.layouts.master')

@section('content')

<div class="row">
	<div class="col-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title mb-4">Orders</h5>
				<div class="table-responsive">
					<table class="table center-aligned-table">
						<thead>
							<tr>
								<th class="border-bottom-0">ID</th>
								<th class="border-bottom-0">Product Name</th>
								<th class="border-bottom-0">Brands</th>
								<th class="border-bottom-0">Images</th>
								
								<th class="border-bottom-0">Quantity</th>
								<th class="border-bottom-0">Price</th>
								<th class="border-bottom-0">Status</th>
								<th class="border-bottom-0"></th>
								<th class="border-bottom-0"></th>
								<th class="border-bottom-0"></th>
							</tr>
						</thead>
						<tbody>
							@foreach($products as $product)
							<tr>
								<td>{{$product->id}}</td>
								<td>{{$product->title}}</td>
								<td>{{$product->brand->name}}</td>

								<td>
									@foreach ($product->images as $img)
									<a href="{{URL::to('/details')}}">
										<img style="height: 80px" class="first-img" src="{{asset('assets/products/'.$img->image)}}" alt="thumbnail">
									</a>
									@endforeach
								</td>


								<td>{{$product->quantity}}</td>
								<td>{{$product->price}}</td>
								
								<td><label class="badge badge-teal">Approved</label></td>
								<td><a href="#" class="btn btn-outline-success btn-sm">Edit</a></td>
								<td><a href="#" class="btn btn-outline-danger btn-sm">Delete</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection