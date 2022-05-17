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


<meta name="viewport" content="width=device-width, initial-scale=1" />
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Car<span>Book</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"> Menu</span>
        </button>

        <!--NAV beginning -->
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                
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



                <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="car.html" class="nav-link">Cars</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
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