<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FileUploadController;
use App\Models\Trend_Fashion;

class TrendFashionController extends Controller
{
    public function index(){
        $trends=Trend_Fashion::orderby('id','desc')->get();
       
        return view('admin.trendy_fashion.index',['trends'=>$trends,'active'=>'Trendy']);
    }
    public function create(){
        return view('admin.trendy_fashion.create');
    }
    public function store(Request $request){
        //dd($request->all());
        if($request->trend_fashion_image){
            $data['trend_fashion_image']=app(FileUploadController::class)->fileUpload($request->trend_fashion_image,'images');
        }
        $data['trend_fashion_offer']=$request->trend_fashion_offer ? $request->trend_fashion_offer : 0;
        $data['status']=$request->status=='on' ? true : false;
        

        $treand = Trend_Fashion::create($data);
        if($treand ){
           toast('Brad successfully created','success');
   
        } else{
           toast('something wrong','warning');
   
        }
        return redirect()->route('admin.trend.index');
    }
public function edit($id){
    $trends=Trend_Fashion::where(['id'=>$id])->first();
    if($trends){
        return view('admin.trendy_fashion.edit',['trends'=>$trends]);
    }
}

public function update(Request $request){
    //dd($request->all());
    $data['trend_fashion_offer']=$request->trend_fashion_offer;
    $data['status'] = $request->status == 'on' ? true : false;
    if($request->trend_fashion_image){
        $data['trend_fashion_image']=app(FileUploadController::class)->fileUpload($request->trend_fashion_image,'images');
        $trends=Trend_Fashion::all()->first();
        if($trends){
            $trends->update($data);
            toast('trend successfully update','success');
        }
        return redirect()->route('admin.trend.index');
    }
}
    public function delete($id){
        $trends=Trend_Fashion::where(['id'=>$id])->first();
        if($trends){
            $trends->delete();
            return redirect()->route('admin.trend.index');
            toast('Trend_Fashion successfully delete','success');
        }
}
}
