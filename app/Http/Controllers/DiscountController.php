<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Auth;


class DiscountController extends Controller
{

    private $fileUploadController;

    public function __construect(FileUploadController $fileUploadController)
    {
        $this->fileUploadController = $fileUploadController;
    }
    
    public function index(){
        
        $discounts=Discount::orderby('id', 'desc')->first();
        return view('admin.discount.index',['discounts'=> $discounts,'active'=>'Discount']);
    }
    public function create(){
       return view('admin.discount.create');
    }
    public function store(Request $request){  
        //dd($request->all());     

        if($request->bigoffer_image){
            $data['bigoffer_image'] = app(FileUploadController::class)->fileUpload($request->bigoffer_image, 'images');
        }
        if($request->small_offer_top_image){
            $data['small_offer_top_image'] = app(FileUploadController::class)->fileUpload($request->small_offer_top_image, 'images');
        }
        if($request->small_offer_bottom_image){
            $data['small_offer_bottom_image'] = app(FileUploadController::class)->fileUpload($request->small_offer_bottom_image, 'images');
        }

        $data['big_offer'] = $request->big_offer ? $request->big_offer : 0;
        $data['small_offer_top'] = $request->small_offer_top ? $request->small_offer_top : 0;
        $data['small_offer_bottom'] = $request->small_offer_bottom ? $request->small_offer_bottom : 0;
        $Discount = Discount::first();
        
        if($Discount){
            $Discount->update($data);
            toast('Offer succesfully updated', 'success');

        } else{
            $Discount=Discount::create($data);
            toast('Offer succesfully created', 'success');

        }
        
        return redirect()->route('admin.discount.index');
    }
    public function edit($id){
        $discount=Discount::where(['id'=>$id])->first();
        if($discount){
            return view('admin.discount.edit',['discount'=>$discount]);
        }
        return redirect()->back();
    }
    public function update(Request $request){
        //dd($request->all());
        $data['big_offer']=$request->big_offer;
        $data['small_offer_top']=$request->small_offer_top;
        $data['small_offer_bottom']=$request->small_offer_bottom;
        if($request->bigoffer_image){
            $data['bigoffer_image']=app(FileUploadController::class)->fileUpload($request->bigoffer_image,'images');
        }
        if($request->small_offer_top_image){
            $data['small_offer_top_image']=app(FileUploadController::class)->fileUpload($request->small_offer_top_image,'images');
        }
        if($request->small_offer_bottom_image){
            $data['small_offer_bottom_image']=app(FileUploadController::class)->fileUpload($request->small_offer_bottom_image,'images');
        }
        $discount=Discount::all()->first();
        if($discount){
            $discount->update($data);
            toast('offer successfully update','success');
        }
        return redirect()->route('admin.discount.index');
    }
    public function delete($id){
        $discount=Discount::where(['id'=>$id])->first();
        if($discount){
            $discount->delete();
            return redirect()->route('admin.discount.index');
            toast('offer successfully delete','success');
        }
        
    }
  
}
