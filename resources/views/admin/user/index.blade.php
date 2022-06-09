@extends('layouts.adminbase')

@section('title', 'Contact Form Messages List')

@section('content')
<!--content-->
<div class="dashboard-wrapper">
	<div class="container-fluid dashboard-content">
		<div class="row">
			<div class="card-body">
			<h5 class="card-header">Message List</h5>

				<table class="table table-striped" style="background-color: white;">
					<thead>
						<tr>
							<th scope="col" style="width: 10px;">Id</th>
							<th scope="col" style="width: 100px;">Name</th>
							<th scope="col">Email</th>
							<th scope="col">Role</th>
							<th scope="col">Status</th>
							<th scope="col" style="width: 50px;">Show</th>
							<th scope="col" style="width: 50px;">Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($data as $rs)
						<tr>
							<td>{{$rs->id}}</td>
							<td>{{$rs->name}}</td>
							<td>{{$rs->email}}</td>
							<td></td>
							<td></td>

							<td>
								<a href="{{route('admin.message.show',['id'=>$rs->id])}}"  class="btn btn-info"
									onclick="return !window.open(this.href, '','top=50 left=100 width=700,height=620')">
									Show
								</a>
							</td>
							<td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" class="btn btn-danger" onclick="return confirm('Deleting {{$rs->title}}!! Are you sure?')">Delete </a></td>
							
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	@endsection