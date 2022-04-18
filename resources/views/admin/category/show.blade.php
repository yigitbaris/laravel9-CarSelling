@extends('layouts.adminbase')
 
@section('title', 'Show Category: {{$data->title}}')
 
@section('content')
	<!--content-->
    <main class="content">
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(odd) {
  background-color: #dddddd;
}
</style>
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{$data->title}}</h1>
    <a href="/admin/category/edit/{{$data->id}}"class="btn btn-primary">Edit</a>
    <a href="/admin/category/destroy/{{$data->id}}" onclick="return confirm('Deleting !! Are you sure?')" class="btn btn-danger">Delete</a>

    <div class="row">
        <div class="col-12"> 
            <div class="card">
                <div class="card-body">
                    <form role="form" action="/admin/category/update/{{$data->id}}" method="post">
                        @csrf
                        <table>
  <tr>
    <th>Id</th>
    <td>{{$data->id}}</td>
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
    <th>Images</th>
    <td></td>
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

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</main>
@endsection