@extends('frontend.layouts.master')
@section('content')

<main>
    <!-- hero-area start -->
    <section class="breadcrumb-bg pt-200 pb-180" data-background="img/page/page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="page-title">
                        <p class="small-text pb-15">We are here for your care.</p>
                        <h1>Shop Page</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 d-flex justify-content-start justify-content-md-end align-items-center">
                    <div class="page-breadcumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Shop</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero-area end -->

    <!-- shop-banner-area start -->
    <section class="shop-banner-area pt-120 pb-120">
        <div class="container">
            <div class="row mt-20">
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="product-showing mb-40">
                        <p>Showing 1–22 of 32 results</p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-6">
                    <div class="shop-tab f-right">
                        <ul class="nav text-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true"><i class="fas fa-th-large"></i> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false"><i class="fas fa-list-ul"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="pro-filter mb-40 f-right">
                        <form action="#">
                            <select name="pro-filter" id="pro-filter">
                                <option value="1">Shop By </option>
                                <option value="2">Top Sales </option>
                                <option value="3">New Product </option>
                                <option value="4">A to Z Product </option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                @foreach($allProducts as $product)
                                <div class="col-lg-4 col-md-6">
                                    <div class="product mb-40">
                                        <div class="product__img">
                                            <a href="porduct-details.html"><img src="{{ $product->image }}" alt=""></a>
                                            <div class="product-action text-center">
                                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                                <a href="#"><i class="fas fa-heart"></i></a>
                                                <a href="porduct-details.html"><i class="fas fa-expand"></i></a>
                                            </div>
                                        </div>
                                        <div class="product__content text-center pt-30">
                                            <span class="pro-cat"><a href="#">Cloths</a></span>
                                            <h4 class="pro-title"><a href="porduct-details.html">Medidove
                                                    Product</a></h4>
                                            <div class="price">
                                                <span>$95.00</span>
                                                <span class="old-price">$120.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            @foreach($allProducts as $product)
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="product mb-30">
                                        <div class="product__img">
                                            <a href="porduct-details.html"><img src="img/shop/img2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="product-list-content pt-10 mb-30">
                                        <div class="product__content mb-20">
                                            <span class="pro-cat"><a href="#">Cloths</a></span>
                                            <h4 class="pro-title"><a href="porduct-details.html">Medidove
                                                    Product</a></h4>
                                            <div class="price">
                                                <span>$95.00</span>
                                                <span class="old-price">$120.00</span>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                            laboris nisi
                                            ut
                                            aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate.</p>
                                        <div class="product-action-list">
                                            <a class="btn btn-theme" href="#">add to cart</a>
                                            <a class="action-btn" href="#"><i class="fas fa-heart"></i></a>
                                            <a class="action-btn" href="porduct-details.html"><i
                                                    class="fas fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="basic-pagination basic-pagination-2 text-center mt-20">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#"><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-banner-area end -->


    @endsection