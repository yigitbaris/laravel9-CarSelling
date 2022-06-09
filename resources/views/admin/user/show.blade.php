@extends('layouts.adminwindow')

@section('title', 'Show Message : {{$data->title}}')

@section('content')
<!--content-->
<div class="container-fluid dashboard-content">

  <div class="card">

    <div class="card-body">
      <div class="table-responsive">
        <h5 class="card-header">Detail Message Data</h5>
        <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
          @csrf
          <table class="table table-striped">
            <tr>
              <th>Id</th>
              <td>{{$data->id}}</td>
            </tr>

            <tr>
              <th>Name & Surname</th>
              <td>{{$data->name}}</td>
            </tr>

            <tr>
              <th>Phone Number</th>
              <td>{{$data->phone}}</td>
            </tr>

            <tr>
              <th>Email</th>
              <td>{{$data->email}}</td>
            </tr>

            <tr>
              <th>Message</th>
              <td>{{$data->message}}</td>
            </tr>

            <tr>
              <th>Subject</th>
              <td>{{$data->subject}}</td>
            </tr>

            <tr>
              <th>Ip Number</th>
              <td>{{$data->ip}}</td>
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
                <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                  @csrf
                  <br>

                  <textarea cols="80" rows="4" id="note" name="note">
                  {{$data->note}}
                  </textarea>
                  <br>                 
                  <br>
                  <button type="submit" class="btn btn-primary">Update Note</button>

                </form>
              </td>
            </tr>

          </table>
      </div>
    </div>
  </div>

</div>
@endsection