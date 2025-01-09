@extends('new-site.layouts.app2')
@section('content')

<!-- Breadcrumb Section Start -->
<div class="breadcrumb-section section bg-image" data-bg="./assets/images/bg/bg-title-shop.jpg">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="breadcrumb-title text-center">
                    <h1>Order Tracking</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Order Tracking</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->



<!-- Order Tracking Section Start -->
<div class="order-tracking-section section">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6">
                <div class="order-tracking-image">
                    <img src="assets/images/order/order-tracking.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="order-tracking-form-area">
                    <form action="{{ route('order.track') }}" method="post">
                        @csrf
                        <p>To track your order please enter your Order ID in the box below and press the "Track" button.
                            This was given to you on your receipt and in the confirmation email you should have
                            received.</p>
                        <div class="single-input">
                            <label for="orderid">Order ID</label>
                            <input type="text" placeholder="Found in your order confirmation email." name="orderid"
                                id="orderid">
                        </div>
                        <!-- <div class="single-input">
                            <label for="orderEmail">Billing email</label>
                            <input type="text" placeholder="Email you used during checkout." name="orderEmail"
                                id="orderEmail">
                        </div> -->
                        <button type="submit" class="shop-btn submit-btn">Track</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Order Tracking Section End -->
<!-- Modal -->
@endsection