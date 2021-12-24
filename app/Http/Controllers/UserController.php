<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Hash;

class UserController extends Controller
{
    function login(Request $request){
       $userdata=User::where(['email'=>$request->email])->first();
      
       if(!$userdata||Hash::check($request->password,$userdata->password)){
           return "username or password is not matched";
           
       }else{
           $request->session()->put('user',$userdata);
           return redirect('/');
           
       }
        // $datainput=$request->input();
        // return $datainput;
        return $userdata;
    }
    
}
