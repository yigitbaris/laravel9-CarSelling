@extends('layouts.adminwindow')

@section('title', 'Car Image Gallery')

@section('content')
<!--content-->


<h2>{{$cars->title}}</h2>
<form role="form" action="{{route('userpanel.storeimage',['cid'=>$cars->id])}}" method="post" enctype="multipart/form-data">
	@csrf

	<div class="form-group">
		<label for="exampleInputName1">
			<h4 class="card-title">Title</h4>
		</label>
		<input type="text" class="form-control" name="title" placeholder="Title">

		<label style="height:33px  ;border-style:solid;background-color:beige; border: 2px solid bisque; border-radius: 8px; padding: 5px;">Choose Image</label>
		<input type="file" name="image" class="file-u   pload-default" style="text-align: center; height:35px  ;border-style:solid;background-color:gainsboro; border: 2px solid gainsboro; border-radius: 8px; padding: 5px;">
		<div class="input-group col-xs-12" style="max-width: 1000px;">
			<span class="input-group-append"> </span>

			<button type="submit" class="btn btn-primary">Save</button>
		</div>
	</div>
</form>




<div class="dashboard-wrapper">
	<div class="container-fluid dashboard-content">
		<div class="row">
			<div class="card-body">
				<!--<a href="{{route('admin.category.create')}}" class="btn btn-rounded btn-secondary">Add Category</a>-->
				<h5 class="card-header">Car Images List</h5>
				<table class="table table-striped" style="background-color: white;">
					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Title</th>
							<th scope="col">Image</th>
							<th scope="col">Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($images as $rs)
						<tr>
							<td>{{$rs->id}}</td>
							<td>{{$rs->title}}</td>
							<td>
								@if ($rs->image)
								<img src="{{Storage::url($rs->image)}}" style="height: 100px">
								@endif
							</td>
							<td><a href="{{route('admin.image.destroy',['cid'=>$cars->id,'id'=>$rs->id])}}" class="btn btn-danger" onclick="return confirm('Deleting {{$rs->title}}!! Are you sure?')">Delete </a></td>
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	@endsection

    



    