@extends('layouts.adminbase')

@section('title', 'Comment & Reviews List')

@section('content')
<!--content-->
<div class="dashboard-wrapper">
	<div class="container-fluid dashboard-content">
		<div class="row">
			<div class="card-body">
			<h5 class="card-header">Comment List</h5>

				<table class="table table-striped" style="background-color: white;">
					<thead>
						<tr>
							<th scope="col" style="width: 10px;">Id</th>
							<th scope="col" >Car</th>
							<th scope="col">Name</th>
							<th scope="col">Subject</th>
							<th scope="col">Review</th>
							<th scope="col">Rate</th>
							<th scope="col">Status</th>
							<th scope="col" style="width: 50px;">Show</th>
							<th scope="col" style="width: 50px;">Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($data as $rs)
						<tr>
							<td>{{$rs->id}}</td>
							<td><a href="{{route('admin.cars.show',['id'=>$rs->cars_id])}}">{{$rs->cars->title}}</a></td>
							<td>{{$rs->user->name}}</td>
							<td>{{$rs->subject}}</td>
							<td>{{$rs->review}}</td>
							<td>{{$rs->rate}}</td>
							<td>{{$rs->status}}</td>

							<td>
								<a href="{{route('admin.comment.show',['id'=>$rs->id])}}"  class="btn btn-info"
									onclick="return !window.open(this.href, '','top=50 left=100 width=700,height=620')">
									Show
								</a>
							</td>
							<td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}" class="btn btn-danger" onclick="return confirm('Deleting {{$rs->title}}!! Are you sure?')">Delete </a></td>
							
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	@endsection