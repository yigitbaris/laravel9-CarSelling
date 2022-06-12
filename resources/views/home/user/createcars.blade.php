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


                <div class="card">
                    <div class="card-body">
                        <form role="form" action="{{route('userpanel.storecars')}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Parent Category</label>

                                <select class="form-control select2" name="category_id">
                                    @foreach($data as $rs)
                                    <option value="{{ $rs->id }}">
                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)
                                        }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">
                                    <h4 class="card-title">Title</h4>
                                </label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">
                                    <h4 class="card-title">Brand</h4>
                                </label>
                                <input type="number" class="form-control" name="brand_id" placeholder="brand">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">
                                    <h4 class="card-title">Keywords</h4>
                                </label>
                                <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">
                                    <h4 class="card-title">Description</h4>
                                </label>
                                <input type="text" class="form-control" name="description" placeholder="Description">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">
                                    <h4 class="card-title">Price</h4>
                                </label>
                                <input type="number" class="form-control" name="price" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">
                                    <h4 class="card-title">Year</h4>
                                </label>
                                <input type="number" class="form-control" name="year" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectElectric">
                                    <h4 class="card-title">Fuel</h4>
                                </label>
                                <select class="form-control" name="fuel" placeholder="Fuel type">
                                    <option disabled selected hidden>Select Fuel Type</option>
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
                                <input type="number" class="form-control" name="kilometer" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">
                                    <h4 class="card-title">Engine Power</h4>
                                </label>
                                <input type="number" class="form-control" name="enginepower" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Detail Inf.</label>
                                <textarea class="form-control" id="detail" name="detail">
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
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">
                                    <h4 class="card-title">Status</h4>
                                </label>
                                <select class="form-control" name="status">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label
                                    style="height:33px  ;border-style:solid;background-color:beige; border: 2px solid bisque; border-radius: 8px; padding: 5px;">Choose
                                    Image</label>
                                <input type="file" name="image" class="file-u   pload-default"
                                    style="text-align: center; height:35px  ;border-style:solid;background-color:gainsboro; border: 2px solid gainsboro; border-radius: 8px; padding: 5px;">
                                <div class="input-group col-xs-12" style="max-width: 1000px;">
                                    <span class="input-group-append"> </span>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection