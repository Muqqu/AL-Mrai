<div class="cart-flyout">
    <div class="cart-flyout-inner">
        <a class="btn-close-cart" href="#">
            <i class="dlicon ui-1_simple-remove"></i>
        </a>
        <div class="cart-flyout__content">
            <div class="cart-flyout__heading">Shopping Cart</div>
            <div class="widget_shopping_cart_content">
                {{-- <ul class="product_list_widget">
                    @foreach (Cart::content() as $item)
                    <li>
                        <div class="thumb">
                            <img src="{{asset('img/products/'.$item->model->image)}}" alt="product">
                        </div>
                        <div class="content">
                            <h6><a href="single-product.html">{{ $item->model->name }}</a></h6>
                            <div class="quntity">{{$item->qty}} × £{{ $item->model->price }}</div>
                            <form action="{{ route('saveForLater.destroy', $item->rowId) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="remove-btn"></button>
                                                    </form>
                        </div>
                    </li>
                    @endforeach

                </ul> --}}
            </div>
            <p class="minicart__total">Subtotal: <span class="price">£{{ $newSubtotal??"" }}</span></p>
            <div class="cart__btn">
                <a href="{{route('cart.index')}}">View cart</a>
                <a href="{{ route('guestCheckout.index') }}">Checkout</a>
            </div>
        </div>
    </div>
</div>
