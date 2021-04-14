<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database\Factories\PostsFactory;
use Database\Seeders\PostsSeeder;
use App\Models\posts;

class PostsController extends Controller
{
    public function list()
    {
        # code...
        $posts = posts::all();
        return view('list',compact($posts,'posts'));
    }
}
