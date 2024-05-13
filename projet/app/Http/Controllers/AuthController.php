<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.signup');
    }
    public function registerPost(Request $request)
    {
        $user = new User();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->PPR = $request->PPR;
        $user->password = Hash::make($request->password);
 
        $user->save();
 
        return back()->with('success', 'Register successfully');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'PPR' => $request->PPR,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect('/fondation')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Email or Password or PPR');
    }
}   
