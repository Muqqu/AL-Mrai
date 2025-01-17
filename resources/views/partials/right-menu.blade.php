<div class="hamburger-area">
    <div class="btn-close-search">
        <button>
            <i class="dlicon ui-1_simple-remove"></i>
        </button>
    </div>
    <div class="hamburger-menu-main d-none d-xl-block">
        <div class="humberger-top">
            <div class="hum-mainmenu">
                <ul>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                    <li><a href="{{ route('refund_policy') }}">Refund Policy</a></li>
                    <li><a href="{{ route('shipping') }}">Shipping Policy</a></li>
                </ul>
            </div>
        </div>

        <div class="humberger-banner">
            <a href="#"><img src="assets/images/hero/hero-6-1.jpg" alt=""></a>
        </div>

        <div class="humberger-bottom">
            <div class="humberger-bottom__inner">
                <div class="content">
                    <ul class="hm-address">
                        <li><a href="#"><span>+44 7700 900996 </span></a></li>
                        <li><a href="#"><span>support@trendyweek.site</span></a></li>
                        <li><a href="#"><span>20 Greenmount Avenue  Ballymena Co. Antrim N. <br> Ireland BT43 6DA</span></a></li>
                    </ul>
                    <!--<a class="gmap" href="#">Google map</a>-->
                    <!--<div class="hamburger-social bg-owncolor">-->
                    <!--    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>-->
                    <!--    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>-->
                    <!--    <a class="google" href="#"><i class="fa fa-google-plus"></i></a>-->
                    <!--    <a class="youtube" href="#"><i class="fa fa-youtube"></i></a>-->
                    <!--</div>-->
                </div>
                <div class="thumb">
                    <img src="assets/images/payment_info.png" alt="Trendy">
                </div>
                <div class="hm-copyright">
                    <p>&copy; {{ date('Y') }} Trendy Week All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Main Menu -->



    <ul class="menu-primary-menu-1 responsive-manu d-block d-xl-none" id="responsive-manu">
        <li><a href="/new-home">Home</a>
        </li>
        <li><a href="{{ route('shop.index') }}">Shop</a></li>
        <li><a href="{{ route('about') }}">About</a>
        </li>
        <li><a href="{{ route('order.track') }}">Track Order</a>
        </li>
        <li class="has-dropdown-menu"><a href="#">SUPPORT</a>
            <ul class="sub-menu-two">
                <li><a href="{{ route('policy') }}">Privacy Policy</a></li>
                <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                <li><a href="{{ route('refund_policy') }}">Refund Policy</a></li>
                <li><a href="{{ route('shipping') }}">Shipping Policy</a></li>
            
            </ul>
        </li>
    </ul>

    <!-- End Main Menu -->
</div>
