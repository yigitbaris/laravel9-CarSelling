
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>@yield("title")</title>
    <title>@yield("title")</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
    
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="{{asset('assets')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">  


    <!-- dropdown menu -->


    <!-- dropdown menu -->

    @yield("head")
  </head>

<body>
@include("home.header")


@section('sidebar')
  @include("home.sidebar")
@show

@section('slider')
@show


@yield('content')


@include("home.footer")
@yield('foot')
</body>
</html>
