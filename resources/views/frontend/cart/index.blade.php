@extends('frontend.master')
@php
  $i=0;
@endphp
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
        @foreach(session('cart') as $id => $product)
            @php
                $find = \App\Product::find($id);
                if(!empty($find)){
                    $i++;
                }
            @endphp
        @endforeach
        @if(!empty(session('cart')) && $i>0)
        <div class="container-fluid">
            {!! Form::open(['id' =>'multiphase','class' =>'form-sample','route' => 'cart.store','method' => 'POST']) !!}

            <div id="phase1" class="phase_one">
                <div class="row table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr class="text-center">
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price (৳)</th>
                            <th>Quantity</th>
                            <th>Remove</th>
                            <th>Total (৳)</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $total = 0; @endphp
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $product)
                                @php
                                $find = \App\Product::find($id);
                                @endphp
                                @if(!empty($find))
                                @php
                                    $sub_total = $product['price'] * $product['quantity'];
                                    $total += $sub_total;
                                @endphp
                                <tr class="text-center">
                                    <td>
                                        <img src="{{asset('assets/images/products/'.$product['category'] .'/'.$product['image'])}}">
                                    </td>
                                    <td>
                                        <div class="product-title"><h4>{{$product['name']}}</h4></div>
                                        <input type="hidden" name="product_name[]" value="{{$product['name']}}"/>
                                    </td>
                                    <td>
                                        <div class="product-price" id="new_price_{{$product['id']}}">{{$product['price']}}.00</div>
                                        <input type="hidden" name="product_price[]" value="{{$product['price']}}"/>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="product_quantity_{{$product['id']}}" name="product_qty[]" value="{{$product['quantity']}}" min="1">
                                    </td>
                                    <td><button class="remove-product btn btn-danger btn-block btn-sm" onclick="window.location='{{route('remove_product', [$id])}}'">Remove</button></td>
                                    <td>
                                        <div class="" id="line_price_{{$product['id']}}">{{$sub_total}}.00</div>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        @endif
                        </tbody>
                        <tfoot>
                        <tr class="text-center">
                            <td colspan="4">
                                <div class="form-group">
                                    <label>Dhaka City Charge - ৳60</label>
                                    &nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="delivery1" class="" value="60" name="delivery">
                                </div>
                                <div class="form-group"> &nbsp;
                                    <label>Inter City Charge - ৳120</label>
                                    &nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="delivery2" class="" value="120" name="delivery">
                                </div>
                                <h4>Delivery Will Take Place withing 2 - 4 Days</h4>
                            </td>
                            <td>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <label>Subtotal</label>
                                            <br/><br/>
                                            <label>Shipping</label>
                                            <br/><br/>
                                            <label>Grand Total</label>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td>
                                <div class="totals-value" id="cart_subtotal">{{$total}}</div>
                                <input type="hidden" name="product_sub_total" id="product_sub_total" value="{{$total}}"/>
                                <br/>
                                <div class="totals-value" id="cart_shipping">0.00</div>
                                <br/>
                                <div class="totals-value" id="cart_total">{{$total}}</div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <button class="btn btn-info btn-sm" style="float: right" onclick="processPhase2()" title="continue">>></button>
            </div>
            <div id="phase2" style="display: none">
                <h3 class="text-center">Please Fill Out the Form to Proceed</h3>
                <div class="row" style="background-color: #2B2A2F; border-radius: 10px">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="page-title text-center"></h3>
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
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
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
                <button class="btn btn-info btn-sm" style="float: left" onclick="processPhase1()" title="Back"><<</button>
                <button class="btn btn-info btn-sm" style="float: right" onclick="submitForm()">Checkout</button>
            </div>
            {!! Form::close() !!}
        </div>
        <br/><br/>
        <div class="progress">
            <div class="progress-bar progress-bar-info" style="min-width: 20px;">0%</div>
        </div>
        @else
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="margin-top: 70px">
                    <button type="button" class="btn btn-danger btn-block"> Cart Is Empty</button>
                </div>
            </div>
        </div>
        @endif
    </div>
    <br/><br/><br/><br/>

    <script>
        @foreach(session('cart') as $id => $product)
        @php
            $find = \App\Product::find($id);
        @endphp
        @if(!empty($find))
        $(document).on('input', '#product_quantity_{{$product['id']}}', function (){
            let qty = $(this).val();
            let price = parseFloat($('#new_price_{{$product['id']}}').text());
            let lineprice = qty * price;
            $('#line_price_{{$product['id']}}').text(lineprice.toFixed(2));

            let subtotal = 0;
            let shipping = parseFloat($('#cart_shipping').text());
            @foreach(session('cart') as $id => $product)
                @php
                    $find = \App\Product::find($id);
                @endphp
                @if(!empty($find))
                subtotal += parseFloat($('#line_price_{{$product['id']}}').text());
                @endif
            @endforeach
            let total = shipping + subtotal;

            $('#cart_subtotal').text(subtotal.toFixed(2));
            $('#cart_total').text(total.toFixed(2));
        });
        @endif
        @endforeach
        $(document).on('click', '#delivery1', function (){
            $('#cart_shipping').text($(this).val());

            let subtotal = 0;
            let shipping = parseFloat($('#cart_shipping').text());
            @foreach(session('cart') as $id => $product)
                @php
                    $find = \App\Product::find($id);
                @endphp
                @if(!empty($find))
                subtotal += parseFloat($('#line_price_{{$product['id']}}').text());
                @endif
            @endforeach
            let total = shipping + subtotal;
            $('#cart_subtotal').text(subtotal.toFixed(2));
            $('#cart_total').text(total.toFixed(2));
        });
        $(document).on('click', '#delivery2', function (){
            $('#cart_shipping').text($(this).val());

            let subtotal = 0;
            let shipping = parseFloat($('#cart_shipping').text());
            @foreach(session('cart') as $id => $product)
                @php
                    $find = \App\Product::find($id);
                @endphp
                @if(!empty($find))
                subtotal += parseFloat($('#line_price_{{$product['id']}}').text());
                @endif
            @endforeach
            let total = shipping + subtotal;
            $('#cart_subtotal').text(subtotal.toFixed(2));
            $('#cart_total').text(total.toFixed(2));
        });
    </script>
    <script>
        function _(x){
            return document.getElementById(x);
        }
        function processPhase1(){
                _("phase1").style.display = "block";
                _("phase2").style.display = "none";
                $(".progress-bar").css("width", 0 + "%").text(0 + " %");
        }
        function processPhase2(){
            let subtotal = $('#cart_subtotal').text();
            let shipping = parseFloat($('#cart_shipping').text());
            if(subtotal.length > 0 && shipping > 0){
                _("phase1").style.display = "none";
                _("phase2").style.display = "block";
                _("product_sub_total").value = subtotal;
                $(".progress-bar").css("width", 50 + "%").text(50 + " %");
            } else {
                toastr.error("Please Select Delivery Method");
            }
        }
        function submitForm(){
            let name = _('name').value;
            let phone = _('phone').value;
            let address = _('address').value;
            if(name.length != 0 && phone.length != 0 && address.length != 0){
                $(".progress-bar").css("width", 100 + "%").text(100 + " %");
                _("multiphase").method = "post";
                _("multiphase").action = "{{route('cart.store')}}";
                _("multiphase").submit();
            }
            else{
                toastr.error("Please Fill All the field");
            }

        }
    </script>
@endsection
