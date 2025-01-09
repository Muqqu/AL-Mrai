@extends('layouts.app2')
@section('content')
<div
    class="product-details-area section border-top pt-80 pt-lg-60 pt-md-50 pt-sm-45 pt-xs-25  pb-55 pb-lg-15 pb-md-5 pb-sm-0 pb-xs-0">
    <div class="container-fluid pl-80 pl-lg-15 pl-md-15 pl-sm-15 pl-xs-15  pr-80 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">

        <div class="row row-30">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="product-details-tab">
                    <div class="product-tabs pro-dec-big-img-slider">
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <!--<div class="product-label">-->
                                <!--    <span class="sale">-20%</span>-->
                                <!--    <span class="new">New</span>-->
                                <!--</div>-->
                                @if(!empty($product->productImages))

                                <a href="#">
                                    <img src="{{ asset('img/products/' . $product->productImages[0]->path) }}" alt="">
                                </a>

                            </div>
                            <a class="easyzoom-pop-up img-popup"
                                href="{{ asset('img/products/' . $product->productImages[0]->path) }}"><i
                                    class="dlicon ui-1_zoom-in"></i></a>
                            @endif
                        </div>
                        @foreach ($product->productImages as $key => $image)
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="#">
                                    <img src="{{ asset('img/products/' . $image->path) }}" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup"
                                href="assets/images/product/product-big/product05.jpg"><i
                                    class="dlicon ui-1_zoom-in"></i></a>
                        </div>
                        @endforeach
                    </div>
                    <div class="product-dec-slider">
                        @foreach ($product->productImages as $key => $image)
                        <div class="product-dec-small active">
                            <img src="{{ asset('img/products/' . $image->path) }}" alt="">
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="product-details-content quickview-content">
                    <h2>{{$product->name}}</h2>
                    <div class="product-rating-stock">
                        <div class="product-dec-rating-reviews">
                            <div class="product-dec-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-dec-reviews">
                                <a> (23 customer reviews)</a>
                            </div>
                        </div>
                        <div class="pro-stock">
                            <span><i class="dlicon ui-1_check-circle-08"></i>in stock</span>
                        </div>
                    </div>

                    <p class="product-price product-details-price">
                        @if($product->discount != 0 )
                        @php
                        $disc_perc = $product->price*($product->discount/100);
                        $disc_perc = number_format($disc_perc, 2, '.', ',');
                        $disc_perc =$disc_perc . PHP_EOL;
                        $price_to_show = $product->price - $disc_perc;
                        $price_to_show = number_format($price_to_show, 2, '.', ',');
                        $price_to_show =$price_to_show . PHP_EOL;
                        @endphp
                        <span class="main-price discounted"><del>£{{price_to_show}}</del></span>
                        <span class="discounted-price">£{{$disc_perc}}</span>
                        @else
                        <span class="discounted-price">£{{$product->price}}</span>
                        @endif
                    </p>
                    <p class="fz-16">{{$product->details}}</p>
                    <div class="pro-details-quality">
                        <div class="quantity quantity--2">
                            <div type="button" onclick="decrementQuantity()" class="dec qtybutton">-</div>
                        <input type="number" id="quantity" class="quantity-input" name="quantity" min="1"
                            max="{{ $product->quantity }}" value="1" required data-id="{{ $product->id }}"
                            data-productQuantity="{{ $product->quantity }}">
                        <div type="button" onclick="incrementQuantity()" class="inc qtybutton">+</div>
                        </div>
                        <div class="pro-details-cart btn-hover">
                            @if ($product->quantity > 0)
                    <form action="{{ route('cart.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{$price_to_show??$product->price }}">
                        <input type="hidden" class="qty" name="qty" value="1">
                         <button type="submit" class="btn btn-primary " >Add to Cart</button>
                    </form>



                    @endif

                        </div>
                        <!--<div class="pro-details-wishlist">-->
                        <!--    <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>-->
                        <!--</div>-->
                        <!--<div class="pro-details-compare">-->
                        <!--    <a href="compare.html"><i class="fa fa-files-o"></i></a>-->
                        <!--</div>-->
                    </div>
                    <div class="pro-details-sku">
                        <span>SKU: D-12525</span>
                    </div>
                    <div class="pro-details-meta">
                        <span>Categories : </span>
                        <ul>
                            <li><a href="#">Home Decoration</a></li>

                        </ul>
                    </div>
                    <div class="pro-details-meta">
                        <span>Tag : </span>
                        <ul>
                            <li><a href="#">Consumer Electronics,</a></li>
                            <li><a href="#">Decoration</a></li>
                        </ul>
                    </div>
                    <div class="product-html-custom">
                        <a href="#"><i class="dlicon shopping_delivery-fast"></i>Store availability</a>
                        <a href="#"><i class="dlicon location_pin"></i>Delivery and return</a>
                        <a href="#"><i class="dlicon design_measure-17"></i>Size Guide</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Details Area End -->
