@extends('layouts.front')


@section('content')


<div class="breadcrumb-area pt-205 breadcrumb-padding pb-210"
    style="background-image: url(/assets/img/bg/breadcrumb.jpg)">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2> shop grid</h2>
            <ul>
                <li><a href="#">home</a></li>
                <li>shop grid</li>
            </ul>
        </div>
    </div>
</div>


<div class="shop-page-wrapper shop-page-padding ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-sidebar mr-50">
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">Search Products</h3>
                        <div class="sidebar-search">
                            <form action="#">
                                <input placeholder="Search Products..." type="text">
                                <button><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-40">
                        <h3 class="sidebar-title">Filter by Price</h3>
                        <div class="price_filter">
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <div class="label-input">
                                    <label>price : </label>
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                                <button type="button">Filter</button>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-45">
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-categories">
                            <ul>
                                <li><a href="#">Accessories <span>4</span></a></li>
                                <li><a href="#">Book <span>9</span></a></li>
                                <li><a href="#">Clothing <span>5</span> </a></li>
                                <li><a href="#">Homelife <span>3</span></a></li>
                                <li><a href="#">Kids & Baby <span>4</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-overflow mb-45">
                        <h3 class="sidebar-title">color</h3>
                        <div class="product-color">
                            <ul>
                                <li class="red">b</li>
                                <li class="pink">p</li>
                                <li class="blue">b</li>
                                <li class="sky">b</li>
                                <li class="green">y</li>
                                <li class="purple">g</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-40">
                        <h3 class="sidebar-title">size</h3>
                        <div class="product-size">
                            <ul>
                                <li><a href="#">xl</a></li>
                                <li><a href="#">m</a></li>
                                <li><a href="#">l</a></li>
                                <li><a href="#">ml</a></li>
                                <li><a href="#">lm</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-40">
                        <h3 class="sidebar-title">tag</h3>
                        <div class="product-tags">
                            <ul>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Bag</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Tie</a></li>
                                <li><a href="#">Women</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">Top rated products</h3>
                        <div class="sidebar-top-rated-all">
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="/assets/img/product/sidebar-product/1.jpg" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Flying Drone</a></h4>
                                        <div class="top-rated-rating">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <span>$140.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="/assets/img/product/sidebar-product/2.jpg" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Flying Drone</a></h4>
                                        <div class="top-rated-rating">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <span>$140.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="/assets/img/product/sidebar-product/3.jpg" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Flying Drone</a></h4>
                                        <div class="top-rated-rating">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <span>$140.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="/assets/img/product/sidebar-product/4.jpg" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Flying Drone</a></h4>
                                        <div class="top-rated-rating">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <span>$140.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop-product-wrapper res-xl res-xl-btn">
                    <div class="shop-bar-area">
                        <div class="shop-bar pb-60">
                            <div class="shop-found-selector">
                                <div class="shop-found">
                                    <p><span>{{$products->total()}}</span> Products Found </p>
                                </div>

                            </div>

                        </div>
                        <div class="shop-product-content tab-content">
                            <div id="grid-sidebar1" class="tab-pane fade active show">
                                <div class="row">
                                    @foreach($products as $product)
                                            @include('product._single_product')
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                    {{$products->appends(['query'=>request('query')])->render()}}
            </div>
        </div>
    </div>
</div>

@endsection
