<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $product_sub_total = 0;
        for($i=0;$i<count($request->product_qty) ;$i++){
            $product_sub_total += (($request->product_price[$i]) * ($request->product_qty[$i]));
        }
        Order::create([
            'product_name'=>json_encode($request->product_name),
            'product_qty'=>json_encode($request->product_qty),
            'product_price'=>json_encode($request->product_price),
            'product_sub_total'=>$product_sub_total,
            'delivery'=>$request->delivery,
            'status'=>'pending',
            'customer_name'=>$request->name,
            'customer_phone'=>$request->phone,
            'customer_email'=>$request->email,
            'customer_address'=>$request->address,
        ]);
        $request->session()->forget('cart');
        Session::flash('success', 'Your order is successfully placed');
        return redirect()->route('landing_page');
    }
    public function cart(){
        return view('frontend.cart.index');
    }
    public function addToCart(Product $product){
        $cart =  session()->get('cart');
        if (!$cart){
            $cart = [$product->id => $this->sessionData($product)];
            return $this->setSessionAndReturnResponse($cart);
        }
        if (isset($cart[$product->id])){
            $cart[$product->id]['quantity']++;
            return $this->setSessionAndReturnResponse($cart);
        }
        $cart[$product->id] = $this->sessionData($product);
        return $this->setSessionAndReturnResponse($cart);
    }
    protected function sessionData(Product $product){

        return [
            'id' => $product->id,
            'image' => $product->image,
            'code' => $product->product_code,
            'name' => $product->title,
            'category' => $product->category,
            'sub_category' => $product->sub_category,
            'price' => $product->new_price,
            'quantity' => 1,
        ];
    }
    protected function setSessionAndReturnResponse($cart){
        session()->put('cart', $cart);
        Session::flash('success','Added To Cart');
        return redirect()->back();
    }
    public function removeFromCart($id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        Session::flash('success','Product Removed from Cart');
        return redirect()->back();
    }
}
