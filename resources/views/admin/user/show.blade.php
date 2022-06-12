@extends('layouts.adminwindow')

@section('title', 'User Detail : {{$data->title}}')

@section('content')
<!--content-->
<div class="container-fluid dashboard-content">

  <div class="card">

    <div class="card-body">
      <div class="table-responsive">
        <h5 class="card-header">Detail User</h5>
        
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
              <th>Email</th>
              <td>{{$data->email}}</td>
            </tr>

            <th>Roles</th>
            <td>
              @foreach ($data->roles as $role)
              {{$role->name}}
              <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}" class="btn btn-danger" onclick="return confirm('Deleting!! Are you sure?')">[x]</a>
              @endforeach
            </td>
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
              <th>Add Role to User</th>
              <td>
                <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                  @csrf
                  <br>
                  <select name="role_id">
                    @foreach ($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                  </select>
                  <br>
                  <br>
                  <button type="submit" class="btn btn-primary">Add Role</button>

                </form>
              </td>
            </tr>

          </table>
      </div>
    </div>
  </div>

</div>
@endsection