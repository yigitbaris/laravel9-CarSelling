@extends('layouts.adminbase')
 
@section('title', 'Edit Category: {{$data->title}}')
 
@section('content')
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                
    <h1 class="h3 mb-3">Edit Category: {{$data->title}}</h1>
                <div class="row">
                <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form role="form" action="/admin/category/update/{{$data->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1"><h4 class="card-title">Title</h4></label>
                            <input type="text" class="form-control" name="title" value="{{$data->title}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3"><h4 class="card-title">Keywords</h4></label>
                            <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4"><h4 class="card-title">Description</h4></label>
                            <input type="text" class="form-control" name="description" value="{{$data->description}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender"><h4 class="card-title">Status</h4></label>
                            <select class="form-control" name="status">
                                <option selected>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label style="height:33px  ;border-style:solid;background-color:beige; border: 2px solid bisque; border-radius: 8px; padding: 5px;">Image</label>
                            <input type="file" name="image" class="file-upload-default" style="text-align: center; height:35px  ;border-style:solid;background-color:gainsboro; border: 2px solid gainsboro; border-radius: 8px; padding: 5px;"   >
                            <br>
                            <div class="input-group col-xs-12" style="max-width: 1000px;">
                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Choose Image">
                                <span class="input-group-append">
                    <button type="button" class="btn btn-primary">Upload</button>
                  </span>
                  <button type="submit" class="btn btn-danger">Update Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                </div>
            </div>
@endsection