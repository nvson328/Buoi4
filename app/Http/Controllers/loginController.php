<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    public function index(){
    	return view('login');
    }

    public function show(Request $request){
    	$credentials = $request->only('email','password');

    	if (Auth::attempt($credentials, $request->has('remember'))){
    		$request->session()->regenerate();

    		return redirect()->intended('posts');
    	}

    	return back()->withErrors([
    		'error' => 'Thất bại',
    	]);
    }
}
