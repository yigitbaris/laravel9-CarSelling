@extends('layouts.adminbase')

@section('title', 'Show Car: {{$data->title}}')

@section('content')
<!--content-->
<div class="dashboard-wrapper">
  <div class="container-fluid dashboard-content">
    <h1 class="h3 mb-3">{{$data->title}}</h1>
    <a href="{{route('admin.cars.edit',['id'=>$data->id])}}" class="btn btn-primary">Edit</a>
    <a href="{{route('admin.cars.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure?')" class="btn btn-danger">Delete</a>

    <div class="row">
      <div class="card">

        <div class="card-body">
          <div class="table-responsive">
            <form role="form" action="{{route('admin.cars.update',['id'=>$data->id])}}" method="post">
              @csrf
              <table class="table table-striped table-bordered first">
                <tr>
                  <th >Id</th>
                  <td>{{$data->id}}</td>
                </tr>

                <tr>
                  <th >Category</th>
                  <td>
                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title)}}
                  </td>
                </tr>

                <tr>
                  <th>Title</th>
                  <td>{{$data->title}}</td>
                </tr>

                <tr>
                  <th>Keywors</th>
                  <td>{{$data->keywords}}</td>
                </tr>

                <tr>
                  <th>Description</th>
                  <td>{{$data->description}}</td>
                </tr>

                <tr>
                  <th>Price</th>
                  <td>{{$data->price}}</td>
                </tr>

                <tr>
                  <th>Model Year</th>
                  <td>{{$data->year}}</td>
                </tr>

                <tr>
                  <th>Fuel</th>
                  <td>{{$data->fuel}}</td>
                </tr>

                <tr>
                  <th>Kilometer</th>
                  <td>{{$data->kilometer}}</td>
                </tr>

                <tr>
                  <th>Engine Power</th>
                  <td>{{$data->enginepower}}</td>
                </tr>

                <tr>
                  <th>Detail About Car</th>
                  <td>{{$data->detail}}</td>
                </tr>

                <tr>
                  <th>Status</th>
                  <td>{{$data->status}}</td>
                </tr>

                <tr>
                  <th>Images</th>
                  <td>@if ($data->image)
                    <img src="{{Storage::url($data->image)}}" style="height: 150px">
                    @endif
                  </td>
                </tr>

                <tr>
                  <th>Status</th>
                  <td>{{$data->status}}</td>
                </tr>

                <tr>
                  <th>Create Date</th>
                  <td>{{$data->created_at}}</td>
                </tr>

                <tr>
                  <th>Update Date</th>
                  <td>{{$data->updated_at}}</td>
                </tr>
              </table>
          </div>
        </div>
      </div>

    </div>
  </div>
  @endsection