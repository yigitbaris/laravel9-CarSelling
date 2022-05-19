@extends('layouts.adminbase')

@section('title', 'Edit Car: {{$data->title}}')

@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">

        <h1 class="h3 mb-3">Edit Car: {{$data->title}}</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form role="form" action="{{route('admin.cars.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Parent Category</label>

                                <select class="form-control select2" name="category_id">
                                    @foreach($datalist as $rs)
                                    <option value="{{ $rs->id }}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }}</option>
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
                                <label for="exampleInputPassword4">
                                    <h4 class="card-title">Price</h4>
                                </label>
                                <input type="number" class="form-control" name="price" value="{{$data->price}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">
                                    <h4 class="card-title">Year</h4>
                                </label>
                                <input type="number" class="form-control" name="year" value="{{$data->year}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectElectric">
                                    <h4 class="card-title">Fuel</h4>
                                </label>
                                <select class="form-control" name="fuel" >
                                    <option selected >{{$data->fuel}}</option>
                                    <option>Gasoline</option>
                                    <option>Gas & LPG</option>
                                    <option>Diesel</option>
                                    <option>Hybrid</option>
                                    <option>Electric</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">
                                    <h4 class="card-title">Kilometer</h4>
                                </label>
                                <input type="number" class="form-control" name="kilometer" value="{{$data->kilometer}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">
                                    <h4 class="card-title">Engine Power</h4>
                                </label>
                                <input type="number" class="form-control" name="enginepower" value="{{$data->enginepower}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">
                                    <h4 class="card-title">Detail</h4>
                                    <textarea class="form-control" id="detail" name="detail">
                                    {{$data->detail}}
                                    </textarea>
                                    <script>
                                    ClassicEditor
                                        .create(document.querySelector('#detail'))
                                        .then(editor => {
                                            console.log(editor);
                                        })
                                        .catch(error => {
                                            console.error(error);
                                        });
                                </script>
                                </label>

                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">
                                    <h4 class="card-title">Status</h4>
                                </label>
                                <select class="form-control" name="status">
                                    <option>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label style="height:33px  ;border-style:solid;background-color:beige; border: 2px solid bisque; border-radius: 8px; padding: 5px;">Choose İmage</label>
                                <input type="file" selected="{{$data->image}}"  name="image" class="file-u   pload-default" style="text-align: center; height:35px  ;border-style:solid;background-color:gainsboro; border: 2px solid gainsboro; border-radius: 8px; padding: 5px;">
                                <div class="input-group col-xs-12" style="max-width: 1000px;">
                                    <span class="input-group-append">

                                    </span>
                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection