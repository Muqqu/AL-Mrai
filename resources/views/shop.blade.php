@extends('new-site.layouts.app2')
@section('content')
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-section section bg-image" data-bg="./assets/images/bg/bg-title-shop.jpg">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="breadcrumb-title text-center">
                    <h1>Our Top Products</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Top Products</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->



<!-- Shop Page Area Start -->
<div
    class="shop-page-area section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-40  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container-fluid pl-80 pl-lg-15 pl-md-15 pl-sm-15 pl-xs-15  pr-80 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
        <div class="row row-30 mx-5">
            <div class="col-lg-12 order-lg-2 order-1">
                <div class="shop-top-bar shop-top-bar-flex mb-40 mb-xs-20">
                    <div class="shop-topbar-left">
                        <p>Showing 1–{{count($products)}} </p>
                        <!--<div class="page-show">-->
                        <!--    <span>Show</span>-->
                        <!--    <ul>-->
                        <!--        <li><a class="active" href="#">12</a></li>-->
                        <!--        <li><a href="#">15</a></li>-->
                        <!--        <li><a href="#">30</a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                    <div class="shop-topbar-right shop-tab-flex">
                        <div class="short-by">
                            <a href="#">Short By</a>
                            <ul class="sort-by-dropdown">
                                <li class="active"><a href="#">Default sorting</a></li>
                                <li><a href="#">Sort by popularity</a></li>
                                <li><a href="#">Sort by average rating</a></li>
                                <li><a href="#">Sort by newness</a></li>
                                <li><a href="#">Sort by price: low to high</a></li>
                                <li><a href="#">Sort by price: high to low</a></li>
                            </ul>
                        </div>
                        <!--<div class="filter-active">-->
                        <!--    <a href="#">filter</a>-->
                        <!--</div>-->
                        <div class="shop-tab nav">
                            <a class="active" href="#shop-1" data-bs-toggle="tab">
                                <i class="fa fa-th"></i>
                            </a>
                            <a href="#shop-2" data-bs-toggle="tab">
                                <i class="fa fa-list"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--<div class="product-filter-wrapper">-->
                <!--    <div class="row">-->
                        <!-- Product Filter -->
                <!--        <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-30">-->
                <!--            <div class="product-price-filter">-->
                <!--                <div class="single-filter-title">-->
                <!--                    <h5>Price</h5>-->
                <!--                </div>-->
                <!--                <ul>-->
                <!--                    <li><a href="#">£0.00 - £50.00</a></li>-->
                <!--                    <li><a href="#">£50.00 - £100.00</a></li>-->
                <!--                    <li><a href="#">£100.00 - £150.00</a></li>-->
                <!--                    <li><a href="#">£150.00 - £200.00</a></li>-->
                <!--                    <li><a href="#">£200.00+</a></li>-->
                <!--                </ul>-->
                <!--            </div>-->
                <!--        </div>-->
                        <!-- Product Filter -->
                <!--        <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-30">-->
                <!--            <div class="product-size">-->
                <!--                <div class="single-filter-title">-->
                <!--                    <h5>Size</h5>-->
                <!--                </div>-->
                <!--                <ul>-->
                <!--                    <li><a href="#">Full Size</a></li>-->
                <!--                    <li><a href="#">L</a></li>-->
                <!--                    <li><a href="#">M</a></li>-->
                <!--                    <li><a href="#">X</a></li>-->
                <!--                    <li><a href="#">XL</a></li>-->
                <!--                    <li><a href="#">XXL</a></li>-->
                <!--                </ul>-->
                <!--            </div>-->
                <!--        </div>-->
                        <!-- Product Filter -->
                <!--        <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-30">-->
                <!--            <div class="product-color">-->
                <!--                <div class="single-filter-title">-->
                <!--                    <h5>Color</h5>-->
                <!--                </div>-->
                <!--                <ul>-->
                <!--                    <li><a href="#"><span class="color-text">Blue</span></a></li>-->
                <!--                    <li><a href="#"><span class="color-text">Green</span></a></li>-->
                <!--                    <li><a href="#"><span class="color-text">Orange</span></a></li>-->
                <!--                    <li><a href="#"><span class="color-text">Pinkish</span></a></li>-->
                <!--                    <li><a href="#"><span class="color-text">Vista Blue</span></a></li>-->
                <!--                </ul>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-30">-->
                <!--            <div class="product-brand">-->
                <!--                <div class="single-filter-title">-->
                <!--                    <h5>Brands</h5>-->
                <!--                </div>-->
                <!--                <ul>-->
                <!--                    <li><a href="#">IKEA</a></li>-->
                <!--                    <li><a href="#">Mr Royal</a></li>-->
                <!--                    <li><a href="#">Mr.Poppin 1929</a></li>-->
                <!--                    <li><a href="#">North Oxford</a></li>-->
                <!--                    <li><a href="#">Sweet House</a></li>-->
                <!--                </ul>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="product-area-wrap">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">
                                @foreach($products as $product)
                                <div class=" coustom-col-2 col-xl-3 col-12">
                                    <!--  Single Grid product Start -->


                                    <div class="single-grid-product mb-70 mb-lg-50 mb-md-50 mb-sm-30 mb-xs-30">
                                        <div class="product-image">
                                            
                                            <a href="{{ route('shop.show', $product->slug) }}">
                                                <img src="{{asset('img/products/'.$product->image)}}" class="img-fluid" alt="">
                                                <img src="{{asset('img/products/'.$product->image)}}" class="img-fluid" alt="">
                                            </a>

                                            <!--<div class="product-action">-->
                                            <!--    <ul>-->
                                            <!--        <li><a title="Quick Shop" href="#" data-bs-toggle="modal"-->
                                            <!--                data-bs-target="#exampleModal"><i-->
                                            <!--                    class="fa fa-search-plus"></i></a></li>-->
                                            <!--        <li><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>-->
                                            <!--        <li><a href="compare.html"><i class="fa fa-bar-chart"></i></a></li>-->
                                            <!--        <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>-->
                                            <!--    </ul>-->
                                            <!--</div>-->
                                        </div>
                                        <div class="product-content text-left">
                                            <h3 class="title"><a href="{{ route('shop.show', $product->slug) }}">{{$product->name}}</a></h3>
                                            <p class="product-price"><span class="main-price discounted">£{{$product->price}}</span>
                                                - <span class="discounted-price">£{{$product->price}}</span></p>
                                            <div class="product-rating">
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!--  Single Grid product End -->
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div id="shop-2" class="tab-pane">
                            <!-- Shop List Start -->
                            @foreach($products as $product)
                            <!-- Shop List Start -->
                            <div class="shop-list-wrap mb-70 mb-70 mb-lg-30 mb-md-50 mb-sm-30 mb-xs-30">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="product-img-list">
                                            <a href="single-product.html">
                                                <img class="default-img"
                                                    src="{{asset('img/products/'.$product->image)}}" alt="">
                                                <img class="hover-img" src="{{asset('img/products/'.$product->image)}}"
                                                    alt="">
                                            </a>
                                            <div class="product-quickview-list">
                                                <a title="Quick Shop" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Quick Shop</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="shop-list-content">
                                            <div class="product-details-content quickview-content">
                                                <h3><a href="single-product.html">{{$product->name}}</a></h3>
                                                <p class="product-price product-list-price"><span
                                                        class="main-price discounted">£{{$product->price}}</span> -
                                                    <span class="discounted-price">£672.00</span>
                                                </p>
                                                <p class="shop-list-des">{{$product->details}}</p>
                                                <div class="pro-details-quality">
                                                    <div class="pro-details-wishlist">
                                                        <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="pro-details-cart btn-hover">
                                                        <a href="cart.html">Add To Cart</a>
                                                    </div>
                                                    <div class="pro-details-compare">
                                                        <a href="compare.html"><i class="fa fa-files-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Shop List Start -->
                        </div>
                    </div>
                    <!--<div class="page-pagination-area">-->
                    <!--    <ul class="page-pagination mt-0 mb-lg-0">-->
                    <!--        <li class="active"><a href="#">1</a></li>-->
                    <!--        <li><a href="#">2</a></li>-->
                    <!--        <li><a href="#"><i class="dlicon arrows-1_tail-triangle-right"></i></a></li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Shop Page Area End -->
@endsection