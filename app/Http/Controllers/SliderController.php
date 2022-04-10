<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Http\Controllers\FileUploadController;
use RealRashid\SweetAlert\Facades\Alert;

class SliderController extends Controller
{
   public function index(){
    $slider=Slider::orderBy('id','desc')->get();
    return view('admin.slider.index',['sliders'=>$slider,'active' => 'Slider']);
   }
   public function create(){
       return view('admin.slider.create');
   }
  public function store(Request $request){
//dd($request->all());
    if($request->background_image){
        $data['background_image']=fileUpload($request->background_image,path_slider_image());//helpers calling
    }
    if($request->banner){
        $data['banner']=app(FileUploadController::class)->fileUpload($request->banner,'SliderImages');//FileUploadController calling
    }
    $data['status']=$request->status=='on' ? true : false;
    $data['heading1']=$request->heading1;
    $data['heading2']=$request->heading2;
    $data['title']=$request->title;

    $slider = Slider::create($data);
    if($slider ){
       toast('slider successfully created','success');

    } else{
       toast('something wrong','warning');
    }
      return redirect()->route('admin.slider.index');
  }
  public function delete($id){
    $slider=Slider::where(['id'=>$id])->first();
    if($slider){
        $slider->delete();
        return redirect()->route('admin.slider.index');
        toast('slider successfully delete','success');
    }
}
public function edit($id){
    $slider=Slider::where(['id'=>$id])->first();
    return view('admin.slider.edit',['slider'=>$slider]);
   }
   public function update(Request $request){
        //dd($request->all());


        if($request->background_image){
            $data['background_image']=app(FileUploadController::class)->FileUpload($request->background_image,'SliderImages');
        }
        if($request->banner){
            $data['banner']=app(FileUploadController::class)->FileUpload($request->banner,'SliderImages');
        }
        $data['status']=$request->status=='on' ? true : false;
        $data['heading1']=$request->heading1;
        $data['heading2']=$request->heading2;
        $data['title']=$request->title;
     // dd($data);

        $slider=Slider::where('id', $request->id)->first();
        if($slider){
            $slider->update($data);
            toast('slider successfully update','success');
        }
        return redirect()->route('admin.slider.index');
    }

}
