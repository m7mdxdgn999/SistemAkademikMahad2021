<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginDosenController extends Controller
{
    public function Index(){
        return view('dosen.login');
    }

    
    public function Submit(Request $request){
        //validate from data
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
         ]);

         //Attemp to log  the user in
         if(Auth::guard('dosen')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
             //if successful, the redirect to thier  intended location
             return 'hello';
            // return dd(Auth::guard ('player')->user());
         }
         //if unsuccessfull, then redirect back to login with form  data
         return 'salah';

    }
}
