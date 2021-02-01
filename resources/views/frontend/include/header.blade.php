@php
    $j =0;
    $i =0;
    foreach($wishlists as $wishlist){
    if(!empty($wishlist->product)){
    $j++;
    }
    }
@endphp
<div id="header">
    <div id="believe-nav">
        <div class="container">
            <div class="min-marg">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/images/logo-2.png')}}" class="dp_logo" alt="ft-logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" data-toggle="modal" data-target="#wishlist"><img src="{{asset('assets/images/icon/like.png')}}" alt="pav" class="wishlist" id="wishlist_header"> <span>{{$j}}</span></a></li>
                            <div class="modal fade" id="wishlist" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-center">
                                                Your Wish List
                                                <hr/>
                                            </h4>
                                        </div>
                                        <div class="modal-body table-responsive">
                                            @forelse($wishlists as $wishlist)
                                                @if(!empty($wishlist->product))
                                                    <div class="row">
                                                        <div class="col-md-3 col-sm-3 col-xs-3"><img src="{{asset('assets/images/products/'.$wishlist->product->category . '/'.$wishlist->product->image)}}" class="cart_img_header" style="width: 50%; border-radius: 50px;"></div>
                                                        <div class="col-md-3 col-sm-3 col-xs-3" id="cart_title" style="margin-top: 20px">{{$wishlist->product->title}}</div>
                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                            <a href="{{route('remove', [$wishlist->id])}}" class="">
                                                                <img src="{{asset('assets/images/icon/delete2.png')}}" id="remove" alt="bag" class="wihslist_modal_image remove" data-id="{{$wishlist->id}}" style="width: 50%;float: right; margin-top:10px;" title="Remove">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                            <a href="{{route('add-cart', [$wishlist->product->id])}}" class="">
                                                                <img src="{{asset('assets/images/icon/favorite-cart.png')}}" alt="bag" class="wihslist_modal_image" style="width: 50%" title="Add To Cart">
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endif
                                                <br/>
                                            @empty
                                                <div class="row text-center">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-6">No product available in wishlist</div>
                                                </div>
                                            @endforelse
                                        </div>
                                        <div class="modal-footer">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <li><a href="{{route('cart')}}"><img src="{{asset('assets/images/icon/favorite-cart.png')}}" alt="bag" class="wishlist">
                                    @if(!empty(session('cart')))
                                        @foreach(session('cart') as $id => $product)
                                            @php
                                                $find = \App\Product::find($id);
                                                if(!empty($find)){
                                                $i++;
                                                }
                                            @endphp
                                        @endforeach
                                        <span>{{$i}}</span>
                                    @else<span>0</span>@endif</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
