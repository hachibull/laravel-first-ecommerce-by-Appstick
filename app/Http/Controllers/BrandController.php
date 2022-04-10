<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandModel;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BrandRequest;
use RealRashid\SweetAlert\Facades\Alert;


class BrandController extends Controller
{
   public function create(){
       return view('admin.brand.create');
   }
   public function store(Request $request)
   {
       //dd($request->all());
       app(BrandRequest::class);
       $data['name']=$request->name;
       $data['status']=$request->status=='on' ? true : false;
       if($request->image)
       {
           if(!file_exists(public_path('images')))
           {
            mkdir(public_path('images'),0777,true);
           }
           $image=$request->image;

           $name=$image->getClientOriginalName();
           $destination=public_path('images');
           $imageName=time().'_'.$name;
           $image->move($destination,$imageName);

           $data['image']='images/'.$imageName;
       }


     $brand = BrandModel::create($data);
     if($brand ){
        toast('Brad successfully created','success');

     } else{
        toast('something wrong','warning');

     }
       return redirect()->route('admin.brand.index');
   }
   public function index(){
       $brands=BrandModel::orderBy('id','desc')->get();
       return view('admin.brand.index',['brands'=>$brands,'active' => 'Brand']);
   }
   public function edit($id){
    $x=BrandModel::where(['id'=>$id])->first();
    if($x){
        return view('admin.brand.edit',['brands'=>$x]);
    }
    return redirect()->back();
}
public function update(Request $request){
    app(BrandRequest::class);

     //dd($request->all());
     $data['name'] = $request->name;
     $data['status'] = $request->status == 'on' ? true : false;

     if($request->image){

         if(!file_exists(public_path('images')))
         {
            mkdir(public_path('images'), 0777, true);
         }

         $image = $request->image;


         $name = $image->getClientOriginalName();
         $destination = public_path('images');
         $image->move($destination, $name);

         $data['image'] = 'images/'.$name;

     }

     $brand=BrandModel::where('id', $request->id)->first();

     if($brand->name==$request->name){
        $brand->update($data);
        return redirect()->route('admin.brand.index');
     }
     else{
        $existsBrand=BrandModel::where('name',$request->name)->exists();
        if($existsBrand){
            return redirect()->back();
        }
        else{
            $brand->update($data);
            return redirect()->route('admin.brand.index');
        }
        return redirect()->route('admin.brand.index');
     }
 }

public function show($id){
//dd($id);
$brand=BrandModel::where(['id'=>$id])->first();
if($brand){
    return view('admin.brand.show',['suhin'=> $brand]);
      }
   }
   public function delete($id){
       $brand=BrandModel::where(['id'=>$id])->first();
       if($brand){
           $brand->delete();
           return redirect()->route('admin.brand.index');
       }
   }
}
