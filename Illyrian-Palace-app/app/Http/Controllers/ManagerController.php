<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manager;

class ManagerController extends Controller
{
    function login(){
        return view('login');
    }
    function check_login(Request $request){
         $request->validate([
            'username'=>'required',
            'password'=>'required',
         ]);
         $manager=Manager::where(['username'=>$request->username,'password'=>sha1($request->password)])
         ->count();
         if($manager>0){
            $managerData=Manager::where(['username'=>$request->username,'password'=>sha1($request->password)])
         ->get();
         session(['managerData'=>$managerData]);
         return redirect('manager');
         }else{
            return redirect('manager/login')->with('msg','username or password is invalid');
         }
    }

    function logout(){
        session()->forget(['managerData']);
        return redirect('manager/loginm');
    }
}
