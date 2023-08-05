<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Usercontroller extends Controller
{
    function create(Request $request){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'repassword'=>'required|min:5|max:30|same:password',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->password=\Hash::make($request->password);
        $save = $user->save();

        if($save){
            return redirect()->back()->with('success','Your are now registered succesfully');
        }else{
            return redirect()->back()->with('fail','Something went worng, failed to register');

        }
    }
    function check(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|max:30',
        ]);
        $creds = $request->only('email','password');
        if(Auth::guard('web')->attempt($creds)){
            return redirect()->route('user.home');
        }else{
            return redirect()->route('user.login')->with('fail','Incorrect Credentials');
        }
    }

    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
