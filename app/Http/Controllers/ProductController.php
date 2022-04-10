<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index(){
        $product=Product::orderBy('id','desc')->get();
        return view('admin.product.index',['product'=>$product,'active'=>'product']);
    }
    public function create(){
        $categories = Category::get();
        $sub_categories=SubCategory::get();
        return view('admin.product.create',['categories' =>$categories,'sub_categories'=>$sub_categories]);
    }
    public function subcategory(Request $request){
        $subcategories=SubCategory::where('category_id',$request->category_id)->get();
        return json_encode($subcategories);
    }
    public function store(Request $request){
        //d($request->all());
        $data['category_id']=$request->category_id;
        $data['sub_category_id']=$request->sub_category_id;

        $data['name']=$request->name;
        $data['description']=$request->description;
        $data['price']=$request->price;
        $data['details']=$request->details;
        $data['quantity']=$request->quantity;
        $data['discount']=$request->discount;

                if($request->image1){

                    $data['image1'] = fileUpload($request->image1,path_product_image());//helpers calling
                }
                if($request->image1){

                    $data['image2'] = fileUpload($request->image2,path_product_image());//helpers calling
                }
                if($request->image1){

                    $data['image3'] = fileUpload($request->image3,path_product_image());//helpers calling
                }
                if($request->image1){

                    $data['image4'] =  fileUpload($request->image4 , path_product_image());//helpers calling
                }

                $data['featured_product']=$request->featured_product=='on' ? true : false;
                $data['new_product']=$request->new_product=='on' ? true : false;
                $data['best_selling']=$request->best_selling=='on' ? true : false;
                $data['new_arrival']=$request->new_arrival=='on' ? true : false;
                $data['status']=$request->status=='on' ? true : false;


                $product = Product::create($data);
                if($product ){
                   toast('product successfully created','success');

                } else{
                   toast('something wrong','warning');
                }
                  return redirect()->route('admin.product.index');
              }
              public function delete($id){
                $product=Product::where(['id'=>$id])->first();
                if($product){
                    $product->delete();
                    return redirect()->route('admin.product.index');
                    toast('product successfully delete','success');
                }
            }


 public function sendMail(){
        $user=User::where(['id',Auth::id()])->first();


        $userName = $user->name;
        $userEmail = $user->email;
        $mailTemplate = 'mail_template';

        $companyName = "Appstick";
        $subject = __('verify email | :companyName', ['companyName' => $companyName]);

        $data['data'] = $user;
        $data['otp'] = randomNumber(6);

        return app(MailService::class)->send($mailTemplate, $data, $userEmail, $userName, $subject);

     }
}
