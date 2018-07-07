<?php

namespace App\Http\Controllers;

use App\posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
       $this->middleware('auth')->except(['index','show']);
     }


    public function index()
    {
      $posts = posts::all();

        return view('index')->with(compact('posts'));
    }


        /**
         * Display the specified resource.
         *
         * @param  \App\posts  $posts
         * @return \Illuminate\Http\Response
         */
        public function show(posts $post)
        {
            return view('show')->with(compact('post'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $post = new posts;
        $post->title = $request->input('title');
        $post->manchet = $request->input('manchet');
        $post->body = $request->input('body');
        $post->user_id = auth()->id();
        $post->save();
        return redirect('/');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(posts $posts)
    {
        //
    }
}
