<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use URL;
use Redirect;
use App\User;
use Illuminate\Support\Facades\Session;
use Exception;
use Illuminate\Support\Facades\Auth;
use Alert;


class LoginController extends Controller
{
    public function login(){
        if(auth()->user()){
            return redirect('/');
        }
        return view('admin.pages.login');
    }

    public function loginCheck(Request $request){
        try {
            $user = User::where(['phone' => $request->phone, 'password' => md5($request->password)])->first();

            if($user){
                Auth::login($user);
                return redirect('/');
            }
            else{
                Alert::error('Sorry', 'Wrong email or password.');
                return redirect()->back();
            }
        } catch (Exception $ex) {
            dd($ex);
        }
    }



    public function logout(){
        if(auth()->user()){
            Auth::logout();
            return redirect('/login');
        }
    }

    public function logoutCustomer(){
        if(auth()->user()){
            Auth::logout();
            return redirect('/');
        }
    }
}
