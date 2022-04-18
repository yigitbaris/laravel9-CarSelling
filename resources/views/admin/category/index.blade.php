@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
<!--content-->
<main class="content">
		<div class="container-fluid p-0">
			<a href="/admin/category/create"class="btn btn-primary">Add Category</a>
			
			<div class="row">
			<br>
				<div class="col-12">
					<div class="card">
					<div class="card-body">
						
			<h4 class="card-title">Category List</h4>
			<div class="table-responsive">
				<table class="table">
				<thead>
					<tr>
					<th style="width:10px">Id</th>
					<th>Title</th>
					<th>Keywords</th>
					<th>Description</th>
					<th>Image</th>
					<th>Status</th>
					<th style="width:50px">Edit</th>
					<th style="width:50px">Delete</th>
					<th style="width:50px">Show</th>
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
				<td><label class="badge badge-danger">Pending</label></td>
				</tr>
			
			@endforeach
			</tbody>
			</table>
		</div>
			</div>
						<div class="card-body">
						</div>
					</div>
				</div>
			</div>

		</div>
	</main>

@endsection