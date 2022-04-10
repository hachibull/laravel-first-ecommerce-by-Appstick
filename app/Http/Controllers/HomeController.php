<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandModel;
use App\Models\Discount;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

use App\Models\Trend_Fashion;

class HomeController extends Controller
{
    public function home(){
        $x=BrandModel::where('status',true)->get();

        $discounts=Discount::all()->first();

        $info['category'] = Category::where(['status' => true])->with('subcategory')->get();
       $info['top_category']=Category::where(['top_category'=>true])->with('subcategory')->get();
//products
       $info['featured_product']=Product::where(['featured_product'=>true,'status' => true])->with('category')->get();

        $trends=Trend_Fashion::where('status',true)->get();
// dd( $info['category']);
        $sliders=Slider::where('status',true)->get();

        return view('front.layouts.index',['info' => $info, 'brands' => $x,'discounts' => $discounts, 'trends'=> $trends,'sliders'=>$sliders,'page'=>'home']);



    }
}
