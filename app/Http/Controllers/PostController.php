<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Database\Factories\PostsFactory;
use Database\Seeders\PostsSeeder;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::with('categories')->get();
        // dd($posts);
         return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Category::query()->get();
        //dd($cate->name);
       
        return view('post.create',compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Post();
        $data->slug = $request->slug;
        $data->title = $request->title;
        $data->content = $request->content;
        $data->save();
        $last_insert_id = $data->id;
        $cate = $request->only('category');
        $post= Post::with('categories')->findOrFail($last_insert_id);
        $post->categories()->attach($cate);
        return redirect()-> route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = Category::query()->get();
        $rs = Post::query()->findOrFail($id);
        return view('post.edit',compact('rs','cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slug = $request->input('slug');
        $title= $request->input('title');   
        $content= $request->input('content');     
        $cate = $request->only('category');
        Post::query()->findOrFail($id)->update([
            'slug'=> $slug,
            'title'=>$title, 
            'content'=>$content,   
                 
        ]);
        $post= Post::with('categories')->findOrFail($id);
        $post->categories()->attach($cate);
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('post.index');

    }
}
