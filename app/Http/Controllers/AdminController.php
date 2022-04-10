<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function index(){
       return view('admin.main');
   }
   public function login(){
       return view('admin.login');
   }
   public function loginCheck(Request $request){
       //dd($request->all());
       //$rem_me = $request->remember_me && $request->remember_me == 1 ?? true;
       //if(Auth::attempt(['email'=>$request->email,'password'=>$request->password, $rem_me])){


       if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
           if(Auth::user()->role==1){
            return redirect()->route('admin.index');
           }elseif(Auth::user()->role==0){
            return redirect()->route('front.main');
           }else{
            return redirect()->route('admin.login');
           }
       }else{
           
        return redirect()->back();
       }

   }
   public function logout(){
       Auth::logout();
       return redirect()->route('admin.login');

   }
   public function signup(){
       return view('admin.signUp');
   }
   public function UserRegistration(Request $request){
       //dd($request->all());
       $data['name'] = $request->name;
       $data['email'] = $request->email;
       $data['password'] = Hash::make($request->password);

       $user = User::create($data);

       return redirect()->route('admin.login');

   }

}
