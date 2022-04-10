<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function index(){

        $order=Order::orderBy('id','desc')->with('details')->get();
        return view('admin.order.index',['order'=>$order,'active'=>'order']);
    }
    public function paymentIndex(){
        return view('front.payment.index');
    }
}
