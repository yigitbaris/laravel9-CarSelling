@extends('layouts.adminbase')

@section('title', 'Cars List')

@section('content')
<!--content-->
<div class="dashboard-wrapper">
	<div class="container-fluid dashboard-content">
		<div class="row">
			<div class="card-body">
				<a href="{{route('admin.cars.create')}}" class="btn btn-rounded btn-secondary">Add Cars</a>
				<table class="table table-striped" style="background-color: white;">
					<thead>
						<tr>
							<th scope="col" style="width: 10px;">Id</th>
							<th scope="col" style="width: 100px;">Category</th>
							<th scope="col">Title</th>
							<th scope="col">Price</th>
							<th scope="col">Year</th>
							<th scope="col">Fuel</th>
							<th scope="col">Kilometer</th>
							<th scope="col">Engine Power</th>
							<th scope="col">Image</th>
							<th scope="col">Status</th>
							<th scope="col" style="width: 50px;">Edit</th>
							<th scope="col" style="width: 50px;">Delete</th>
							<th scope="col" style="width: 50px;">Show</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($data as $rs)
						<tr>
							<td>{{$rs->id}}</td>
							<td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
							<td>{{$rs->title}}</td>
							<td>{{$rs->price}}</td>
							<td>{{$rs->year}}</td>
							<td>{{$rs->fuel}}</td>
							<td>{{$rs->kilometer}}</td>
							<td>{{$rs->enginepower}}</td>

							<td>
								@if ($rs->image)
								<img src="{{Storage::url($rs->image)}}" style="height: 60px">
								@endif
							</td>
							<td>{{$rs->status}}</td>
							<td><a href="{{route('admin.cars.edit',['id'=>$rs->id])}}" class="btn btn-primary">Edit </a></td>
							<td><a href="{{route('admin.cars.destroy',['id'=>$rs->id])}}" class="btn btn-danger" 
								onclick="return confirm('Deleting {{$rs->title}}!! Are you sure?')">Delete </a></td>
							<td><a href="{{route('admin.cars.show',['id'=>$rs->id])}}" class="btn btn-success">Show </a></td>
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	@endsection