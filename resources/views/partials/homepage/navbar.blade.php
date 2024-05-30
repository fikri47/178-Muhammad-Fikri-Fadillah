
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
            <div class="main-menu-wrap">
                <!-- logo -->
                <div class="site-logo">
                    <a href="/">
                        <img src={{asset('image/logo-no-background.svg')}} alt="E-Mebel">
                    </a>
                </div>
                <!-- logo -->

                <!-- menu start -->
                <nav class="main-menu">
                    <ul>
                        <li><a href="#">Home</a></li>                                                
                        @if (Request::is('/'))                            
                        <li><a href="#contact-us">Contact</a></li>
                        @else
                        <li><a href="#contact">Contact</a></li>
                        @endif                                                
                        <li><a href="#product-us">Shop</a>                            
                        </li>
                        <li>
                            <div class="header-icons">
                                {{-- <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a> --}}
                            </div>
                        </li>
                    </ul>
                </nav>
                <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                <div class="mobile-menu"></div>
                <!-- menu end -->
            </div>
        </div>
    </div>
</div>