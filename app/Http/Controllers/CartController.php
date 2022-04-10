<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Shipping;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){
        $items=Cart::where(['user_id'=>Auth::id()])->get();
        return view('front.cart.index',['items'=>$items]);

    }
   public function addcart(Request $request,$id=null){
        //dd($id);
        $existsCart=Cart::where(['user_id'=>Auth::id(),'product_id'=>$id])->exists();
        if(! $existsCart){
            $data['user_id']=Auth::id();
            $data['product_id']=$id;
            $data['quantity']=$request->quantity ? $request->quantity : 1;

            Cart::create($data);

        }
        return redirect()->back();
     }
     public function checkout(){
         return view('front.cart.checkout');
     }

     public function shipping(Request $request)
     {
         try{

            $data['name'] = $request->name ;
            $data['email'] = $request->email;
            $data['phone'] =$request->phone;
            $data['country'] =$request->country;
            $data['street_address'] = $request->street_address;
            $data['city'] =$request->city;
            $data['state'] = $request->state;
            $data['zip_code'] = $request->zip_code;


            DB::beginTransaction();

            $shipping = Shipping::create($data);

            $orderData['user_id'] = Auth::user()->id;
            $orderData['shipping_id'] = $shipping->id;
            $orderData['tax'] = 5;
            $orderData['total_tax'] = totalTax(cartAmount(), $orderData['tax']);
            $orderData['total_cost'] = cartAmount();
        $orderData['shipping_cost'] = 50;
            $orderData['total_cost'] = totalOrder(cartAmount(), totalTax(cartAmount(), 5),50);

            $order = Order::create($orderData);

            session()->put('order_id', $order->id);

            $items = Cart::where(['user_id' => Auth::id()])->get();
            if(isset($items[0])){

                foreach($items as $item)
                {
                    $orderDetailsData['order_id'] = $order->id;
                    $orderDetailsData['product_id'] = $item->product_id;
                    $orderDetailsData['quantity'] = $item->quantity;
                    $orderDetailsData['price'] = $item->product->price;
                    $orderDetailsData['total_price'] = $item->quantity * $item->product->price;

                    OrderDetails::create($orderDetailsData);
                }
            }

            Cart::where(['user_id' => $order->user_id])->delete();
           DB::commit();

            //dd('payment');
            return redirect()->route('payment.index');

         }catch(Exception $e){
// dd($e->getMessage());
            DB::rollback();
            return redirect()->route('cart.index');
         }


     }

}
