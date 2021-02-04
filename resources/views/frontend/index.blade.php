@extends('frontend.master')
@section('title', 'Tuba | Home')
@section('home', 'active')
@section('content')
        <div id="cat-nav">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#cat-nav-mega">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="collapse navbar-collapse" id="cat-nav-mega">
                                <ul class="nav navbar-nav">
                                    <li><a href="{{route('frontend.men.cloth')}}">MEN </a></li>
                                    <li><a href="{{route('frontend.women.cloth')}}">WOMEN </a></li>
                                    <li><a href="{{route('frontend.kids.cloth')}}">BABY & KIDS </a></li>
                                    <li><a href="{{route('frontend.groceries')}}">GROCERIES </a></li>
                                    <li><a href="{{route('frontend.accessories')}}">ACCESSORIES </a></li>
                                    <li><a href="{{route('frontend.offer_zone')}}">OFFERS ZONE </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
{{--        <div class="row text-center navbar_bottom">--}}
{{--            <div class="col-md-3 tuba_logo"><a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/images/tuba_logo_GIF.gif')}}" class="dp_logo" alt="ft-logo"></a></div>--}}
{{--            <div class="col-md-3 "><a href="#" data-toggle="modal" data-target="#wishlist"><img src="{{asset('assets/images/icon/like.png')}}" alt="pav" class="wishlist" id="wishlist_header"> <span>{{0}}</span></a></div>--}}
{{--            <div class="col-md-3 "><a href="{{route('cart')}}"><img src="{{asset('assets/images/icon/favorite-cart.png')}}" alt="bag" class="wishlist"><span>৳{{0}}</span></a></div>--}}
{{--            <div class="col-md-3 login_register"><a href="">Login</a>/<a href="">Register</a></div>--}}
{{--        </div>--}}
        <div class="row">
            <div class="col-md-12 like_index"><a href="#" data-toggle="modal" data-target="#wishlist"><img src="{{asset('assets/images/icon/like.png')}}" alt="pav" class="wishlist" id="wishlist_header"> <span class="wishlist_content">{{0}}</span></a></div>
            <div class="col-md-12 cart_index"><a href="{{route('cart')}}"><img src="{{asset('assets/images/icon/favorite-cart.png')}}" alt="bag" class="wishlist"><span class="cart_content">৳0000000</span></a></div>
        </div>

        <div id="main-slider">
            <div id="home-slider" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="{{asset('assets/images/slider-1.jpg')}}" alt="slide-1" class="img-responsive">
                    <div class="slider-desc">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="slide-offers-left">
    {{--                                    <div class="slide-offers-title"><span>Men’s</span><br/>FASHION</div>--}}
    {{--                                    <p>New & Fashion collection<br/>arrival in believe store</p>--}}
    {{--                                    <a href="{{route('frontend.men.cloth')}}" class="btn btn-blue">Shop now</a>--}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slide-offers-right">
    {{--                                    <div class="slide-offers-title"><span>Women’s</span><br/>FASHION</div>--}}
    {{--                                    <p>New & Fashion collection<br/>arrival in believe store</p>--}}
    {{--                                    <a href="{{route('frontend.women.cloth')}}" class="btn btn-magenta">Shop now</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/slider-2.jpg')}}" alt="slide-2" class="img-responsive">
                    <div class="slider-desc">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="slide-offers-left">
    {{--                                    <div class="slide-offers-title"><span>50% Price cut</span><br/>for online order</div>--}}
    {{--                                    <p>New & Fashion collection<br/>arrival in believe store</p>--}}
    {{--                                    <a href="{{route('frontend.cloth')}}" class="btn btn-blue">Shop now</a>--}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="home-content">
                <div class="cat-offers">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="cat-sec-2">
                                <img src="{{asset('assets/images/home/men_photo4.png')}}" class="img-responsive" alt="">
                                <div class="cat-desc">
                                    <div class="cat-inner1">
                                        <div class="cat-title">cloths<span class="cat-span">Clothing</span></div>
                                        <a href="{{route('frontend.cloth')}}" class="btn btn-border">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cat-sec-2">
                                <img src="{{asset('assets/images/home/toys.jpg')}}" class="img-responsive" alt="">
                                <div class="cat-desc">
                                    <div class="cat-inner2">
                                        <div class="custom">
                                            <div class="cat-title">Toys<span class="cat-span">Food</span></div>
                                            <a href="{{route('frontend.groceries')}}" class="btn btn-border">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cat-sec-2">
                                <img src="{{asset('assets/images/home/accessories.png')}}" class="img-responsive" alt="">
                                <div class="cat-desc">
                                    <div class="cat-inner">
                                        <div class="cat-title">accessories<span class="cat-span">collections - 2020</span></div>
                                        <a href="{{route('frontend.accessories')}}" class="btn btn-border">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="newest">
            <div class="container">
                <div class="newest-content">
                    <div class="newest-tab">
                        <div class="row">
                            <ul id="myTab" class="nav nav-tabs newest" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#1" id="cat-1" role="tab" data-toggle="tab" aria-controls="1" aria-expanded="true">Featured</a>
                                </li>
                                <li role="presentation">
                                    <a href="#2" role="tab" id="cat-2" data-toggle="tab" aria-controls="2">New Arrivals</a>
                                </li>
                                <li role="presentation">
                                    <a href="#3" role="tab" id="cat-3" data-toggle="tab" aria-controls="3">Best Seller</a>
                                </li>
                            </ul>
                        </div>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="1" aria-labelledby="cat-1">
                                <div class="row">
                                    @foreach($products as $product)
                                        @if($product->pf == 'featured')
                                            @php
                                                $f++;
                                        @endphp
                                        <div class="col-md-3 prdct-grid">
                                            <div id="product-image">
                                                <div class="contenedorCards">
                                                    <div class="card">
                                                        <div class="wrapper">
                                                            <div class="colorProd"></div>
                                                            <div class="imgProd" style="background-image: url({{asset('assets/images/products/'.$product->category . '/'.$product->image)}});"></div>
                                                            <div class="infoProd">
                                                                <p class="nombreProd">{{$product->title}}</p>
                                                                <div class="actions">
                                                                    <div class="preciosGrupo">
                                                                        <p class="precio precioOferta">{{$product->prev_price ? '৳'.$product->prev_price : ''}}</p>
                                                                        <p class="precio precioProd">৳{{$product->new_price}}</p>
                                                                    </div>
                                                                    <div class="bakuretsu_icono action aFavs">
                                                                        <img src="{{asset('assets/images/icon/like.png')}}" id="caraousel_wishlist" alt="pav" class="wishlist_cart" data-id="{{$product->id}}" title="Add To Wishlist">
                                                                    </div>
                                                                    <div class="bakuretsu_icono action alCarrito">
                                                                        <a href="{{route('add-cart', [$product->id])}}" class="cart_botom">
                                                                            <img src="{{asset('assets/images/icon/favorite-cart.png')}}" class="cart_botom" alt="bag" title="Add To Cart">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
{{--                                            <div class="product-fade">--}}
{{--                                                <div class="product-fade-wrap">--}}
{{--                                                    <div id="product-image">--}}
{{--                                                        <div class="item2"><a href="{{route('product_view', [$product->id])}}" class="" id=""><img src="{{asset('assets/images/products/'.$product->category . '/'.$product->image)}}" alt="" id="product_img" class="img-responsive" title="Product Details"></a></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-fade-ct">--}}
{{--                                                        <div class="product-fade-control">--}}
{{--                                                            <div class="to-left">--}}
{{--                                                                <img src="{{asset('assets/images/icon/like.png')}}" id="wishlist_cart" alt="pav" class="product_cart wishlist_cart" data-id="{{$product->id}}" title="Add To Wishlist">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="clearfix"></div>--}}
{{--                                                            <a href="{{route('add-cart', [$product->id])}}" class="btn btn-to-cart">--}}
{{--                                                                <img src="{{asset('assets/images/icon/favorite-cart.png')}}" id="cart_design" alt="bag" class="product_cart" title="Add To Cart">--}}
{{--                                                            </a>--}}
{{--                                                            <a href="{{route('product_view', [$product->id])}}" class="btn btn-to-cart" id="btn-to-product">--}}
{{--                                                                <img src="{{asset('assets/images/icon/view.png')}}" id="cart_design" alt="bag" class="product_cart" title="See More Details">--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                    <img src="{{asset('assets/images/icon/like.png')}}" id="wishlist_cart" alt="pav" class="wishlist_image" data-id="{{$product->id}}" title="Add To Wishlist" style="width: 50px">--}}
{{--                                                <a href="{{route('product_view', [$product->id])}}" class="" id="">--}}
{{--                                                    <img src="{{asset('assets/images/icon/view.png')}}" id="" alt="bag" class="view_image" title="See More Details" style="width: 50px">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-name">--}}
{{--                                                <a href="">{{$product->title}}</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-price">--}}
{{--                                                <span>{{$product->prev_price ? '৳'.$product->prev_price : ''}}</span> ৳{{$product->new_price}}--}}
{{--                                            </div>--}}
                                        </div>
                                        @if($f>=8)
                                            @break
                                        @endif
                                    @endif
                                @endforeach
                                @if($f>=8)
                                    <div class="row" id="button_div">
                                        <div class="col-md-9"></div>
                                        <div class="col-md-3">
                                            <div class="button_see_more">
                                                <button class="btn btn-info btn-block" onclick="Extend('see_more')">See more</button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div id="see_more" style="display: none">
                                    <div class="clearfix"></div>
                                    @foreach($products_f as $product)
                                        <div class="col-md-3 prdct-grid">
                                            <div id="product-image">
                                                <div class="contenedorCards">
                                                    <div class="card">
                                                        <div class="wrapper">
                                                            <div class="colorProd"></div>
                                                            <div class="imgProd" style="background-image: url({{asset('assets/images/products/'.$product->category . '/'.$product->image)}});"></div>
                                                            <div class="infoProd">
                                                                <p class="nombreProd">{{$product->title}}</p>
                                                                <div class="actions">
                                                                    <div class="preciosGrupo">
                                                                        <p class="precio precioOferta">{{$product->prev_price ? '৳'.$product->prev_price : ''}}</p>
                                                                        <p class="precio precioProd">৳{{$product->new_price}}</p>
                                                                    </div>
                                                                    <div class="bakuretsu_icono action aFavs">
                                                                        <img src="{{asset('assets/images/icon/like.png')}}" id="caraousel_wishlist" alt="pav" class="wishlist_cart" data-id="{{$product->id}}" title="Add To Wishlist">
                                                                    </div>
                                                                    <div class="bakuretsu_icono action alCarrito">
                                                                        <a href="{{route('add-cart', [$product->id])}}" class="cart_botom">
                                                                            <img src="{{asset('assets/images/icon/favorite-cart.png')}}" class="cart_botom" alt="bag" title="Add To Cart">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
{{--                                            <div class="product-fade">--}}
{{--                                                <div class="product-fade-wrap">--}}
{{--                                                    <div id="product-image">--}}
{{--                                                        <div class="item2"><a href="{{route('product_view', [$product->id])}}" class="" id=""><img src="{{asset('assets/images/products/'.$product->category . '/'.$product->image)}}" alt="" id="product_img" class="img-responsive" title="Product Details"></a></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-fade-ct">--}}
{{--                                                        <div class="product-fade-control">--}}
{{--                                                            <div class="to-left">--}}
{{--                                                                <img src="{{asset('assets/images/icon/like.png')}}" id="wishlist_cart" alt="pav" class="product_cart wishlist_cart" data-id="{{$product->id}}" title="Add To Wishlist">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="clearfix"></div>--}}
{{--                                                            <a href="{{route('add-cart', [$product->id])}}" class="btn btn-to-cart">--}}
{{--                                                                <img src="{{asset('assets/images/icon/favorite-cart.png')}}" id="cart_design" alt="bag" class="product_cart" title="Add To Cart">--}}
{{--                                                            </a>--}}
{{--                                                            <a href="{{route('product_view', [$product->id])}}" class="btn btn-to-cart" id="btn-to-product">--}}
{{--                                                                <img src="{{asset('assets/images/icon/view.png')}}" id="cart_design" alt="bag" class="product_cart" title="See More Details">--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row text-center">--}}
{{--                                                <img src="{{asset('assets/images/icon/like.png')}}" id="wishlist_cart" alt="pav" class="wishlist_image" data-id="{{$product->id}}" title="Add To Wishlist" style="width: 50px">--}}
{{--                                                <a href="{{route('product_view', [$product->id])}}" class="" id="">--}}
{{--                                                    <img src="{{asset('assets/images/icon/view.png')}}" id="" alt="bag" class="view_image" title="See More Details" style="width: 50px">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-name">--}}
{{--                                                <a href="">{{$product->title}}</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-price">--}}
{{--                                                <span>{{$product->prev_price ? '৳'.$product->prev_price : ''}}</span> ৳{{$product->new_price}}--}}
{{--                                            </div>--}}
                                        </div>
                                    @endforeach
                                    <div class="row" id="button_div">
                                        <div class="col-md-9"></div>
                                        <div class="col-md-3">
                                            <div class="button_see_more">
                                                <button class="btn btn-info btn-block" onclick="Shrink('see_more')">See Less</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="2" aria-labelledby="cat-2">
                            <div class="row">
                                @foreach($products as $product)
                                    @if($product->pf == 'new')
                                        @php
                                            $n++;
                                        @endphp
                                        <div class="col-md-3 prdct-grid">
                                            <div id="product-image">
                                                <div class="contenedorCards">
                                                    <div class="card">
                                                        <div class="wrapper">
                                                            <div class="colorProd"></div>
                                                            <div class="imgProd" style="background-image: url({{asset('assets/images/products/'.$product->category . '/'.$product->image)}});"></div>
                                                            <div class="infoProd">
                                                                <p class="nombreProd">{{$product->title}}</p>
                                                                <div class="actions">
                                                                    <div class="preciosGrupo">
                                                                        <p class="precio precioOferta">{{$product->prev_price ? '৳'.$product->prev_price : ''}}</p>
                                                                        <p class="precio precioProd">৳{{$product->new_price}}</p>
                                                                    </div>
                                                                    <div class="bakuretsu_icono action aFavs">
                                                                        <img src="{{asset('assets/images/icon/like.png')}}" id="caraousel_wishlist" alt="pav" class="wishlist_cart" data-id="{{$product->id}}" title="Add To Wishlist">
                                                                    </div>
                                                                    <div class="bakuretsu_icono action alCarrito">
                                                                        <a href="{{route('add-cart', [$product->id])}}" class="cart_botom">
                                                                            <img src="{{asset('assets/images/icon/favorite-cart.png')}}" class="cart_botom" alt="bag" title="Add To Cart">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
{{--                                            <div class="product-fade">--}}
{{--                                                <div class="product-fade-wrap">--}}
{{--                                                    <div id="product-image">--}}
{{--                                                        <div class="item2"><a href="{{route('product_view', [$product->id])}}" class="" id=""><img src="{{asset('assets/images/products/'.$product->category .'/'.$product->image)}}" alt="" class="img-responsive" id="product_img" title="Product Details"></a></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-fade-ct">--}}
{{--                                                        <div class="product-fade-control">--}}
{{--                                                            <div class="to-left">--}}
{{--                                                                <img src="{{asset('assets/images/icon/like.png')}}" id="wishlist_cart" alt="pav" class="product_cart wishlist_cart" data-id="{{$product->id}}" title="Add To Wishlist">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="clearfix"></div>--}}
{{--                                                            <a href="{{route('add-cart', [$product->id])}}" class="btn btn-to-cart">--}}
{{--                                                                <img src="{{asset('assets/images/icon/favorite-cart.png')}}" id="cart_design" alt="bag" class="product_cart" title="Add To Cart">--}}
{{--                                                            </a>--}}
{{--                                                            <a href="{{route('product_view', [$product->id])}}" class="btn btn-to-cart" id="btn-to-product">--}}
{{--                                                                <img src="{{asset('assets/images/icon/view.png')}}" id="cart_design" alt="bag" class="product_cart" title="See More Details">--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <img src="{{asset('assets/images/icon/like.png')}}" id="wishlist_cart" alt="pav" class="wishlist_image" data-id="{{$product->id}}" title="Add To Wishlist" style="width: 50px">--}}
{{--                                                <a href="{{route('product_view', [$product->id])}}" class="" id="">--}}
{{--                                                    <img src="{{asset('assets/images/icon/view.png')}}" id="" alt="bag" class="view_image" title="See More Details" style="width: 50px">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-name">--}}
{{--                                                {{$product->title}}--}}
{{--                                            </div>--}}
{{--                                            <div class="product-price">--}}
{{--                                                <span>{{$product->prev_price ? '৳'.$product->prev_price : ''}}</span> ৳{{$product->new_price}}--}}
{{--                                            </div>--}}
                                        </div>
                                        @if($n>=12)
                                            @break
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="3" aria-labelledby="cat-3">
                            <div class="row clearfix">
                                @foreach($products as $product)
                                    @if($product->pf == 'best')
                                        @php
                                            $b++;
                                        @endphp
                                        <div class="col-md-3 prdct-grid">
{{--                                            <div class="product-fade">--}}
{{--                                                <div class="product-fade-wrap">--}}
                                                    <div id="product-image">
                                                        <div class="contenedorCards">
                                                            <div class="card">
                                                                <div class="wrapper">
                                                                    <div class="colorProd"></div>
                                                                    <div class="imgProd" style="background-image: url({{asset('assets/images/products/'.$product->category . '/'.$product->image)}});"></div>
                                                                    <div class="infoProd">
                                                                        <p class="nombreProd">{{$product->title}}</p>
                                                                        <div class="actions">
                                                                            <div class="preciosGrupo">
                                                                                <p class="precio precioOferta">{{$product->prev_price ? '৳'.$product->prev_price : ''}}</p>
                                                                                <p class="precio precioProd">৳{{$product->new_price}}</p>
                                                                            </div>
                                                                            <div class="bakuretsu_icono action aFavs">
                                                                                <img src="{{asset('assets/images/icon/like.png')}}" id="caraousel_wishlist" alt="pav" class="wishlist_cart" data-id="{{$product->id}}" title="Add To Wishlist">
                                                                            </div>
                                                                            <div class="bakuretsu_icono action alCarrito">
                                                                                <a href="{{route('add-cart', [$product->id])}}" class="cart_botom">
                                                                                    <img src="{{asset('assets/images/icon/favorite-cart.png')}}" class="cart_botom" alt="bag" title="Add To Cart">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
{{--                                                    <div class="product-fade-ct">--}}
{{--                                                        <div class="product-fade-control">--}}
{{--                                                            <div class="to-left">--}}
{{--                                                                <img src="{{asset('assets/images/icon/like.png')}}" id="wishlist_cart" alt="pav" class="product_cart wishlist_cart" data-id="{{$product->id}}" title="Add To Wishlist">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="clearfix"></div>--}}
{{--                                                            <a href="{{route('add-cart', [$product->id])}}" class="btn btn-to-cart">--}}
{{--                                                                <img src="{{asset('assets/images/icon/favorite-cart.png')}}" id="cart_design" alt="bag" class="product_cart" title="Add To Cart">--}}
{{--                                                            </a>--}}
{{--                                                            <a href="{{route('product_view', [$product->id])}}" class="btn btn-to-cart" id="btn-to-product">--}}
{{--                                                                <img src="{{asset('assets/images/icon/view.png')}}" id="cart_design" alt="bag" class="product_cart" title="See More Details">--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <img src="{{asset('assets/images/icon/like.png')}}" id="wishlist_cart" alt="pav" class="wishlist_image" data-id="{{$product->id}}" title="Add To Wishlist" style="width: 50px">--}}
{{--                                                <a href="{{route('product_view', [$product->id])}}" class="" id="">--}}
{{--                                                    <img src="{{asset('assets/images/icon/view.png')}}" id="" alt="bag" class="view_image" title="See More Details" style="width: 50px">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-name">--}}
{{--                                                <a href="">{{$product->title}}</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-price">--}}
{{--                                                <span>{{$product->prev_price ? '৳'.$product->prev_price : ''}}</span> ৳{{$product->new_price}}--}}
{{--                                            </div>--}}
                                        </div>
                                        @if($b>=12)
                                            @break
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-offers img-responsive">
        <div class="container">
            <div class="ct-offers">
                <div class="ct-offers-title">Tuba<br>Women’s</div>
                <p>"What you wear is how you present yourself to the world, especially today, when human contacts are so quick. Fashion is instant language."  —Miuccia Prada</p>
                <a href="{{route('frontend.women.cloth')}}" class="btn btn-blue">Discover more Product</a>
            </div>
        </div>
    </div>
    <div class="new_offer">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    @if(!empty($offer))
                        <img src="{{asset('assets/images/offers/'. $offer->image)}}" class="img-responsive" onclick="wishlist()">
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    @if(!empty($offer))
                        <h2 class="text-center">Valid For</h2>
                        <div class="countdown">
                            <div id="day">0</div>
                            <div id="hour">0</div>
                            <div id="minute">0</div>
                            <div id="second">0</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="offer_slider">
                    <div class="container-fluid">
                        <div class="viewed">
                            <div class="row">
                                <div class="col">
                                    <div class="bbb_viewed_slider_container">
                                        <div class="owl-carousel owl-theme bbb_viewed_slider">

                                        @foreach($products as $product)
                                           @if(!empty($offer) && $product->offer == $offer->id)
                                            <div class="owl-item">
                                                <div class="product-fade">
                                                    <div class="product-fade-wrap">
                                                        <div id="product-image">
                                                            <div class="contenedorCards">
                                                                <div class="card">
                                                                    <div class="wrapper">
                                                                        <div class="colorProd"></div>
                                                                        <div class="imgProd" style="background-image: url({{asset('assets/images/products/'.$product->category . '/'.$product->image)}});"></div>
                                                                        <div class="infoProd">
                                                                            <p class="nombreProd">{{$product->title}}</p>
{{--                                                                            <p class="extraInfo">Fecha de salida: 31/03/2021</p>--}}
                                                                            <div class="actions">
                                                                                <div class="preciosGrupo">
                                                                                    <p class="precio precioOferta">{{$product->prev_price ? '৳'.$product->prev_price : ''}}</p>
                                                                                    <p class="precio precioProd">৳{{$product->new_price}}</p>
                                                                                </div>
                                                                                <div class="bakuretsu_icono action aFavs">
                                                                                    <img src="{{asset('assets/images/icon/like.png')}}" id="caraousel_wishlist" alt="pav" class="wishlist_cart" data-id="{{$product->id}}" title="Add To Wishlist">
                                                                                </div>
                                                                                <div class="bakuretsu_icono action alCarrito">
                                                                                    <a href="{{route('add-cart', [$product->id])}}" class="caraousel_cart">
                                                                                        <img src="{{asset('assets/images/icon/favorite-cart.png')}}" class="caraousel_cart" alt="bag" title="Add To Cart">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

{{--                                                                @if($offer->duration > date('Y-m-d'))--}}
{{--                                                                <div class="product-fade-ct">--}}
{{--                                                                    <div class="product-fade-control">--}}
{{--                                                                        <div class="to-left">--}}
{{--                                                                            <img src="{{asset('assets/images/icon/like.png')}}" id="caraousel_wishlist" alt="pav" class="wishlist_cart" data-id="{{$product->id}}" title="Add To Wishlist">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="clearfix"></div>--}}
{{--                                                                        <a href="{{route('add-cart', [$product->id])}}" class="btn btn-to-cart">--}}
{{--                                                                            <img src="{{asset('assets/images/icon/favorite-cart.png')}}" class="offer_cart_2" alt="bag" title="Add To Cart">--}}
{{--                                                                        </a>--}}
{{--                                                                        <a href="{{route('product_view', [$product->id])}}" class="btn btn-to-cart">--}}
{{--                                                                            <img src="{{asset('assets/images/icon/view.png')}}" alt="bag" class="offer_cart_2" title="See More Details">--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                @endif--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        @if($offer->duration > date('Y-m-d'))--}}
{{--                                                        <div class="row text-center">--}}
{{--                                                            <div class="col-md-6">--}}
{{--                                                                <img src="{{asset('assets/images/icon/like.png')}}" id="wishlist_cart" alt="pav" class="offer_wishlist_image" data-id="{{$product->id}}" title="Add To Wishlist">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-md-6">--}}
{{--                                                                <a href="{{route('product_view', [$product->id])}}" class="" id="">--}}
{{--                                                                    <img src="{{asset('assets/images/icon/view.png')}}" id="" alt="bag" class="offer_view_image" title="See More Details">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        @endif--}}
{{--                                                        <div class="product-name">--}}
{{--                                                            <a href="">{{$product->title}}</a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product-offer-price">--}}
{{--                                                            <span>{{$product->prev_price ? '৳'.$product->prev_price : ''}}</span> ৳{{$product->new_price}}--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="why_us">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 wpld">
                    <span class="why_people color"><span class="span"></span><span class="span"></span>Why We<span class="span"></span></span>
                    <span><img src="{{asset('assets/images/heart.png')}}" class="why_Tuba_image"/></span>
                    <span class="dream_point color"><span class="span"></span>Tuba ?<span class="span"></span><span class="span"></span></span>
                    <br/><br/><br/>
                </div>
                <div class="col-md-6"><img src="{{asset('assets/images/tuba_logo_GIF.gif')}}" class="img-responsive" id="Tuba_logo" width="100%"></div>
                <div class="col-md-6 about_us_text color">We just love the thrill of shopping for new clothes & updating our wardrobes.On the flip side, fashion goes round in circles. Sometimes, if you hold onto something long enough, in a few years it might come back in fashion again.There’s so much choice, mixing, matching, updating, ways to be stand out & personally express yourself.Window shopping, it’s free & you can get so much outfit inspo ideas.I love following trends at designer shows and at retail. I’m fascinated by how trends start on the catwalks or on the street, and how they filter down to retail. I’m curious to compare retail fashion with street fashion. I’m fascinated by the power that we as consumers have to keep a trend alive, despite them being off-trend. I also enjoy seeing trends repeat themselves as the decades go by.</div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="all_products">
{{--        <div class="row">--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="product_container">--}}
{{--                    <img src="{{asset('assets/images/landing_page/woman_gallery.jpg')}}" class="product_image img-responsive" alt="" />--}}
{{--                    <p class="title">Women Cloths</p>--}}
{{--                    <div class="overlay"></div>--}}
{{--                    <div class="button"><a href="{{route('frontend.women.cloth')}}"> Buy Now </a></div>--}}
{{--                </div>--}}
{{--                <div class="product_container">--}}
{{--                    <img src="{{asset('assets/images/landing_page/groceries_gallery.jpg')}}" class="product_image img-responsive" alt="" />--}}
{{--                    <p class="title">Grocereis</p>--}}
{{--                    <div class="overlay"></div>--}}
{{--                    <div class="button"><a href="{{route('frontend.groceries')}}"> Buy Now </a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="product_container_man">--}}
{{--                    <img src="{{asset('assets/images/landing_page/man_gallery.jpg')}}" class="product_image_man img-responsive" alt="" />--}}
{{--                    <p class="title1">Men Cloths</p>--}}
{{--                    <div class="overlay"></div>--}}
{{--                    <div class="men_button"><a href="{{route('frontend.men.cloth')}}"> Buy Now </a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="product_container">--}}
{{--                    <img src="{{asset('assets/images/landing_page/kids_gallery.jpg')}}" class="product_image img-responsive" alt="" />--}}
{{--                    <p class="title">Kids Cloths</p>--}}
{{--                    <div class="overlay"></div>--}}
{{--                    <div class="button"><a href="{{route('frontend.kids.cloth')}}"> Buy Now </a></div>--}}
{{--                </div>--}}
{{--                <div class="product_container">--}}
{{--                    <img src="{{asset('assets/images/landing_page/accessories_gallery.jpg')}}" class="product_image img-responsive" alt="" />--}}
{{--                    <p class="title">Accessories</p>--}}
{{--                    <div class="overlay"></div>--}}
{{--                    <div class="button"><a href="{{route('frontend.accessories')}}"> Buy Now </a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="shell">
            <div class="row">
                <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <div class="wsk-cp-product">
                            <div class="wsk-cp-img">
                                <img src="{{asset('assets/images/tuba/grocery.jpg')}}" alt="Product" class="img-responsive" />
                            </div>
                            <div class="wsk-cp-text">
                                <div class="category">
                                    <span>Groceries</span>
                                </div>
                                <div class="title-product">
                                    <h3>Fresh Food, Fresh Life</h3>
                                </div>
                                <div class="description-prod">
                                    <p>We Provide the best quality of fresh foods. You don't need to go out to find the organic and reliable foods for your family.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="wsk-cp-product">
                            <div class="wsk-cp-img"><img src="{{asset('assets/images/tuba/woman.jpg')}}" alt="Product" class="img-responsive" /></div>
                            <div class="wsk-cp-text">
                                <div class="category">
                                    <span>Women</span>
                                </div>
                                <div class="title-product">
                                    <h3>Live life, Queen Size</h3>
                                </div>
                                <div class="description-prod">
                                    <p>Tuba provides the best design and comfort for your daily life.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="wsk-cp-product">
                            <div class="wsk-cp-img"><img src="{{asset('assets/images/tuba/man.jpg')}}" alt="Product" class="img-responsive" /></div>
                            <div class="wsk-cp-text">
                                <div class="category">
                                    <span>Men</span>
                                </div>
                                <div class="title-product">
                                    <h3>Fashion is equal to attitude</h3>
                                </div>
                                <div class="description-prod">
                                    <p>Tuba prefers your taste of style and provides according to that.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="wsk-cp-product">
                            <div class="wsk-cp-img"><img src="{{asset('assets/images/tuba/kids.jpg')}}" alt="Product" class="img-responsive" /></div>
                            <div class="wsk-cp-text">
                                <div class="category">
                                    <span>Kids</span>
                                </div>
                                <div class="title-product">
                                    <h3>Kids + Fashion = Smart</h3>
                                </div>
                                <div class="description-prod">
                                    <p>Tuba's kids collection has more comfortable product for your kids with unique style.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="wsk-cp-product">
                            <div class="wsk-cp-img"><img src="{{asset('assets/images/tuba/accessories.jpg')}}" alt="Product" class="img-responsive" /></div>
                            <div class="wsk-cp-text">
                                <div class="category">
                                    <span>Accessories</span>
                                </div>
                                <div class="title-product">
                                    <h3>Accessories are Fashion</h3>
                                </div>
                                <div class="description-prod">
                                    <p>Use tuba's latest collection of accessories to look even better.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-1"></div>
                </div>
        </div>
    </div>
    <br/><br/>
    <div class="customer_review">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3 class="text-center text_color">
                        Please Give Your Valuable Review
                        <hr class="hr_3"/>
                    </h3>
                    <br/>
                    {!! Form::open(['route' => 'review.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="row">
                        <div class="col-md-6"><input id="uploadFile" class="form-control" placeholder="Choose File" disabled="disabled" /></div>
                        <div class="col-md-6">
                            <div class="fileUpload btn btn-info btn-block" style="margin-top: -1px;margin-left: -2px;">
                                <span>Upload</span>
                                <input id="uploadBtn" name="image" type="file" class="upload" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="text_color">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="text_color">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Valid Email" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="text_color">Review</label>
                        <textarea class="form-control" id="message" name="message" rows="5" style="resize: none" placeholder="Please Type Your Review" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-info btn-block">Review</button>
                    {!! Form::close() !!}
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 text-center">
                    <h3 class="text_color">
                        Review's
                        <hr class="hr_3"/>
                    </h3>
                    <br/>
                    <div class="row">
                        <br/><br/>
                        <section id="testim" class="testim">
                            <div class="wrap">
                                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                                <ul id="testim-dots" class="dots">
                                    @for($i =0 ; $i<count($reviews) ; $i++)
                                        <li class="dot active"></li>
                                    @endfor
                                </ul>
                                <div id="testim-content" class="cont">
                                    @foreach($reviews as $review)
                                        <div class="">
                                            <div class="img"><img src="{{asset('assets/images/reviews/'.$review->image)}}" alt=""></div>
                                            <h2>{{$review->name}}</h2>
                                            <p>{{$review->message}}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="delivery_exchange">
        <div class="container">
            <div class="delivery">
                <div class="content-heading">
                    <div class="row">
                        <h3 class="title_content_heading"><span id="">Delivery & Exchange</span></h3>
                    </div>
                </div>
                <br/>
                <div class="row text-center">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-4"><img src="{{asset('assets/images/icon/truck.png')}}" id="truck_icon"></div>
                            <div class="col-md-8">
                                <h4 id="delivery">FREE SHIPPING</h4>
                                <p id="delivery">Buy BDT 3000+ &amp; Get Free Delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-3"><img src="{{asset('assets/images/icon/support.png')}}"></div>
                            <div class="col-md-9">
                                <h4 id="delivery">Support</h4>
                                <p id="delivery">+880-1722006599<br/>info@tubabd.xyz</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-3"><img src="{{asset('assets/images/icon/exchange.png')}}"></div>
                            <div class="col-md-9">
                                <h4 id="delivery">7 Days Exchange</h4>
                                <p id="delivery">simply exchange it within 7 days for an exchange.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-3"><img src="{{asset('assets/images/icon/payment-security.png')}}"></div>
                            <div class="col-md-9">
                                <h4 id="delivery">100% Payment Secure</h4>
                                <p id="delivery">Cash on delivery and secured online payment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <script>
        document.getElementById("uploadBtn").onchange = function () {
            document.getElementById("uploadFile").value = this.value;
        };
        function Extend(divName){
            $('#see_more').show();
            $('#button_div').hide();
        }
        function Shrink(divName){
            $('#button_div').show();
            $('#see_more').hide();
        }
        var countDate = new Date("{{date('m d, Y', strtotime(!empty($offer->duration) ? $offer->duration : '2020-12-12'))}}").getTime();
        function newYear() {
            var now = new Date().getTime();
            gap = countDate - now;
            if(gap > 0){
                var second = 1000;
                var minute = second * 60;
                var hour = minute * 60;
                var day = hour * 24;

                var d = Math.floor(gap / day);
                var h = Math.floor((gap % day) / hour);
                var m = Math.floor((gap % hour) / minute);
                var s = Math.floor((gap % minute) / second);

                document.getElementById("day").innerText = d;
                document.getElementById("hour").innerText = h;
                document.getElementById("minute").innerText = m;
                document.getElementById("second").innerText = s;
            }
            else{
                document.getElementById("day").innerText = '0';
                document.getElementById("hour").innerText = '0';
                document.getElementById("minute").innerText = '0';
                document.getElementById("second").innerText = '0';
            }
        }
        setInterval(function () {
            newYear();
        }, 1000);
    </script>
    <script>
        // vars
        'use strict'
        var	testim = document.getElementById("testim"),
            testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
            testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
            testimLeftArrow = document.getElementById("left-arrow"),
            testimRightArrow = document.getElementById("right-arrow"),
            testimSpeed = 4500,
            currentSlide = 0,
            currentActive = 0,
            testimTimer,
            touchStartPos,
            touchEndPos,
            touchPosDiff,
            ignoreTouch = 30;
        ;

        window.onload = function() {

            // Testim Script
            function playSlide(slide) {
                for (var k = 0; k < testimDots.length; k++) {
                    testimContent[k].classList.remove("active");
                    testimContent[k].classList.remove("inactive");
                    testimDots[k].classList.remove("active");
                }

                if (slide < 0) {
                    slide = currentSlide = testimContent.length-1;
                }

                if (slide > testimContent.length - 1) {
                    slide = currentSlide = 0;
                }

                if (currentActive != currentSlide) {
                    testimContent[currentActive].classList.add("inactive");
                }
                testimContent[slide].classList.add("active");
                testimDots[slide].classList.add("active");

                currentActive = currentSlide;

                clearTimeout(testimTimer);
                testimTimer = setTimeout(function() {
                    playSlide(currentSlide += 1);
                }, testimSpeed)
            }

            testimLeftArrow.addEventListener("click", function() {
                playSlide(currentSlide -= 1);
            })

            testimRightArrow.addEventListener("click", function() {
                playSlide(currentSlide += 1);
            })

            for (var l = 0; l < testimDots.length; l++) {
                testimDots[l].addEventListener("click", function() {
                    playSlide(currentSlide = testimDots.indexOf(this));
                })
            }
            playSlide(currentSlide);
            // keyboard shortcuts
            document.addEventListener("keyup", function(e) {
                switch (e.keyCode) {
                    case 37:
                        testimLeftArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    default:
                        break;
                }
            })
            testim.addEventListener("touchstart", function(e) {
                touchStartPos = e.changedTouches[0].clientX;
            })
            testim.addEventListener("touchend", function(e) {
                touchEndPos = e.changedTouches[0].clientX;
                touchPosDiff = touchStartPos - touchEndPos;
                console.log(touchPosDiff);
                console.log(touchStartPos);
                console.log(touchEndPos);
                if (touchPosDiff > 0 + ignoreTouch) {
                    testimLeftArrow.click();
                } else if (touchPosDiff < 0 - ignoreTouch) {
                    testimRightArrow.click();
                } else {
                    return;
                }

            })
        }
    </script>
@endsection
