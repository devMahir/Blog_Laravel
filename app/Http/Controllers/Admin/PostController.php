<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'status' => 'required'
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
        $post -> body = $request -> body;
        $post -> image = $image_name;
        if ($postinfo==true) {
            $post -> status = true;
        }
        else{
            $post -> status = false;
        }
        $post -> status = true; */
        return $request->all();
        
        //$post -> save();

        //return redirect()->route('video.index')->with('successMsg', 'Video Catelog Successfully Saved');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
