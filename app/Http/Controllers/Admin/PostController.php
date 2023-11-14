<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StorePostRequest;
use App\Http\Requests\Admin\Post\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->where('status', '=', 1)->get();
        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->all();
        
        if($file = $request->file('thumbnail'))
        {
            $destinationPath = ('storage/images/posts');
            $imgP = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $imgP); 
            $data['thumbnail'] = $imgP;
        } else {
            $data['thumbnail'] = '';
        }

        Post::create($data);    

        return redirect()->route('admin.posts.index')->with('success', 'Post Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::latest()->where('status', '=', 1)->get();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->all();

        if($file = $request->file('thumbnail'))
        {
            $destinationPath = ('storage/images/posts');
            $imgP = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $imgP); 
            $data['thumbnail'] = $imgP;
        }         

        $post->update($data);
        return redirect()->route('admin.posts.index')->with('success', 'Post Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Deleted sussussfully');
    }
}
