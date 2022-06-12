



                @extends('layouts.frontbase')

                @section('title','User Panel')
                
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
                                <h1 class="mb-3 bread">User Panel</h1>
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
                                        <p>User Menu</p>
                                @include('home.user.usermenu')
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-8 block-9 mb-md-5">
                                <h1>User Cars</h1>
                                <a href="{{route('userpanel.createcars')}}" class="btn btn-rounded btn-secondary">Add Cars</a>
                                <table class="table table-striped" style="background-color: white;">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 10px;">Id</th>
                                            <th scope="col" style="width: 100px;">Category</th>
                                            <th scope="col" style="width: 100px;">Brand</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Year</th>
                                            <th scope="col">Fuel</th>
                                            <th scope="col">Kilometer</th>
                                            <th scope="col">Engine Power</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Image Gallery</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" style="width: 50px;">Edit</th>
                                            <th scope="col" style="width: 50px;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cars as $rs)
                                        <tr>
                                            
                                            <td>{{$rs->id}}</td>
                                            <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                            <td>{{$rs->brand->title}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>{{$rs->price}}</td>
                                            <td>{{$rs->year}}</td>
                                            <td>{{$rs->fuel}}</td>
                                            <td>{{$rs->kilometer}}</td>
                                            <td>{{$rs->enginepower}}</td>
                
                                            <td>
                                                @if ($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 60px">
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('userpanel.imagegallery',['id'=>$rs->id])}}"
                                                onclick="return !window.open(this.href, '','top=50 left=100 width=700,height=620')">
                
                                                    <img style="height: 65px;" src="{{asset('assets')}}/images/gl.png">
                                                </a>
                                            </td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('userpanel.editcars',['id'=>$rs->id])}}" class="btn btn-primary">Edit </a></td>
                                            <td><a href="{{route('userpanel.carsdestroy',['id'=>$rs->id])}}" class="btn btn-danger" onclick="return confirm('Deleting {{$rs->title}}!! Are you sure?')">Delete </a></td>
                                        </tr>
                
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </section>
                @endsection