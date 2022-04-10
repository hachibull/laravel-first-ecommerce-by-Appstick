<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $category=Category::orderBy('id','desc')->get();
        return view('admin.category.index',['category'=>$category,'active' => 'Category']);
    }
    public function create(){
        return view('admin.category.create');
    }
        public function store(Request $request){
            //dd($request->all());
                $data['name']=$request->name;

                if($request->image){
                    $data['image']=app(FileUploadController::class)->FileUpload($request->image,'Images');//FileUploadController calling
                }
                if($request->icon){
                    $data['icon']=app(FileUploadController::class)->FileUpload($request->icon,'Images');//FileUploadController calling
                }
                $data['status']=$request->status=='on' ? true : false;
                $data['top_category']=$request->top_category=='on' ? true : false;
                $data['big_menu']=$request->big_menu=='on' ? true : false;
               
            
                $category = Category::create($data);
                if($category){
                   toast('category successfully created','success');
            
                } else{
                   toast('something wrong','warning');
                }
                  return redirect()->route('admin.category.index');
              }
              public function delete($id){
                $category=Category::where(['id'=>$id])->first();
                if($category){
                    $category->delete();
                    return redirect()->route('admin.category.index');
                    toast('category successfully delete','success');
                }
            }
}
