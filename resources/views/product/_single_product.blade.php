<div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="product-details.html">
                <img src="assets/img/product/electro/1.jpg" alt="">
            </a>
            <div class="product-action-right">
                <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="{{route('cart.add', $product->id)}}">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="#">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="product-details.html">{{$product->name}}</a></h4>
            <span>{{$product->description}}</span>
            <h5>$ {{$product->price}}</h5>
        </div>
    </div>
</div>
