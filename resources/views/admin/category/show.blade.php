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
        <div class="col-1web2"> 
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
 <!--
<div class="containerweb">
  <h2web>Responsive Tables Using LI <small>Triggers on 767px</small></h2web>
  <ul class="responsive-tableweb">
    <liweb class="table-headerweb">
      <div class="col col-1web">Job Id</div>
      <div class="col col-2web">Customer Name</div>
      <div class="col col-3web">Amount Due</div>
      <div class="col col-4web">Payment Status</div>
    </liweb>
    <liweb class="table-rowweb">
      <div class="col col-1web" data-label="Job Id">42235</div>
      <div class="col col-2web" data-label="Customer Name">John Doe</div>
      <div class="col col-3web" data-label="Amount">$350</div>
      <div class="col col-4web" data-label="Payment Status">Pending</div>
    </liweb>
    <liweb class="table-rowweb">
      <div class="col col-1web" data-label="Job Id">42442</div>
      <div class="col col-2web" data-label="Customer Name">Jennifer Smith</div>
      <div class="col col-3web" data-label="Amount">$220</div>
      <div class="col col-4web" data-label="Payment Status">Pending</div>
    </liweb>
    <liweb class="table-rowweb">
      <div class="col col-1web" data-label="Job Id">42257</div>
      <div class="col col-2web" data-label="Customer Name">John Smith</div>
      <div class="col col-3web" data-label="Amount">$341</div>
      <div class="col col-4web" data-label="Payment Status">Pending</div>
    </liweb>
    <liweb class="table-rowweb">
      <div class="col col-1web" data-label="Job Id">42311</div>
      <div class="col col-2web" data-label="Customer Name">John Carpenter</div>
      <div class="col col-3web" data-label="Amount">$115</div>
      <div class="col col-4web" data-label="Payment Status">Pending</div>
    </liweb>
  </ul>
</div>-->

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</main>
@endsection