<!-- Product Description Start -->
<div class="product-description section pb-55 pb-lg-35 pb-md-20 pb-sm-15 pb-xs-10">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="description-nav">
                    <ul class="nav">
                        <li><a class="active show" href="#description" data-bs-toggle="tab">Description</a></li>
                        <li><a href="#information" data-bs-toggle="tab">Additional information</a></li>

                        <li><a href="#shipping" data-bs-toggle="tab">Shipping & Delivery</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-content">
                    <div id="description" class="single-product-tab tab-pane fade active show">
                        <div class="row row-40">
                            <div class="col-lg-7 order-2">
                                <div class="decription-content">
                                    <p>{{$product->description}}</p>
                                    @if($product->id == 42)
                                    <p>
                                        <strong>
                                            <span style="color: #ff0000;">
                                                Light up your nights with a mini teddy bear fireworks show!
                                            </span>
                                             This teddy bear 3D colorful fireworks table lamp is the perfect addition to any space, creating a perfect fairytale atmosphere.
                                        </strong>
                                    </p>
                                    <a href="#">
                                    <img src="https://img.fantaskycdn.com/35026343cab75255fae65afbd89e746e.gif" alt="">
                                  </a>
                                    @endif
                                </div>
                            </div>
                            <!--<div class="col-lg-5 order-1">-->

                            <!--    <div class="banner mb-30">-->
                            <!--        <img src="assets/images/product/product-desc/addition_04.jpg" alt="">-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div id="information" class="single-product-tab tab-pane fade">
                        <div class="product-information mb-30">
                            <ul class="information-list">
                                <p>{{$product->details}}</p>
                            </ul>
                        </div>
                    </div>

                    <div id="shipping" class="single-product-tab tab-pane fade">
                        <div class="product-shipping">
                            <p>Experience the convenience of seamless shopping with our free shipping across the entire United Kingdom! At Trendy Week, we believe in providing our customers with an effortless and cost-effective shopping experience. Enjoy the luxury of having your favorite products delivered right to your doorstep without any additional shipping charges. Elevate your shopping journey with us, where your satisfaction is our priority, and delivery is always on us. Shop now and relish the joy of free shipping across the UK at Trendy Week.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Description End -->
<!-- Related Product Area Start -->
<div class="related-product-area section pb-120 pb-lg-100 pb-md-90 pb-sm-80 pb-xs-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center before-none text-normal mb-50 mb-md-30 mb-sm-30 mb-xs-20">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="related-product-slider">
             @foreach($products as $product)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <!--  Single Grid product Start -->
                <div class="single-grid-product mb-30">
                    <div class="product-image">
                        <!--<div class="product-label">-->
                        <!--    <span class="sale">-20%</span>-->
                        <!--    <span class="new">New</span>-->
                        <!--    <span class="out-stock">Out of stock</span>-->
                        <!--</div>-->
                        <a href="{{ route('shop.show', $product->slug) }}">
                            <img src="{{asset('img/products/'.$product->image)}}" class="img-fluid"
                                alt="">
                            <img src="{{asset('img/products/'.$product->image)}}" class="img-fluid"
                                alt="">
                        </a>

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
</div>
<script>

    function changeMainSlide(imagePath) {
        $('.main-slide').attr('src', imagePath);
    }
    const classname = document.querySelectorAll('.quantity-input');


    function incrementQuantity() {
        const quantityInput = document.getElementById('quantity');
        const quantities = document.getElementsByClassName('qty');
        const currentQuantity = parseInt(quantityInput.value, 10);

        const maxQuantity = parseInt(quantityInput.max, 10);

        if (currentQuantity < maxQuantity) {
            const newQuantity = currentQuantity + 1;
            quantityInput.value = newQuantity;
            Array.from(quantities).forEach(function (quantity) {
                quantity.value = newQuantity;
            });
            const id = quantityInput.getAttribute('data-id');

        }
    }

    function decrementQuantity() {
        const quantityInput = document.getElementById('quantity');
        const quantities = document.getElementsByClassName('qty');
        const currentQuantity = parseInt(quantityInput.value, 10);

        if (currentQuantity > 1) {
            const newQuantity = currentQuantity - 1;
            quantityInput.value = newQuantity;
            Array.from(quantities).forEach(function (quantity) {
                quantity.value = newQuantity;
            });
            const id = quantityInput.getAttribute('data-id');

        }
    }
</script>
@endsection
