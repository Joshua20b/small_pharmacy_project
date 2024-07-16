@extends('frontend.layouts.master')
@section('content')


<!-- hero-area start -->
<section class="breadcrumb-bg pt-200 pb-180" data-background="/frontend/img/page/page-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="page-title">
                    <p class="small-text pb-15">We are here for your care.</p>
                    <h1>Product Details</h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 d-flex justify-content-start justify-content-md-end align-items-center">
                <div class="page-breadcumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero-area end -->

<!-- shop-banner-area start -->
<section class="shop-banner-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">

                <div class="product-details-img mb-30">
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="home" role="tabpanel">
                            <div class="product-large-img">
                                <img src="{{ $product->image }}" alt="{{ $product->name }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="product-details mb-30">
                    <div class="product-details-title">
                        {{-- <p>Workstead</p> --}}
                        <h1>{{ $product->name }}</h1>
                        <div class="price details-price pb-30 mb-20">
                            <span>${{ number_format($product->discount_price, 2) }}</span>
                            <span class="old-price">${{ number_format($product->original_price, 2)}}</span>
                        </div>
                    </div>
                    <p>{{ $product->description }}</p>
                    <div class="product-cat mt-30 mb-30">
                        <span>Category: </span>
                        <a href="#">{{ $product->category }}</a>
                    </div>
                    <div class="product-social mb-45">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="product-details-action">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection