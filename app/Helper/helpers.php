<?php
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

function fileUpload($image, $path = null)
    {

        $image_path = $path ? $path :'images';

        if(!file_exists(public_path($image_path))){
            mkdir(public_path($image_path),0777,true);
        }

        $name=$image->getClientOriginalName();
        $destination=public_path($image_path );
        $imageName=time().'_'.$name;
        $image->move($destination, $imageName);

        return $image_path.'/'. $imageName;
    }

    function path_slider_image(){
        return 'images/slider';
    }

    function path_product_image(){
        return 'images/product';
    }

function cartCount(){
    return Cart::where(['user_id'=>Auth::id()])->count();
}
function cartAmount(){
    $items=Cart::where(['user_id'=>Auth::id()])->get();

    $amount=0;
    if(isset($items[0])){
        foreach($items as $items){
            if($items->product){
                $amount +=$items->product->price * $items->quantity;
            }
        }
        return $amount;
    }
}

function totalTax($productPrice, $tax){
return ((float)$productPrice * (float)$tax)/100;
}

function totalOrder($productPrice, $tax, $shippingCost){
    return (float)$productPrice + (float)$tax + (float)$shippingCost ;
}



function randomMixString($a = 10)
{
    $x = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $c = strlen($x) - 1;
    $z = '';
    for ($i = 0; $i < $a; $i++) {
        $y = rand(0, $c);
        $z .= substr($x, $y, 1);
    }
    return $z;
}

//************************random number ****************

function randomNumber($a = 10)
{
    $x = '0123456789';
    $c = strlen($x) - 1;
    $z = '';
    for ($i = 0; $i < $a; $i++) {
        $y = rand(0, $c);
        $z .= substr($x, $y, 1);//z=z*
    }
    return $z;
}


function randomString($a = 10)
{
    $x = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $c = strlen($x) - 1;
    $z = '';
    for ($i = 0; $i < $a - 2; $i++) {
        $y = rand(0, $c);
        $z .= substr($x, $y, 1);//z=z*
    }
    return 'FS' . $z;
}




/*function itemDelete(){
    $items=Cart::where(['user_id'=>Auth::id()])->first();
    if($items){
        $items->delete();
        return redirect()->route('cart.index');
    }
}
*/








