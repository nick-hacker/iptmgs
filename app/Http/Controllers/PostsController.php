<?php

namespace App\Http\Controllers;

use App\Post;
use App\Cartegory;
use App\Organization;

use Carbon\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();
        
        $archives = Post::archives();

        return view('posts.index', compact('posts', 'archives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizations = Organization::all();
        $categories = Cartegory::all();
        return view('posts.create', compact('organizations', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post)
    {
        //Validating the request
        $this->validate(request(), [
                'name_of_post' => 'required|unique:post|min:3',
                'description'  =>  'required'
            ]);
        /*$post = new Post();*/
        $post->name_of_post = $request->input('name_of_post');
        $post->description = $request->input('description');
        $post->post_number = $request->input('number_post');
        $post->cartegory_id = $request->input('cartegory_id');
        $post->org_id = $request->input('org_id');

        $post->save();

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
         $comment = \App\Comment::find($post->id);
         return dd($comment);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Cartegory::all();
        $organizations = Organization::all();
        return view('posts.edit', compact('organizations','categories','post'));     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {        
        $post->name_of_post = $request->input('name_of_post');
        $post->description = $request->input('description');
        $post->number_of_posts = $request->input('number_of_posts');

        $post->save();

        return redirect('posts');
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
