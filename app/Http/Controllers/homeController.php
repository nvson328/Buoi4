<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function index(){
    	//  if(!Auth::check()){
    	// 	return redirect()->intended('login');
    	// }
    	$user = Auth::user();
        return view('index', compact('user'));
    }

    public function logout(Request $request){
    	Auth::logout();

    	$request->session()->invalidate();
    	$request->session()->regenerateToken();

    	return redirect()->intended('login');
    }
}
