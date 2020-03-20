@extends('layouts.front')

@section('content')

<div class="pl-200 pr-200 overflow clearfix">
    <div class="categori-menu-slider-wrapper clearfix">
        <div class="categories-menu">
            <div class="category-heading">
                <h3> All Departments <i class="pe-7s-angle-down"></i></h3>
            </div>
            <div class="category-menu-list">
                <ul>
                    @foreach($categories as $category)
                        <li>
                        <a href="{{route('products.index', ['category_id' => $category->id])}}">{{$category->name}}<i
                                    class="pe-7s-angle-right"></i></a>

                                    @php
                                        $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                                    @endphp

                               @if($children->isNotEmpty())
                                <div class="category-menu-dropdown">

                                    @foreach ($children as $child)
                                        <div class="category-dropdown-style category-common3">
                                            <h4 class="categories-subtitle">
                                                <a href="{{route('products.index', ['category_id' => $child->id])}}">
                                                {{$child->name}}
                                                </a>

                                              </h4>
                                            @php
                                                $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                                            @endphp
                                            @if($grandChild->isNotEmpty())
                                                <ul>
                                                    @foreach ($grandChild as $c)
                                                        <li><a href="{{route('products.index', ['category_id' => $c->id])}}">{{$c->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                    @endforeach


                                </div>

                              @endif
                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
        <div class="menu-slider-wrapper">
            <div class="menu-style-3 menu-hover text-center">
                <nav>
                    <ul>
                        <li><a href="index.html">home <i class="pe-7s-angle-down"></i> <span
                                    class="sticker-new">hot</span></a>
                            <ul class="single-dropdown">
                                <li><a href="index.html">Fashion</a></li>
                                <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                <li><a href="index-fruits.html">fruits</a></li>
                                <li><a href="index-book.html">book</a></li>
                                <li><a href="index-electronics.html">electronics</a></li>
                                <li><a href="index-electronics-2.html">electronics style 2</a></li>
                                <li><a href="index-food.html">food & drink</a></li>
                                <li><a href="index-furniture.html">furniture</a></li>
                                <li><a href="index-handicraft.html">handicraft</a></li>
                                <li><a target="_blank" href="index-smart-watch.html">smart watch</a></li>
                                <li><a href="index-sports.html">sports</a></li>
                            </ul>
                        </li>
                        <li><a href="#">pages </a>
                            <ul class="single-dropdown">
                                <li><a href="about-us.html">about us</a></li>
                                <li><a href="menu-list.html">menu list</a></li>
                                <li><a href="login.html">login</a></li>
                                <li><a href="register.html">register</a></li>
                                <li><a href="cart.html">cart page</a></li>
                                <li><a href="checkout.html">checkout</a></li>
                                <li><a href="wishlist.html">wishlist</a></li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">shop <i class="pe-7s-angle-down"></i> <span
                                    class="sticker-new">hot</span></a>
                            <div class="category-menu-dropdown shop-menu">
                                <div class="category-dropdown-style category-common2 mb-30">
                                    <h4 class="categories-subtitle"> shop layout</h4>
                                    <ul>
                                        <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                        <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                        <li><a href="shop.html">grid 4 column</a></li>
                                        <li><a href="shop-grid-box.html">grid box style</a></li>
                                        <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                        <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                        <li><a href="shop-list-box.html">list box style</a></li>
                                        <li><a href="cart.html">shopping cart</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                    </ul>
                                </div>
                                <div class="category-dropdown-style category-common2 mb-30">
                                    <h4 class="categories-subtitle"> product details</h4>
                                    <ul>
                                        <li><a href="product-details.html">tab style 1</a></li>
                                        <li><a href="product-details-2.html">tab style 2</a></li>
                                        <li><a href="product-details-3.html"> tab style 3</a></li>
                                        <li><a href="product-details-4.html">sticky style</a></li>
                                        <li><a href="product-details-5.html">sticky style 2</a></li>
                                        <li><a href="product-details-6.html">gallery style</a></li>
                                        <li><a href="product-details-7.html">gallery style 2</a></li>
                                        <li><a href="product-details-8.html">fixed image style</a></li>
                                        <li><a href="product-details-9.html">fixed image style 2</a></li>
                                    </ul>
                                </div>
                                <div class="mega-banner-img">
                                    <a href="single-product.html">
                                        <img src="assets/img/banner/18.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li><a href="blog.html">blog <i class="pe-7s-angle-down"></i> <span
                                    class="sticker-new">hot</span></a>
                            <ul class="single-dropdown">
                                <li><a href="blog.html">blog 3 colunm</a></li>
                                <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                <li><a href="blog-details.html">blog details</a></li>
                                <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="slider-area">
                <div class="slider-active owl-carousel">
                    <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173"
                        style="background-image: url(assets/img/slider/5.jpg)">
                        <div class="slider-animation slider-content-style-3 fadeinup-animated">
                            <h2 class="animated">Invention of <br>design platform</h2>
                            <h4 class="animated">Best Product With warranty </h4>
                            <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a>
                        </div>
                    </div>
                    <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173"
                        style="background-image: url(assets/img/slider/20.jpg)">
                        <div class="slider-animation slider-content-style-3 fadeinup-animated">
                            <h2 class="animated">Invention of <br>design platform</h2>
                            <h4 class="animated">Best Product With warranty </h4>
                            <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="electronic-banner-area">
        <div class="custom-row-2">
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="assets/img/banner/15.jpg" alt="">
                    <div class="electro-banner-style electro-banner-position">
                        <h1>Live 4K! </h1>
                        <h2>up to 20% off</h2>
                        <h4>Amazon exclusives</h4>
                        <a href="product-details.html">Buy Now→</a>
                    </div>
                </div>
            </div>
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="assets/img/banner/16.jpg" alt="">
                    <div class="electro-banner-style electro-banner-position2">
                        <h1>Xoxo ssl </h1>
                        <h2>up to 15% off</h2>
                        <h4>Amazon exclusives</h4>
                        <a href="product-details.html">Buy Now→</a>
                    </div>
                </div>
            </div>
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="assets/img/banner/17.jpg" alt="">
                    <div class="electro-banner-style electro-banner-position3">
                        <h1>BY Laptop</h1>
                        <h2>Super Discount</h2>
                        <h4>Amazon exclusives</h4>
                        <a href="product-details.html">Buy Now→</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="electro-product-wrapper wrapper-padding pt-95 pb-45">

        <div class="container-fluid">
            <div class="section-title-4 text-center mb-40">
                <h2>Top Products</h2>
            </div>
            <div class="top-product-style">

                <div>
                    <div id="electro1">
                        <div class="custom-row-2">

                            @foreach($allProducts as $product)
                                @include('product._single_product')

                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
