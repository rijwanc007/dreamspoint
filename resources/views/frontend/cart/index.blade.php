@extends('frontend.master')
@section('title', 'Dream Point | Cart')
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
        <br/><br/><br/><br/>
        @if(!empty(session('cart')))
        <div class="container-fluid">
            {!! Form::open(['id' =>'multiphase','class' =>'form-sample','route' => 'cart.store','method' => 'POST']) !!}
            <div id="phase1">
                <div class="shopping-cart">
                    <div class="column-labels">
                        <label class="product-image">Image</label>
                        <label class="product-details">Product</label>
                        <label class="product-quantity">Price</label>
                        <label class="product-quantity">Quantity</label>
                        <label class="product-removal">Remove</label>
                        <label class="product-line-price">Total</label>
                    </div>
                    @php $total = 0; @endphp
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $product)
                            @php
                                $sub_total = $product['price'] * $product['quantity'];
                                $total += $sub_total;
                            @endphp
                            <div class="product">
                                <div class="product-image">
                                    <img src="{{asset('assets/images/products/'.$product['category'] .'/'.$product['image'])}}">
                                </div>
                                <div class="product-details">
                                    <div class="product-title">
                                        <h4>{{$product['name']}}</h4>
                                    </div>
                                    <input type="hidden" name="product_name[]" value="{{$product['name']}}"/>
                                </div>
                                <div class="product-price">{{$product['price']}}</div>
                                <div class="product-quantity">
                                    <input type="number" class="form-control" name="product_qty[]" value="{{$product['quantity']}}" min="1">
                                </div>
                                <div class="product-removal"><button class="remove-product" onclick="window.location='{{route('remove_product', [$id])}}'">Remove</button></div>
                                <div class="product-line-price">{{$sub_total}}</div>
                                <input type="hidden" name="product_price[]" value="{{$product['price']}}"/>
                            </div>
                        @endforeach
                    @endif
                    <div class="totals">
                        <div class="totals-item">
                            <label>Subtotal</label>
                            <div class="totals-value" id="cart-subtotal">{{$total}}</div>
                            <input type="hidden" name="product_sub_total" id="product_sub_total" value="{{$total}}"/>
                        </div>
                        <div class="totals-item">
                            <label>Shipping</label>
                            <div class="totals-value" id="cart-shipping">0.00</div>
                        </div>
                        <div class="totals-item totals-item-total">
                            <label>Grand Total</label>
                            <div class="totals-value" id="cart-total">{{$total}}</div>
                        </div>
                    </div>
                    <br/>
                    <button class="btn btn-info btn-sm" style="float: right" onclick="processPhase1()" title="continue">>></button>
                </div>
            </div>
            <div id="phase2" style="display: none">
                <div class="row" style="background-color: #2B2A2F; border-radius: 10px">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="page-title text-center">Please Fill Out the Form to Proceed</h3>
                            </div>
                            <div class="card-body">
                                <h2 class="text-info text-center">Cash On Delivery</h2>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" required>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                                </div>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <button class="btn btn-info btn-sm" style="float: right" onclick="submitForm()">Checkout</button>
            </div>
            {!! Form::close() !!}
        </div>
        <br/><br/>
        <div class="progress">
            <div class="progress-bar progress-bar-striped" style="min-width: 20px;">0%</div>
        </div>
        @else
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-danger btn-block"> Cart Is Empty</button>
                </div>
            </div>
        </div>
        @endif
    </div>
    <br/><br/><br/><br/>
    <script>
        function _(x){
            return document.getElementById(x);
        }
        function processPhase1(){
            let subtotal = $('#cart-subtotal').text();
            console.log(subtotal);
            if(subtotal.length > 0){
                _("phase1").style.display = "none";
                _("phase2").style.display = "block";
                _("product_sub_total").value = subtotal;
                $(".progress-bar").css("width", 50 + "%").text(50 + " %");
            } else {
                alert("You Are Not allowed to go next phase");
            }
        }
        function submitForm(){
            let name = _('name').value;
            let phone = _('phone').value;
            let email = _('email').value;
            let address = _('address').value;
            console.log(name);
            if(name.length != 0 && phone.length != 0 && email.length != 0 && address.length != 0){
                $(".progress-bar").css("width", 100 + "%").text(100 + " %");
                _("multiphase").method = "post";
                _("multiphase").action = "{{route('cart.store')}}";
                _("multiphase").submit();
            }
            else{
                alert("Please Fill All the field");
            }

        }
    </script>
    <script src="{{asset('assets/js/cart.js')}}"></script>
@endsection
