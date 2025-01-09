@extends('new-site.layouts.app2')
@section('content')
    <div id="main-wrapper" class=" ">

@if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif




        <!-- Cart Section Start -->
        <div class="cart-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <p class="product-title text-muted">Product</p>
                    </div>
                    <div class="col-md-5 d-none d-md-block">
                        <div class="d-flex justify-content-between ">
                            <p class="text-muted">Quantity</p>
                            <p class="text-muted text-end">Total</p>
                        </div>
                    </div>
                </div>
                <hr class="py-3">
                <ul class="cart-list">
                     @foreach (Cart::content() as $item)
                    <li class="list-item">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="d-flex gap-3">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('img/products/' . $item->model->productImages[0]->path) }}" alt="Product Thumnail">
                                    </div>
                                    <div class="content-wrapper mb-3 mb-md-0">
                                        <h5 class="title">{{ $item->model->name }}</h5>
                                        <p class="text-muted">£{{ $item->model->price }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="quantity quantity--2">
                                        <div type="button" class="dec qtybutton" onclick="decrementQuantity('{{ $item->model->id }}')">-</div>
                                        <input type="number" id="quantity{{ $item->model->id }}" class="quantity-input" name="quantity" min="1" max="10" value="{{$item->qty}}" required data-id="{{ $item->rowId }}" data-price="{{$item->model->price}}" data-productQuantity="{{$item->model->quantity}}">
                                        <div class="inc qtybutton" type="button" onclick="incrementQuantity('{{ $item->model->id }}')">+</div>
                                    </div>
                                    <a href="{{ route('cart.destroy', $item->rowId) }}" class="bin me-md-auto ms-md-3 p-2">
                                        <img src="{{asset('assets/images/cart/cart-bin.png')}}" alt="">
                                    </a>
                                    <h5 class="total">£{{ $item->subtotal }}</h5>
                                </div>

                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="row justify-content-end">
                    <div class="col-lg-4">
                        <div class="cart-totals">
                            <div class="cart-calculator bg-white p-0 mb-3">
                                <h2>Cart totals</h2>
                                
                                <div class="cart-calculator__item order-total">
                                    <div class="cart-calculator__item--head">
                                        <span>Total</span>
                                    </div> 
                                    <div class="cart-calculator__item--value text-end">
                                        <input type="hidden" id="grand_total" value="{{ $newSubtotal }}">
                                        <span id="total">£{{ $newSubtotal }}</span>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('guestCheckout.index') }}" class="checkout-btn">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
                
                
                <div class="row mb--96 mb-md--57 d-none">
                    <div class="col-12">
                        <form class="cart-form" action="#">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="table-content table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th>&nbsp;</th>
                                                    <th class="text-left">Product</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (Cart::content() as $item)
                                                <tr>
                                                    <td class="product-remove text-left">
                                                     
                                                        <a href="{{ route('cart.destroy', $item->rowId) }}" class="remove"></a>
                                                   
                                                    <td class="product-thumbnail text-left">
                                                        <img src="{{asset('img/products/'.$item->model->image)}}" alt="Product Thumnail">
                                                    </td>
                                                    <td class="product-name text-left wide-column">
                                                        <h3>
                                                            <a href="product-details.html">{{ $item->model->name }}</a>
                                                        </h3>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="product-price-wrapper">
                                                    <span class="money">£{{ $item->model->price }}</span>
                                                        </span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <div class="quantity quantity--2">
                                                            <div type="button" class="dec qtybutton" onclick="decrementQuantity('{{ $item->model->id }}')">-</div>
                                                            <input type="number" id="quantity{{ $item->model->id }}" class="quantity-input" name="quantity" min="1" max="10" value="{{$item->qty}}" required data-id="{{ $item->rowId }}" data-price="{{$item->model->price}}" data-productQuantity="{{$item->model->quantity}}">
                                                            <div class="inc qtybutton" type="button" onclick="incrementQuantity('{{ $item->model->id }}')">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="product-total-price">
                                                        <span class="product-price-wrapper">
                                                    <span class="money" id="subtotal{{ $item->model->id }}">£{{ $item->subtotal }}</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row pt-30">
                                        <div class="col-lg-6 col-sm-7">
                                            <div class="coupon-form-areas">
                                                <input type="text" name="coupo_code" id="coupo_code" placeholder="Coupon Code" class="form__input">
                                                <button type="submit" class="coupon_btn">Apply Coupon</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-5 text-sm-right">
                                            <a href="{{route('cart.clear')}}"class="cart-btn" >Clear Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="cart-totals">
                                        <div class="cart-calculator">
                                            <h2>Cart totals</h2>
                                            
                                            <div class="cart-calculator__item order-total">
                                                <div class="cart-calculator__item--head">
                                                    <span>Total</span>
                                                </div> 
                                                <div class="cart-calculator__item--value">
                                                    <input type="hidden" id="grand_total" value="{{ $newSubtotal }}">
                                                    <span id="total">£{{ $newSubtotal }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('guestCheckout.index') }}" class="checkout-btn">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Section End -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="dlicon ui-1_simple-remove"></i></button>
            </div>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-details-tab">
                                    <div class="product-tabs pro-dec-big-img-slider">
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <div class="product-label">
                                                    <span class="sale">-20%</span>
                                                    <span class="new">New</span>
                                                </div>
                                                <a href="assets/images/product/product-big/product01.jpg">
                                                    <img src="assets/images/product/product-big/product01.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="easyzoom-style">
                                            <div class="easyzoom-popup">
                                                <a href="assets/images/product/product-big/product02.jpg">
                                                    <img src="assets/images/product/product-big/product02.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="assets/images/product/product-big/product03.jpg">
                                                    <img src="assets/images/product/product-big/product03.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="assets/images/product/product-big/product04.jpg">
                                                    <img src="assets/images/product/product-big/product04.jpg" alt="">
                                                </a>
                                            </div>
                                            <a class="easyzoom-pop-up img-popup" href="assets/images/product/product-big/product04.jpg"><i class="dlicon ui-1_zoom-in"></i></a>
                                        </div>
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="assets/images/product/product-big/product05.jpg">
                                                    <img src="assets/images/product/product-big/product05.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-dec-slider">
                                        <div class="product-dec-small active">
                                            <img src="assets/images/product/product-small/product01.jpg" alt="">
                                        </div>
                                        <div class="product-dec-small">
                                            <img src="assets/images/product/product-small/product02.jpg" alt="">
                                        </div>
                                        <div class="product-dec-small">
                                            <img src="assets/images/product/product-small/product03.jpg" alt="">
                                        </div>
                                        <div class="product-dec-small">
                                            <img src="assets/images/product/product-small/product04.jpg" alt="">
                                        </div>
                                        <div class="product-dec-small">
                                            <img src="assets/images/product/product-small/product05.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Knox Chaise Sofa Gray</h2>
                                    <div class="product-rating-stock">
                                        <div class="product-dec-rating-reviews">
                                            <div class="product-dec-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-dec-reviews">
                                                <a> (3 customer reviews)</a>
                                            </div>
                                        </div>
                                        <div class="pro-stock">
                                            <span><i class="dlicon ui-1_check-circle-08"></i>in stock</span>
                                        </div>
                                    </div>
                                    <p class="product-price product-details-price"><span class="main-price discounted"><del>£723.00</del></span> <span class="discounted-price">£672.00</span></p>
                                    <p class="fz-16">Donec nunc nunc, gravida vitae diam vel, varius interdum erat. Quisque a nunc vel diam auctor commodo. Curabitur blandit ultrices exurabitur ut magna dignissim, dignissi, Nullam vitae venenatis elit. Proin dui lacus, viverra at imperdiet non, facilisis eget orci. Vivamus ac elit tellus. Vestibulum nulla dui, consequat vitae diam eu, pretium finibus libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam vitae neque tellus.</p>
                                    <div class="pro-details-quality">
                                        <div class="quantity quantity--2">
                                            <input type="text" class="quantity-input" name="qty" id="qty-4" value="1">
                                            <div class="dec qtybutton">-</div>
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                        <div class="pro-details-cart btn-hover">
                                            <a href="#">Add To Cart</a>
                                        </div>
                                        <div class="pro-details-wishlist">
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                        <div class="pro-details-compare">
                                            <a href="#"><i class="fa fa-files-o"></i></a>
                                        </div>
                                    </div>
                                    <div class="pro-details-sku">
                                        <span>SKU: D-12525</span>
                                    </div>
                                    <div class="pro-details-meta">
                                        <span>Categories : </span>
                                        <ul>
                                            <li><a href="#">Fruniture,</a></li>
                                            <li><a href="#">Demo 03 - New Arrival,</a></li>
                                            <li><a href="#">Demo 14 - Top Sale,</a></li>
                                            <li><a href="#">Home Fruniture</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-meta">
                                        <span>Tag : </span>
                                        <ul>
                                            <li><a href="#">Furniture,</a></li>
                                            <li><a href="#">Fashion</a></li>
                                        </ul>
                                    </div>
                                    <div class="product-html-custom">
                                        <a href="#"><i class="dlicon shopping_delivery-fast"></i>Store availability</a>
                                        <a href="#"><i class="dlicon location_pin"></i>Delivery and return</a>
                                        <a href="#"><i class="dlicon design_measure-17"></i>Size Guide</a>
                                    </div>
                                    <div class="pro-details-social">
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
        <!-- Warranty Section Start -->
        <!--<div class="warranty-section section bg-image image-fixd pt-80 pt-lg-60 pt-md-50 pt-sm-50 pt-xs-40 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50" data-bg="./assets/images/bg/bg-parallax.jpg">-->
        <!--    <div class="container-fluid plr-250">-->
        <!--        <div class="row align-items-center">-->
        <!--            <div class="col-md-7">-->
        <!--                <div class="warranty-content">-->
        <!--                    <h2 class="title">Warranty Policy</h2>-->
        <!--                    <p>Donec nunc nunc, gravida vitae diam vel, varius interdum erat. Quisque a nunc vel diam auctor commodo. Curabitur blandit ultrices exurabitur ut magna dignissim, dignissiSed quis ante lectus.</p>-->
        <!--                    <a href="#" class="warranty-btn">Explore more</a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-5">-->
        <!--                <div class="warranty-image">-->
        <!--                    <img src="assets/images/icons/bagde.png" alt="">-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Warranty Section End -->

       


    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const classname = document.querySelectorAll('.quantity-input');

        function updateQuantity(id, newQuantity,data_id,op) {
            const productQuantity = document.getElementById('quantity'+data_id).getAttribute('data-productQuantity');
            const productPrice = document.getElementById('quantity'+data_id).getAttribute('data-price');
            const total = newQuantity*productPrice;
            const grand_total = document.getElementById('grand_total').value;
            var new_total = parseFloat(grand_total)+parseFloat(productPrice);
            
            if(op === "dec"){
            var new_total = parseFloat(grand_total)-parseFloat(productPrice);
            }
            document.getElementById('total').innerHTML = "£ "+new_total.toFixed(2);
            document.getElementById('grand_total').value = new_total.toFixed(2);
            axios.patch(`/cart/${id}`, {
                quantity: newQuantity,
                productQuantity: productQuantity
            })
                .then(function (response) {
                    // Redirect to the cart page after successful update
                   // window.location.href = '{{ route('cart.index') }}';
                   document.getElementById('subtotal'+data_id).innerHTML = "£ "+total.toFixed(2);
                })
                .catch(function (error) {
                    // Redirect to the cart page even if there is an error
                   //window.location.href = '{{ route('cart.index') }}';
                });
        }
    function incrementQuantity(data_id) {
  
        const quantityInput = document.getElementById('quantity'+data_id);
        //const quantity = document.getElementById('qty');
            const currentQuantity = parseInt(quantityInput.value, 10);
          
            const maxQuantity = parseInt(quantityInput.max, 10);

            if (currentQuantity < maxQuantity) {
                const newQuantity = currentQuantity + 1;
                quantityInput.value = newQuantity;
                //quantity.value = newQuantity;
                const id = quantityInput.getAttribute('data-id');
                updateQuantity(id, newQuantity,data_id,"inc");
            }
    }

    function decrementQuantity(data_id) {
         const quantityInput = document.getElementById('quantity'+data_id);
         //const quantity = document.getElementById('qty');
            const currentQuantity = parseInt(quantityInput.value, 10);

            if (currentQuantity > 1) {
                const newQuantity = currentQuantity - 1;
                quantityInput.value = newQuantity;
               // quantity.value = newQuantity;
                const id = quantityInput.getAttribute('data-id');
                updateQuantity(id, newQuantity,data_id,"dec");
            }
    }
    
   function clearCart(){
      $.ajax({
                url: '/clear-cart',
                method: 'GET',
            })
   }
</script>
 
@endsection
