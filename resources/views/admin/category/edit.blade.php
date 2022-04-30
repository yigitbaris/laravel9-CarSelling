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
                        <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Parent Category</label>

                                <select class="form-control select2" name="parent_id">
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach($datalist as $rs)
                                    <option value="{{ $rs->id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif>
                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">
                                    <h4 class="card-title">Title</h4>
                                </label>
                                <input type="text" class="form-control" name="title" value="{{$data->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">
                                    <h4 class="card-title">Keywords</h4>
                                </label>
                                <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">
                                    <h4 class="card-title">Description</h4>
                                </label>
                                <input type="text" class="form-control" name="description" value="{{$data->description}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">
                                    <h4 class="card-title">Status</h4>
                                </label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label style="height:33px  ;border-style:solid;background-color:beige; border: 2px solid bisque; border-radius: 8px; padding: 5px;">Choose Image</label>
                                <input type="file" name="image" class="file-u   pload-default" style="text-align: center; height:35px  ;border-style:solid;background-color:gainsboro; border: 2px solid gainsboro; border-radius: 8px; padding: 5px;">
                                <div class="input-group col-xs-12" style="max-width: 1000px;">
                                    <span class="input-group-append">

                                    </span>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection