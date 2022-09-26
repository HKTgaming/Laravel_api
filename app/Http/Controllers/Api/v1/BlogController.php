<?php

namespace App\Http\Controllers\Api\v1;

use App\Blog;
use App\CategoryPost;
use Storage;
use File;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('category')->orderBy('blogs.id','DESC')->get();
        return view('layouts.blogs.index')->with(compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryPost::all();
        return view('layouts.blogs.add')->with(compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Blog();
        $post ->title = $request->title;
        $post ->short_desc = $request->short_desc;
        $post ->desc = $request->desc;
        $post ->post_category_id = $request->post_category_id;

        if($request['image']){
            $image = $request['image'];

            $ext = $image->getClientOriginalExtension();
            $name = time().''.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $post -> image = $name;
        }else{
            $post->image = 'default.jpg';
        }
        $post->save();
        return \Redirect::route('blogs.index')->with('status','Bạn đã thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
        $blog = Blog::find($blog);
        $category = CategoryPost::all();
        return view('layouts.blogs.edit')->with(compact('category','blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blog)
    {
        $post = Blog::find($blog);
        $post ->title = $request->title;
        $post ->short_desc = $request->short_desc;
        $post ->desc = $request->desc;
        $post ->post_category_id = $request->post_category_id;

        if($request['image']){
            unlink('public/upload/',$post->image);
            $image = $request['image'];

            $ext = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $post -> image = $name;
        }
        $post->save();
        return \Redirect::route('blogs.index')->with('status','Bạn đã cập nhật thành công');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog)
    {
        // $path = 'public/upload/';
        $blog = Blog::find($blog);
        // unlink($path.$blog->image);
        $blog->delete();
        return \Redirect::route('blogs.index')->with('status','Bạn đã Xóa thành công');
    }
}
