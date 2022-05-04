@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
<!--content-->
<div class="dashboard-wrapper">
	<div class="container-fluid dashboard-content">
		<div class="row">
			<div class="card-body">
				
				<a href="{{route('admin.category.create')}}" class="btn btn-rounded btn-secondary">Add Category</a>
				<h5 class="card-header">Category Table</h5>
				<table class="table table-striped" style="background-color: white;">
					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Parent</th>
							<th scope="col">Title</th>
							<th scope="col">Image</th>
							<th scope="col">Status</th>
							<th scope="col">Edit</th>
							<th scope="col">Delete</th>
							<th scope="col">Show</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($data as $rs)
						<tr>
							<td>{{$rs->id}}</td>
							<td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</td>
							<td>{{$rs->title}}</td>
							<td>
								@if ($rs->image)
								<img src="{{Storage::url($rs->image)}}" style="height: 60px">
								@endif
							</td>
							<td>{{$rs->status}}</td>
							<td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-primary">Edit </a></td>
							<td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-danger" 
								onclick="return confirm('Deleting {{$rs->title}}!! Are you sure?')">Delete </a></td>
							<td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-success">Show </a></td>
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	@endsection