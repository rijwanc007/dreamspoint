@extends('frontend.master')
@section('title', 'Dream Point | Women')
@php
    $j=0;
@endphp
@section('content')
    <div class="container">
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
                    <div class="collapse navbar-collapse" id="cat-nav-mega">
                        <ul class="nav navbar-nav">
                            <li class="dropdown menu-large li_color">There is nothing to show in here</li>
                            <li><a href="{{route('frontend.men.cloth')}}"> MEN </a></li>
                            <li class="dropdown menu-large active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">WOMEN <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu megamenu" role="menu">
                                    <li>
                                        <div class="">
                                            <div class="mega-sub">
                                                <div class="mega-sub-title">All Clothing</div>
                                                <ul>
                                                    @foreach($categories as $category)
                                                        @if($category->sub_head_category == 'All Clothing')
                                                            <li><a href="#{{$category->sub_category}}">{{$category->sub_category}}</a></li>
                                                            <br/>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="mega-sub">
                                                <div class="mega-sub-title">All Footwear</div>
                                                <ul>
                                                    @foreach($categories as $category)
                                                        @if($category->sub_head_category == 'All Footwear')
                                                            <li><a href="#{{$category->sub_category}}">{{$category->sub_category}}</a></li>
                                                            <br/>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="mega-product">
                                                <div class="mega-sub-title">Featured products</div>
                                                <div class="row">
                                                    @foreach($products as $product)
                                                        @if($j ==2)
                                                            @break
                                                        @endif
                                                        @if($product->pf = 'featured')
                                                            <div class="col-md-6 prdct-grid">
                                                                <div class="product-fade">
                                                                    <div class="product-fade-wrap">
                                                                        <div id="product-image10">
                                                                            <div class="item2"><a href="{{route('product_view', [$product->id])}}" class="" id=""><img src="{{asset('assets/images/products/'.$product->category . '/'.$product->image)}}" alt="" id="product_img" class="img-responsive" title="Product Details"></a></div>
                                                                        </div>
{{--                                                                        <div class="product-fade-ct">--}}
{{--                                                                            <div class="product-fade-control">--}}
{{--                                                                                <div class="to-left">--}}
{{--                                                                                    <img src="{{asset('assets/images/icon/like.png')}}" id="wishlist_cart" alt="pav" class="product_cart wishlist_cart" data-id="{{$product->id}}" title="Add To Wishlist">--}}
{{--                                                                                </div>--}}
{{--                                                                                <div class="clearfix"></div>--}}
{{--                                                                                <a href="{{route('add-cart', [$product->id])}}" class="btn btn-to-cart">--}}
{{--                                                                                    <img src="{{asset('assets/images/icon/favorite-cart.png')}}" id="cart_design" alt="bag" class="product_cart" title="Add To Cart">--}}
{{--                                                                                </a>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
                                                                    </div>
                                                                </div>
{{--                                                                <div class="row text-center">--}}
{{--                                                                    <img src="{{asset('assets/images/icon/like.png')}}" id="wishlist_cart" alt="pav" class="" data-id="{{$product->id}}" title="Add To Wishlist" style="width: 50px">--}}
{{--                                                                    <a href="{{route('product_view', [$product->id])}}" class="" id="">--}}
{{--                                                                        <img src="{{asset('assets/images/icon/view.png')}}" id="" alt="bag" class="" title="See More Details" style="width: 50px">--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
                                                                <div class="product-name">
                                                                    {{$product->title}}
                                                                </div>
                                                                <div class="product-offer-price">
                                                                    <span>{{$product->prev_price ? '৳'.$product->prev_price : ''}}</span> ৳{{$product->new_price}}
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @php
                                                            $j++;
                                                        @endphp
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="mega-offers">
                                                @if(!empty($navoffer))
                                                    <a href=""><img src="{{asset('assets/images/navoffer/'.$navoffer->image)}}" class="img-responsive" alt="" style="width: 100%; height: 384px;"></a>
                                                @endif
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('frontend.kids.cloth')}}">BABY & KIDS </a></li>
                            <li><a href="{{route('frontend.groceries')}}">GROCERIES </a></li>
                            <li><a href="{{route('frontend.accessories')}}">ACCESSORIES </a></li>
                            <li><a href="{{route('frontend.offer_zone')}}">OFFERS ZONE </a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <br/>
        <div class="row">
            {!! Form::open(['route' => 'women.search','method' => 'GET']) !!}
            <div class="col-md-4">
                <input type="text" class="form-control search-wid" placeholder="Product" name="item" aria-describedby="basic-addon2">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info btn-block" id="search_btn"><i class="fa fa-search"></i></button>
            </div>
            {!! Form::close() !!}
            {!! Form::open(['route' => 'women.price.search','method' => 'GET']) !!}
            <div class="col-md-2">
                <input type="number" class="form-control search-wid" placeholder="Price From" name="from" aria-describedby="basic-addon2">
            </div>
            <div class="col-md-2">
                <input type="number" class="form-control search-wid" placeholder="Price To" name="to" aria-describedby="basic-addon2">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info btn-block" id="search_btn"><i class="fa fa-search"></i></button>
            </div>
            {!! Form::close() !!}
        </div>
        <br/><br/>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3 class="text-center">New Collection For Women</h3>
                <hr/>
            </div>
        </div>
        <div id="myTabContent" class="tab-content">
            <div class="row clearfix">
                @forelse($products as $product)
                    @if($product->pf == 'new')
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
                                                        <a href="{{route('product_view', [$product->id])}}" class="cart_bottom">
                                                            <img src="{{asset('assets/images/icon/view.png')}}" class="cart_bottom" alt="bag" title="Add To Cart">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h4 class="text-center">No Data Found !</h4>
                    </div>
                @endforelse
            </div>
        </div>
        @foreach($categories as $category)
            <div id="{{$category->sub_category}}">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h3 class="text-center">{{$category->sub_category}}</h3>
                        <hr/>
                    </div>
                </div>
                <div class="row clearfix">
                    @forelse($products as $product)
                        @if($product->sub_category == $category->sub_category)
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
                                                            <a href="{{route('product_view', [$product->id])}}" class="cart_bottom">
                                                                <img src="{{asset('assets/images/icon/view.png')}}" class="cart_bottom" alt="bag" title="Add To Cart">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <h4 class="text-center">No Data Found !</h4>
                        </div>
                    @endforelse
                </div>
            </div>
        @endforeach
    </div>
    <br/><br/>
@endsection
