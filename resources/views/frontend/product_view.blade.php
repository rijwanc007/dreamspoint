@extends('frontend.master')
@section('title', 'Dream Point | Product')
@include('frontend.include.image_zoom')
@section('content')
    @php
        $product_size = explode(',',str_replace(str_split('[]""'),'',$product->size));
        $product_color = explode(',',str_replace(str_split('[]""'),'',$product->color));
    @endphp
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
                            <li class="dropdown menu-large">There is nothing to show</li>
                            <li><a href="{{route('frontend.men.cloth')}}">MEN </a></li>
                            <li><a href="{{route('frontend.women.cloth')}}">WOMEN </a></li>
                            <li><a href="{{route('frontend.kids.cloth')}}">BABY & KIDS </a></li>
                            <li><a href="{{route('frontend.groceries')}}">GROCERIES </a></li>
                            <li><a href="{{route('frontend.accessories')}}">ACCESSORIES </a></li>
                            <li><a href="{{route('frontend.offer_zone')}}">OFFERS ZONE </a></li>
                            <li class="cat-img-off"><img src="{{asset('assets/images/offers.png')}}" alt="off"></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-md-6 col-sm-6 col-xs-6 text-center">--}}
{{--                <h3 >{{$product->title}}<hr/></h3>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-sm-6 col-xs-6"></div>--}}
{{--        </div>--}}
        <br/><br/><br/><br/>
        <section class="mb-5">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h3 class="text-center">{{$product->title}}</h3>
                    <div class="row">
                        <div class="col-md-12"></div>
                        <div class="col-md-2"></div>
                        <div class="col-md-8"><img {{--id="myimage"--}} src="{{asset('assets/images/products/'.$product->category . '/'.$product->image)}}" width="100%"></div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row text-center">
                        <img src="{{asset('assets/images/icon/like.png')}}" id="" alt="pav" style="width: 12%;cursor: pointer" class="" data-id="{{$product->id}}" title="Add To Wishlist">
                        <a href="{{route('add-cart', [$product->id])}}">
                            <img src="{{asset('assets/images/icon/favorite-cart.png')}}" id="" style="width: 12%;cursor: pointer"  alt="bag" class="" title="Add To Cart">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="text-center">Description:</h3>
                    <div>{{$product->description}}</div>
                    <h3 class="text-center">Details</h3>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless">
                            <tbody>
                            <tr>
                                <td class="pl-0 w-25" scope="row"><strong>Product Code</strong></td>
                                <td>{{$product->product_code}}</td>
                            </tr>
                            <tr>
                                <td class="pl-0 w-25" scope="row"><strong>Price</strong></td>
                                <td><strike>{{$product->prev_price ? '৳'.$product->prev_price : ''}}</strike><div style="color: red;display: inline"> ৳{{$product->new_price}}</div></td>
                            </tr>
                            <tr>
                                <td class="pl-0 w-25" scope="row"><strong>Delivery</strong></td>
                                <td>Dhaka City<br/>Inter City</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive mb-2">
                        <table class="table table-sm table-borderless">
                            <tbody>
                            <tr>
                                <td class="text-center">Select size</td>
                                <td class="text-center">Select Color</td>
                            </tr>
                            <tr>
                                <td class="pl-0">
                                    @if($product->size != "null")
                                    @for($i = 0 ;$i<count($product_size); $i++)
                                            <div class="form-check form-check-inline pl-0">
                                                <input type="radio" class="form-check-input" id="size" name="size" value="{{$product_size[$i]}}" checked>
                                                <label class="form-check-label small text-uppercase card-link-secondary" for="small">{{$product_size[$i]}}</label>
                                            </div>
                                        @endfor
                                    @else
                                    <button class="btn btn-danger btn-sm btn-block">Not Available</button>
                                    @endif
                                </td>
                                <td>
                                    <div class="mt-1">
                                        @if($product->color != "null")
                                        @for($i = 0 ;$i<count($product_size); $i++)
                                            <div class="form-check form-check-inline pl-0">
                                                <input type="radio" class="form-check-input" id="color" name="color" value="{{$product_color[$i]}}" checked>
                                                <label class="form-check-label small text-uppercase card-link-secondary" for="small">{{$product_color[$i]}}</label>
                                            </div>
                                        @endfor
                                        @else
                                            <button class="btn btn-danger btn-sm btn-block">Not Available</button>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
