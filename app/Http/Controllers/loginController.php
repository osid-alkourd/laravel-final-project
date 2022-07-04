<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
   public function login(){
       return view('Login');
   }

   public function submit(Request $request){
    $validated = $request->validate([
                'email'=>'required|email' , 
                'password'=> 'required|min:8|max:15'
            ]);
        $email = $request->input('email');
        $password = $request->input('password');
        return "The Email " . $email . "And The Password " . $password;
           
   }
}
