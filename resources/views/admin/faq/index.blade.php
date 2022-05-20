@extends('layouts.adminbase')

@section('title', 'FAQ List')

@section('content')
<!--content-->
<div class="dashboard-wrapper">
	<div class="container-fluid dashboard-content">
		<div class="row">
			<div class="card-body">
				<a href="{{route('admin.faq.create')}}" class="btn btn-rounded btn-secondary">Add Question</a>
				<table class="table table-striped" style="background-color: white;">
					<thead>
						<tr>
							<th scope="col" style="width: 10px;">Id</th>
							<th scope="col" style="width: 100px;">Question</th>
							<th scope="col">Answer</th>
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
							<td>{!!$rs->question!!}</td>
							<td>{!!$rs->answer!!}</td>
							<td>{{$rs->status}}</td>
							<td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-primary">Edit </a></td>
							<td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-danger" onclick="return confirm('Deleting {{$rs->title}}!! Are you sure?')">Delete </a></td>
							<td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-success">Show </a></td>
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	@endsection