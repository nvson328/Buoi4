<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function trangchu(){
        return view('page.main');
    }
    public function home(){
        return view('page.main');
    }
    public function collection(){
        return view('page.collection');
    }
    public function contact(){
        return view('page.contact');
    }
    public function shoes(){
        return view('page.shoes');
    }
    public function racingboots(){
        return view('page.racingboots');
    }
}
