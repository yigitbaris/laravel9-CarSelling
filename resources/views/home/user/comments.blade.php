@extends('layouts.frontbase')

@section('title','User Comments')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight"
    style="background-image: url('{{asset('assets')}}/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">User Comments</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-4">
                <div class="row mb-5">
                    <div class="col-md-12">
                       <h1>User Menu</h1>
                        @include('home.user.usermenu')
                    </div>

                </div>
            </div>
            <div class="col-md-8 block-9 mb-md-5">
                <h1>User Comments</h1>
                <table class="table table-striped" style="background-color: white;">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 50 px;">Id</th>
                            <th scope="col">Car</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Review</th>
                            <th scope="col">Rate</th>
                            <th scope="col">Status</th>
                            <th scope="col" style="width: 50px;">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td><a href="{{route('cars',['id'=>$rs->cars_id])}}">{{$rs->cars->title}}</a>
                            </td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->review}}</td>
                            <td>{{$rs->rate}}</td>
                            <td>{{$rs->status}}</td>

                            <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-danger"
                                    onclick="return confirm('Deleting {{$rs->title}}!! Are you sure?')">Delete </a></td>

                        </tr>

                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        
    </div>
</section>
@endsection