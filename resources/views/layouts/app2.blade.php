<!doctype html>

<html >





<!-- Mirrored from htmldemo.net/raz/raz/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Dec 2023 08:28:54 GMT -->



@include('partials.head')



<body class="">

    <div id="main-wrapper" class=" ">

        @include('partials.header')

        @include('partials.loader')

        <!-- End Loader Area -->

        <!-- Start Search Flyover -->

        <div class="search-flyoveray"></div>

        @include('partials.mini-cart')

        <!-- End Search Flyover -->





        <!-- Start Hamburger -->

        @include('partials.right-menu')



        <!-- End Hamburger -->

        <!-- Start Search FlyOver Area -->

        @include('partials.search')

        @yield('content')

        <!-- End Search FlyOver Area -->



        <!-- Start Hamburger -->





        <!--slider section end-->






        <!--Testimonial section start-->







        <!--Testimonial section end-->



        <!-- Modal -->





        <!-- Modal end -->

        <!-- Start Footer Area -->

        @include('partials.footer')



        <!-- End Footer Area -->

        <!-- Placed js at the end of the document so the pages load faster -->



        @include('partials.scripts')



        <!-- Mirrored from htmldemo.net/raz/raz/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Dec 2023 08:30:02 GMT -->

    </div>

</body>



</html>
