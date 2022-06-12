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
                <h1>User Menu</h1>
                    @include('profile.show')
            </div>
        </div>
        
    </div>
</section>
@endsection