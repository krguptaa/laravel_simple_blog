<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;
    
class PostsController extends Controller
{


    public function __construct()
    {
        
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete','postgrid']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::latest();
        if(Auth::user()){
            $posts->where('user_id',Auth::user()->id);
        }

        // dd($posts);
        if(request('month')){
            $posts->filter(request(['month','year']));
        }
            
        $posts = $posts->get();


        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title'=> 'required',
            'body' => 'required'
            ]);

        Post::forceCreate([
            'title'=>request('title'),
            'body' => request('body'),
            'user_id'=>Auth::user()->id

            ]);

        return redirect('posts/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }


    /**
        @$GK
        DAte: 23rd Nov 2013
        For post list data using ajax list
    */

    public function postgrid(){
        return view('posts.postgrid');
    }

    public function ajaxlist(){
        $post = Post::query();
        return Datatables::of($post)
        ->addColumn('action', function ($post) {
                return '<a href="/posts/show/'.$post->id.'" class="btn btn-xs btn-success">View</a>';
            })
        ->make(true);
    }
}
