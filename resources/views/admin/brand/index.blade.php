@extends('layouts.adminbase')

@section('title', 'Brand List')

@section('content')
<!--content-->
<div class="dashboard-wrapper">
	<div class="container-fluid dashboard-content">
		<div class="row">
			<div class="card-body">
				<a href="{{route('admin.brand.create')}}" class="btn btn-rounded btn-secondary">Add Brand</a>
				<table class="table table-striped" style="background-color: white;">
					<thead>
						<tr>
							<th scope="col" style="width: 10px;">Id</th>
							<th scope="col">Title</th>
							<th scope="col">Keywords</th>
							<th scope="col">Description</th>
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
							<td>{{$rs->title}}</td>
							<td>{{$rs->keywords}}</td>
							<td>{{$rs->description}}</td>
							<td>
								@if ($rs->image)
								<img src="{{Storage::url($rs->image)}}" style="height: 60px">
								@endif
							</td>
							<td>{{$rs->status}}</td>
							
							<td><a href="{{route('admin.brand.edit',['id'=>$rs->id])}}" class="btn btn-primary">Edit </a></td>
							<td><a href="{{route('admin.brand.destroy',['id'=>$rs->id])}}" class="btn btn-danger" onclick="return confirm('Deleting {{$rs->title}}!! Are you sure?')">Delete </a></td>
							<td><a href="{{route('admin.brand.show',['id'=>$rs->id])}}" class="btn btn-success">Show </a></td>
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	@endsection