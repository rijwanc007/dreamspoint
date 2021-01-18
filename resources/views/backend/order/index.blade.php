@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">Orders<hr/></h2><br/>
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th> S/L</th>
                                    <th>Date</th>
                                    <th>Customer Name</th>
                                    <th>Email</th>
                                    <th>Products</th>
                                    <th>Sub-Total</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($orders as $order)
                                    <tr class="text-center">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ date('d-m-Y', strtotime($order->created_at))}}</td>
                                        <td>{{$order->customer_name}}</td>
                                        <td>{{$order->customer_email}}</td>
                                        <td>
                                            @foreach(json_decode($order->product_name) as $product)
                                                [ {{$product}} ]
                                            @endforeach
                                        </td>
                                        <td>{{$order->product_sub_total}} /-</td>
                                        <td>{{$order->status}}</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-block" onclick="window.location='{{route('order.show',$order->id)}}'" data-toggle="tooltip" title="View Order">Show</button>
                                            <button type="button" class="btn btn-success btn-block" onclick="window.location='{{route('order.delivered',$order->id)}}'" data-toggle="tooltip" title="Delivered">Delivered</button>
                                            <button type="button" class="btn btn-dark btn-block" onclick="window.location='{{route('order.returned',$order->id)}}'" data-toggle="tooltip" title="Returned">Returned</button>
                                            <button type="button" class="btn btn-danger btn-block" onclick="window.location='{{route('order.canceled',$order->id)}}'" data-toggle="tooltip" title="Canceled">Canceled</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-info">{{'No Orders Created Yet'}}</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
