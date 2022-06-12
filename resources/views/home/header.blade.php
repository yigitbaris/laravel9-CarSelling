<!-- ---------DÜZGÜN GİBİ-------------------- -->
<style>
    .dropdown-menu li {
        position: relative;
    }

    .dropdown-menu .dropdown-submenu {
        display: none;
        position: absolute;
        left: 100%;
        top: -7px;
    }

    .dropdown-menu .dropdown-submenu-left {
        right: 100%;
        left: auto;
    }

    .dropdown-menu>li:hover>.dropdown-submenu {
        display: block;
    }
</style>
<!-- ----------------------------- -->


<meta name="viewport" content="width=device-width" />
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">FromThe<span>Owner</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"> Menu</span>
        </button>

        <!--NAV beginning -->
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item "><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item "><a href="{{route('references')}}" class="nav-link">References</a></li>

                <!--deneme alanı -->
                <nav class="nav-item">
                    <div class="container-fluid">
                        <ul class="navbar-nav">
                            <!-- Dropdown -->
                            @php
                            $mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
                            @endphp

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                    Category
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    @foreach($mainCategories as $rs)
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item" href="#">
                                            {{$rs->title}} &raquo;
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu">

                                            @if(count($rs->children))
                                            @include('home.categorytree',['children'=>$rs->children])
                                            @endif
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>

                            </li>
                        </ul>
                    </div>
                </nav>
                <!--deneme alanı -->
                <li class="nav-item"><a href="{{route('faq')}}" class="nav-link">FAQ</a></li>
                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                <li class="nav-item">

                    <!--user giriş -->
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="http://127.0.0.1:8000/assets/images/user3.png" alt="" class="user-avatar-md rounded-circle"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        @auth
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name">{{Auth::user()->name}}</h5>
                            <span class="status"></span><span class="ml-2">Available</span>
                        </div>
                        <a class="dropdown-item" href="/logoutuser"><i class="fas fa-power-off mr-2"></i>Logout</a>

                        @endauth

                        @guest
                        <a class="dropdown-item" href="/loginuser"><i class="fas fa-power-off mr-2"></i>Login</a>
                        <a class="dropdown-item" href="/registeruser"><i class="fas fa-power-off mr-2"></i>Join</a>
                        @endguest
                        <a class="dropdown-item" href="{{route('userpanel.index')}}"><i class="fas fa-user mr-2"></i>My Profile</a>
                        <a class="dropdown-item" href="{{route('userpanel.index')}}"><i class="fas fa-cog mr-2"></i>My Cars</a>
                        <a class="dropdown-item" href="{{route('userpanel.index')}}"><i class="fas fa-cog mr-2"></i>My Reviews</a>

                    </div>
                    </a>
                </li>
                </li>

            </ul>
        </div>  
    </div>
</nav>


<script>
    $(document).ready(function() {
        $('.dropdown-submenu a.test').on("click", function(e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- END nav -->