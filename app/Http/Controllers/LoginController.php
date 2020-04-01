<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Users;
class LoginController extends Controller
{
    public function login(){
        return view('/login');
    }
    public function logindo(){
    	$post=request()->except('_token');
    	//dd($post);
    	$adminuser=Users::where('admin_name',$post['admin_name'])->first();
    	//dd($adminuser);
    	if(!$adminuser){
    		//return redirect('/login')->with('msg','用户名或密码错误');
    		 echo '<script>alert("账户密码错误");window.location.href="/login";</script>';die;
    	}
    	//dd(123);
        if (isset($post['rember'])) {
            Cookie::queue('adminuser',$adminuser,7*24*60);
        }
    	session(['adminuser'=>$adminuser]);
    	return redirect('/property/create');
    }
}
