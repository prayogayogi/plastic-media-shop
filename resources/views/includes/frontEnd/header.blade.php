<header class="header clearfix">
    <div class="top-bar d-none d-sm-block">
        <div class="container">
            <div class="row">
                <div class="col-6 text-left">
                </div>
                <div class="col-6 text-right">
                    <ul class="top-links account-links">
                        <li><i class="fa fa-user-circle-o"></i> <a href="#">My Account</a></li>
                        <li><i class="fa fa-power-off"></i> <a href="#">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main border-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-12 col-sm-6">
                    <a class="navbar-brand mr-lg-5" href="./index.html">
                        <i class="fa fa-shopping-bag fa-3x"></i> <span class="logo">MEDIA PLASTIK</span>
                    </a>
                </div>
                <div class="col-lg-7 col-12 col-sm-6">
                    <form action="#" class="search">
                        <div class="input-group w-100">
                            <input type="text" class="form-control" placeholder="Search">
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
                        <div class="single-icon wishlist">
                            <a href="#"><i class="fa fa-heart-o fa-2x"></i></a>
                            <span class="badge badge-default">5</span>
                        </div>
                        <div class="single-icon shopping-cart">
                            <a href="#"><i class="fa fa-shopping-cart fa-2x"></i></a>
                            <span class="badge badge-default">4</span>
                        </div>
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
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">Pages</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="products.html">Products</a>
                            <a class="dropdown-item" href="product-detail.html">Product Detail</a>
                            <a class="dropdown-item" href="cart.html">Cart</a>
                            <a class="dropdown-item" href="checkout.html">Checkout</a>
                        </div>
                    </li> --}}
                </ul>
            </div> <!-- collapse .// -->
        </div> <!-- container .// -->
    </nav>
</header>
