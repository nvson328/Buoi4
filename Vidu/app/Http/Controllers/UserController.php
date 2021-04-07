<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ListUsers(){
        $list = DB::table('users')->get();
        return view('list_user',['list' => $list]);
    }
    // public function SearchUser(){
    //     $rs = DB::table('users')->where('name','like','%c%')->get();
    //     dd($rs);
    // }
    public function info(Request $request){
        $rs = DB::table('users')->where('name','like','%'.$request->search.'%')
                                //->orWhere('email','like','%'.$request->search .'%')
                                ->get();
        //dd($rs);
        return view('result_search',compact('rs',$rs));
    }
}
