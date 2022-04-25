@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
<!--content-->
<div class="dashboard-wrapper">
	<div class="container-fluid dashboard-content">
		<div class="row">
		<div class="card-body">
		<a href="/admin/category/create"class="btn btn-rounded btn-secondary">Add Category</a>
							<table class="table table-striped" style="background-color: white;">
								<thead>
									<tr>
										<th scope="col">Id</th>
										<th scope="col">Title</th>
										<th scope="col">Keywords</th>
										<th scope="col">Description</th>
										<th scope="col">Image</th>
										<th scope="col">Status</th>
										<th scope="col">Edit</th>
										<th scope="col">Delete</th>
										<th scope="col">Show</th>
									</tr>
								</thead>

								<tbody>
	@foreach( $data as $rs )
		<tr>
		<td>{{$rs->id}}</td>
		<td>{{$rs->title}}</td>
		<td>{{$rs->keywords}}</td>
		<td>{{$rs->description}}</td>
		<td>{{$rs->image}}</td>
		<td>{{$rs->status}}</td>
		<td><a href="/admin/category/edit/{{$rs->id}}"class="btn btn-primary">Edit </a></td>
		<td><a href="/admin/category/delete/{{$rs->id}}"class="btn btn-danger"
				onclick="return confirm('Deleting !! Are you sure?')">Delete </a></td>
		<td><a href="/admin/category/show/{{$rs->id}}"class="btn btn-success">Show </a></td>
		</tr>
	
	@endforeach
	</tbody>
	</table>
			</div>
		</div>
	</div>

@endsection