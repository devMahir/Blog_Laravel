<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\carbon;
use Illuminate\Support\Str;
use App\Models\user\Post;
use App\Models\user\Post_tag;
use App\Models\user\Tag;
use App\Models\user\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();

        $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'slug' => 'required',
            'text' => 'required'
        ]);
        $postinfo = $request->status;
        $image = $request->file('image');
        $slug_img = str::of($request->title)->slug('_');

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $image_name = $slug_img.'_'.$currentDate.'_'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/PostImage')) {
                mkdir('uploads/PostImage',007,true);
            }
            $image->move('uploads/PostImage',$image_name);
        }else {
            $image_name = 'default.png';
        }

        $post = new Post();
        $post -> title = $request -> title;
        $post -> sub_title = $request -> sub_title;
        $post -> slug = $request -> slug;
        $post -> body = $request -> text;
        $post -> image = $image_name;
        if ($postinfo==true) {
            $post -> status = true;
        }
        else{
            $post -> status = false;
        }
        $post -> save();
        $post -> tags() -> sync($request -> tags);
        $post -> categories() -> sync($request -> categories);

        return redirect()->route('post.index')->with('successMsg', 'Post Successfully Posted');
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
        $post = Post::with('tags', 'categories')->where('id', $id)->first();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.edit',compact('post', 'tags', 'categories'));
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
        $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'slug' => 'required',
            'text' => 'required'
        ]);
        $postinfo = $request->status;
        $image = $request->file('image');
        $slug_img = str::of($request->title)->slug('_');
        $post = Post::find($id);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $image_name = $slug_img.'_'.$currentDate.'_'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/PostImage')) {
                mkdir('uploads/PostImage',007,true);
            }
            unlink('uploads/slider/'.$post->image);
            $image->move('uploads/PostImage',$image_name);
        }else {
            $image_name = $post->image;
        }
        $post -> title = $request -> title;
        $post -> sub_title = $request -> sub_title;
        $post -> slug = $request -> slug;
        $post -> body = $request -> text;
        $post -> image = $image_name;
        if ($postinfo==true) {
            $post -> status = true;
        }
        else{
            $post -> status = false;
        }
        
        $post -> save();
        $post -> tags() -> sync($request -> tags);
        $post -> categories() -> sync($request -> categories);
        return redirect()->route('post.index')->with('successMsg', 'Post Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post -> delete();
        return redirect()->route('post.index')->with('successMsg', 'Post Successfully Deleted');
    }
}
