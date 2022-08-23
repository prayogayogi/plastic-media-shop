<header class="header clearfix">
    <div class="top-bar d-none d-sm-block">
        <div class="container">
            <div class="row">
                <div class="col-6 text-left">
                    <ul class="top-links contact-info">
                        @guest
                            <li><i class="fa fa-power-off"></i><a href="#" data-toggle="modal" data-target="#register">Register</a></li>
                        @endguest
                    </ul>
                </div>
                <div class="col-6 text-right">
                    <ul class="top-links account-links">
                        @auth
                            <li><i class="fa fa-user-circle-o"></i> <a href="#">{{ auth()->user()->name }}</a></li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
                                @csrf
                            </form>
                            <li><i class="fa fa-power-off"></i> <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Log Out</a></li>
                        @endauth
                        @guest
                            <li><i class="fa fa-power-off"></i> <a href="#" data-toggle="modal" data-target="#login">Sign In</a></li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main border-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-12 col-sm-6">
                    <a class="navbar-brand mr-lg-5" href="{{ route("home") }}">
                        {{-- <i class="fa fa-shopping-bag fa-3x"></i> <span class="logo">MEDIA PLASTIK</span> --}}
                        <img src="{{ asset("assets-frontEnd/img/icon.png") }}" alt="" class="mb-2 mr-2"> <span class="logo">MEDIA PLASTIK</span>
                    </a>
                </div>
                <div class="col-lg-7 col-12 col-sm-6">
                    <form action="{{ route("search-product") }}" method="post" class="search">
                        @csrf
                        <div class="input-group w-100">
                            <input type="text" name="product" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-12 col-sm-6">
                    <div class="right-icons pull-right d-none d-lg-block">
                        @auth
                            <div class="single-icon shopping-cart">
                                <a href="{{ route("cart") }}"><i class="fa fa-shopping-cart fa-2x"></i></a>
                                <span class="badge badge-default">{{ $cart }}</span>
                            </div>
                        @endauth
                        @guest
                            <div class="single-icon shopping-cart">
                                <a href="#" data-toggle="modal" data-target="#login"><i class="fa fa-shopping-cart fa-2x"></i></a>
                                <span class="badge badge-default">{{ $cart }}</span>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-main navbar-expand-lg navbar-light border-top border-bottom">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route("home") }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("about") }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("product") }}">Product</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="modal fade" id="login" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    @include('pages.frontEnd.home._login')
</div>

<div class="modal fade" id="register" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    @include('pages.frontEnd.home._register')
</div>
