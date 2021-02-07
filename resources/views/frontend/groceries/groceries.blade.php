@extends('frontend.master')
@section('title', 'Dream Point | Groceries')
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
                            <li><a href="{{route('frontend.women.cloth')}}">WOMEN </a></li>
                            <li><a href="{{route('frontend.kids.cloth')}}">BABY & KIDS </a></li>
                            <li class="dropdown menu-large active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Groceries<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu megamenu" role="menu">
                                    <li>
                                        <div class="">
                                            <div class="mega-sub">
                                                <div class="mega-sub-title">Groceries</div>
                                                <ul>
                                                    @foreach($categories as $category)
                                                        @if($category->sub_head_category == 'Groceries')
                                                            <li><a href="#{{$category->sub_category}}">{{$category->sub_category}}</a></li>
                                                            <br/>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="mega-sub">
                                                <div class="mega-sub-title">Dairy</div>
                                                <ul>
                                                    @foreach($categories as $category)
                                                        @if($category->sub_head_category == 'Dairy')
                                                            <li><a href="#{{$category->sub_category}}">{{$category->sub_category}}</a></li>
                                                            <br/>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="mega-sub">
                                                <div class="mega-sub-title">Fish & Meat</div>
                                                <ul>
                                                    @foreach($categories as $category)
                                                        @if($category->sub_head_category == 'Fish & Meat')
                                                            <li><a href="#{{$category->sub_category}}">{{$category->sub_category}}</a></li>
                                                            <br/>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="mega-sub">
                                                <div class="mega-sub-title">Fresh Produce</div>
                                                <ul>
                                                    @foreach($categories as $category)
                                                        @if($category->sub_head_category == 'Fresh Produce')
                                                            <li><a href="#{{$category->sub_category}}">{{$category->sub_category}}</a></li>
                                                            <br/>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="mega-sub">
                                                <div class="mega-sub-title">Beverage</div>
                                                <ul>
                                                    @foreach($categories as $category)
                                                        @if($category->sub_head_category == 'Beverage')
                                                            <li><a href="#{{$category->sub_category}}">{{$category->sub_category}}</a></li>
                                                            <br/>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('frontend.accessories')}}">ACCESSORIES </a></li>
                            <li><a href="{{route('frontend.offer_zone')}}">OFFERS ZONE </a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <br/>
        <div class="row">
            {!! Form::open(['route' => 'groceries.search','method' => 'GET']) !!}
            <div class="col-md-4">
                <input type="text" class="form-control search-wid" placeholder="Product" name="item" aria-describedby="basic-addon2">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info btn-block" id="search_btn"><i class="fa fa-search"></i></button>
            </div>
            {!! Form::close() !!}
            {!! Form::open(['route' => 'groceries.price.search','method' => 'GET']) !!}
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
        @forelse($categories as $category)
            <div id="{{$category->sub_category}}">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h3 class="text-center">{{$category->sub_category}}</h3>
                        <hr/>
                    </div>
                </div>
                <div class="row clearfix text-center">
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
        @empty
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h4 class="text-center">No Data Found !</h4>
            </div>
        @endforelse
    </div>
    <br/><br/>
@endsection
