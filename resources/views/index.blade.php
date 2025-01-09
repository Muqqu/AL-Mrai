@extends('layouts.app2')
@section('content')
 <div class="static-slider-section section pt-70 pt-md-50 pt-sm-30 pt-xs-20 pb-65 pb-lg-35 pb-md-35 pb-sm-30 pb-xs-30">
            <div class="container-fluid pl-250 pr-250">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-6 col-sm-6 col-60">
                        <div class="static-slider-content">
                            <h2 class="title">Transform Your Space, Illuminate Your Style!</h2>
                            <p>Discover a curated collection of home decoration and electronic decor products that elevate your living spaces. From elegant furnishings to cutting-edge electronic decor, our store brings you a fusion of style and innovation. </p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-40">
                        <div class="static-slider-image">
                            <a href="#"><img src="assets/images/hero/hero-6-1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="product-section section pt-15 pt-lg-25 pt-md-15 pt-sm-10 pt-xs-0 pb-85 pb-lg-65 pb-md-60 pb-sm-50 pb-xs-45">
    <div class="container-fluid pl-80 pr-80 pl-lg-15 pl-md-15 pl-sm-15 pl-xs-15 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
        <div class="row">
            <div class="col-12">
                <div class="tab-menu-two border-radius-bold mb-60 mb-lg-60 mb-md-60 mb-sm-50 mb-xs-30">
                    <ul class="nav justify-content-center">
                        <li><a class="active show" data-bs-toggle="tab"
                                href="#top-products">Top Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-content">
                    <div id="top-products" class="tab-pane active">
                        <div class="row row-40">
                            @foreach ($products as $product)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <!--  Single Grid product Start -->

                                <div class="single-grid-product mb-70 mb-md-50 mb-sm-30 mb-xs-30">
                                    <div class="product-image image-grayscale">
                                        <!-- <div class="product-label">
                                            <span class="sale">-20%</span>
                                            <span class="new">New</span>
                                            <span class="out-stock">Out of stock</span>
                                        </div> -->
                                        <a href="{{ route('shop.show', $product->slug) }}">
                                            <img src="{{asset('img/products/'.$product->image)}}" class="img-fluid"
                                                alt="">
                                        </a>

                                        <div class="product-action-content">
                                            <ul>
                                                <li><a title="Quick Shop" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><span>Quick Shop</span> <i
                                                            class="fa fa-search-plus"></i></a></li>
                                                <li><a href="wishlist.html"><span>Wishlist</span> <i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="compare.html"><span>Compare</span> <i
                                                            class="fa fa-bar-chart"></i></a></li>
                                                <li><a href="cart.html"><span>Add to cart</span> <i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="single-product.html">{{ $product->name }}</a></h3>
                                        <p class="product-price"><span
                                                class="main-price discounted">£{{$product->price}}</span> -
                                            @if($product->discount != 0 )
                                            @php $formattedNumber = number_format($product->price, 2, '.', ',');
                                            $formattedNumber =$formattedNumber . PHP_EOL;
                                            @endphp
                                            <span class="discounted-price">{{ $formattedNumber}}</span>
                                            @else
                                            @php $formattedNumber = number_format($product->price, 2, '.', ',');
                                            $formattedNumber =$formattedNumber . PHP_EOL;
                                            @endphp
                                            <span class="discounted-price">{{ $formattedNumber}}</span>
                                            @endif
                                            @if($product->discount != 0 )
                                            @php
                                            $disc_perc = $product->price*($product->discount/100);
                                            $price_to_show = product->price - $disc_perc;
                                            @endphp
                                            <span class="discounted-price">
                                                @php $formattedNumber = number_format($price_to_show, 2, '.', ',');
                                                $formattedNumber =$formattedNumber . PHP_EOL;
                                                @endphp
                                                £{{ $formattedNumber }}</span>
                                            @endif
                                        </p>
                                        <div class="product-rating">
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <p class="card-text">Available <strong>({{ $product->quantity }}/1000)</strong></p>
                                    </div>
                                </div>

                                <!--  Single Grid product End -->
                            </div>
                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="load-more-btn-two text-center">
                    <a href="shop-left-sidebar.html">Load more products</a>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="feature-lane-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex justify-content-center align-items-center gap-3 mb-3 mb-lg-0">
                        <img src="{{asset('new_assets/img/png/dlivery-icon.png')}}" alt="" class="icon">
                        <div>
                            <h3 class="secondary-title">Fast Delivery</h3>
                            <p>Delivery within 24 hours.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex justify-content-center align-items-center gap-3 mb-3 mb-lg-0">
                        <img src="{{asset('new_assets/img/png/free-icon.png')}}" alt="" class="icon">
                        <div>
                            <h3 class="secondary-title">Free Shipping</h3>
                            <p>No shipping cost 100% free.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex justify-content-center align-items-center gap-3">
                        <img src="{{asset('new_assets/img/png/quality-icon.png')}}" alt="" class="icon">
                        <div>
                            <h3 class="secondary-title">Best Quality</h3>
                            <p>100% original products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
