@extends('layouts.front')


@section('content')

<div class="product-details ptb-100 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-12">
                <div class="product-details-5 pr-70">
                    <img src="/assets/img/product-details/l1-details-5.png" alt="">
                </div>
            </div>
            <div class="col-md-12 col-lg-5 col-12">
                <div class="product-details-content">
                    <h3>{{$product->name}}</h3>
                    <div class="rating-number">
                        <div class="quick-view-rating">
                            <i class="pe-7s-star red-star"></i>
                            <i class="pe-7s-star red-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                        </div>
                        <div class="quick-view-number">
                            <span>2 Ratting (S)</span>
                        </div>
                    </div>
                    <div class="details-price">
                        <span>${{$product->price}}</span>
                    </div>
                    <p>{!! $product->description !!}</p>

                    <div class="quickview-plus-minus">

                        <div class="quickview-btn-cart">
                            <a class="btn-hover-black" href="{{route('cart.add', $product)}}">add to cart</a>
                        </div>

                    </div>
                    <div class="product-details-cati-tag mt-35">
                        <ul>
                            <li class="categories-title">Categories :</li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">electronics</a></li>
                            <li><a href="#">toys</a></li>
                            <li><a href="#">food</a></li>
                            <li><a href="#">jewellery</a></li>
                        </ul>
                    </div>
                    <div class="product-details-cati-tag mtb-10">
                        <ul>
                            <li class="categories-title">Tags :</li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">electronics</a></li>
                            <li><a href="#">toys</a></li>
                            <li><a href="#">food</a></li>
                            <li><a href="#">jewellery</a></li>
                        </ul>
                    </div>
                    <div class="product-share">
                        <ul>
                            <li class="categories-title">Share :</li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-flikr"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- reviews section --}}

@include('product._reviews')

<!-- related product area start -->
{{-- @include('product._related-product') --}}

@endsection
