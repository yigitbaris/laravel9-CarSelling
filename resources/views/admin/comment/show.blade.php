@extends('layouts.adminwindow')

@section('title', 'Show Message : {{$data->title}}')

@section('content')
<!--content-->
<div class="container-fluid dashboard-content">

  <div class="card">

    <div class="card-body">
      <div class="table-responsive">
        <h5 class="card-header">Detail Message Data</h5>
        <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
          @csrf
          <table class="table table-striped">
            <tr>
              <th>Id</th>
              <td>{{$data->id}}</td>
            </tr>

            <tr>
              <th>Car</th>
              <td>{{$data->cars->title}}</td>
            </tr>

            <tr>
              <th>Name & Surname</th>
              <td>{{$data->user->name}}</td>
            </tr>

            <tr>
              <th>Subject</th>
              <td>{{$data->subject}}</td>
            </tr>

            <tr>
              <th>Message</th>
              <td>{{$data->review}}</td>
            </tr>

            <tr>
              <th>Rate</th>
              <td>{{$data->rate}}</td>
            </tr>

            <tr>
              <th>Ip Number</th>
              <td>{{$data->IP}}</td>
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

            <tr>
              <th>Admin Note</th>
              <td>
                <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                  @csrf
                  <br>
                  <select name="status">
                    <option>{{$data->status}}</option>
                    <option>True</option>
                    <option>False</option>
                  </select>
                  <br>
                  <br>
                  <button type="submit" class="btn btn-primary">Update Comment</button>

                </form>
              </td>
            </tr>

          </table>
      </div>
    </div>
  </div>

</div>
@endsection