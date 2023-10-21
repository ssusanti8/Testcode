<!-- Start Main Top -->
<header class="main-header">
<!-- Start Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="/"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="{{ ('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ ('/about') }}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ ('/galeriku') }}">Galeri</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ ('/menuku') }}">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ ('/diskonku') }}">Paket Diskon</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="{{ ('/belum') }}">Reservasi</a></li> -->
                        <li class="dropdown">
                            <a href="/login" class="nav-link dropdown-toggle" data-toggle="dropdown">Akun</a>
                            <ul class="dropdown-menu">
								<li><a href="{{ ('/login') }}">Login</a></li>
								<li><a href="{{ ('/register') }}">Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/judulrumah.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/judulrumah.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/judulrumah.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->

</header>
    <!-- End Main Top -->