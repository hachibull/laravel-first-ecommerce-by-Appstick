<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    public function index(){
        $subcategory=SubCategory::orderBy('id','desc')->get();
        return view('admin.subCategory.index',['subcategory'=>$subcategory,'active'=>'SubCategory']);
    }
    public function create(){
        $category=Category::where(['status'=>true])->get();
        return view('admin.subCategory.create',['categories'=>$category]);
    }
    public function store(Request $request){
        //dd($request->all());
        $data['category_id']=$request->category_id;
        $data['name']=$request->name;
        $data['status']=$request->status=='on' ? true : false;

        $subcategory=SubCategory::create($data);
        if($subcategory ){
            toast('subcategory successfully created','success');
     
         } else{
            toast('something wrong','warning');
         }
           return redirect()->route('admin.sub_category.index');
       }
    }

