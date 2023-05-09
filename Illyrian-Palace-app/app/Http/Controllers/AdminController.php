<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    function login(){
        return view('login');
    }
    function check_login(Request $request){
         $request->validate([
            'username'=>'required',
            'password'=>'required',
         ]);
         $admin=Admin::where(['username'=>$request->username,'password'=>sha1($request->password)])
         ->count();
         if($admin>0){
            $adminData=Admin::where(['username'=>$request->username,'password'=>sha1($request->password)])
         ->get();
         session(['adminData'=>$adminData]);
         return redirect('admin');
         }else{
            return redirect('admin/login')->with('msg','username or password is invalid');
         }
    }

    function logout(){
        session()->forget(['adminData']);
        return redirect('admin/login');
    }
}
