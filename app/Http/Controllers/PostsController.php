<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database\Factories\PostsFactory;
use Database\Seeders\PostsSeeder;
use App\Models\posts;

class PostsController extends Controller
{
    /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function list()
    {
        # code...
        $posts = posts::all();
        return view('list',compact($posts,'posts'));
    }
    public function add(){
        return view('add');
    }
    public function addprod(Request $request)
    {
        # code...
        $prod= new posts();
        $prod->slug= $request->input('slug');
        $prod->title = $request->input('title');
        $prod->save();
        return redirect()->route('list');
    }
        
    public function edit($id){
        $post = posts::query()->findOrFail($id);
        return view('edit',compact('post'));
    }
    /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function editprod( Request $request, $id){
        
        $slug = $request->input('slug');
        $title= $request->input('title');        
        $edit = posts::query()->find($id)->update([
            'slug'=> $slug,
            'title'=>$title,           
        ]);
        return redirect()->route('list');
       

    }
    public function delete($id){
        
        $del=posts::query()->find($id);
        $del->delete();
        return back()->withInput();
        
    }
}
