<header class="header  ">
    <div class="header-deafult menu-right height-150 d-flex align-items-center">
        <div class="container-fluid pl-80 pr-80 pl-lg-15 pl-md-15 pl-sm-15 pl-xs-15 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-6 col-md-6 col-4">
                    <div class="logo">
                        <a href="/"><img src="{{asset('new_assets/img/png/trendy-logo.png')}}" alt=""></a>

                    </div>
                </div>
                <!--Menu start-->
                <div class="col-xl-6  d-none d-xl-block">
                    <div class="menu-center d-flex justify-content-center">
                        <nav class="main-menu ">
                            <ul>
                                <li><a href="/new-home">Home</a>

                                </li>
                                <li><a href="{{ route('shop.index') }}">Shop</a>

                                </li>
                                <li><a href="{{ route('about') }}">About</a>

                                </li>
                                <li><a href="{{ route('order.track') }}">Track Order</a>

                                </li>
                                <li><a href="#">Support</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                                        <li><a href="{{ route('policy') }}">Privacy Policy</a></li>
                                        <li><a href="{{ route('refund_policy') }}">Refund Policy</a></li>
                                        <li><a href="{{ route('shipping') }}">Shipping Policy</a></li>


                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--Menu end-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-8 d-flex justify-content-end">
                    <div class="header-icon search ">
                        <a class="search-trigger" href="#">
                            <i class="dlicon ui-1_zoom"></i>
                        </a>
                    </div>

                    <div class="header-icon cart ">
                        {{-- <a class="cart-trigger" href="#">
                            <span class="cart-count">{{ Cart::instance('default')->count() }}</span>
                            <i class="dlicon shopping_cart-modern"></i>
                        </a> --}}
                    </div>
                   <div class="header-icon hamburger-menu ">
                                <a class="hamburger-trigger d-none d-xl-block" href="#">
                                    <i class="dlicon ui-3_menu"></i>
                                </a>

                                <a class="hamburger-trigger d-block d-xl-none" href="#">
                                    <i class="dlicon ui-3_menu"></i>
                                </a>
                            </div>
                </div>


            </div>
        </div>
    </div>
</header>
