<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use App\Comment;

class CommentsController extends Controller
{
    
    public function store(Post $post){

    //	dd(request()); 
    	Comment::forceCreate([
    		'post_id' => $post->id,
    		'user_id'=>Auth::user()->id,
    		'body' => request('body')
    		]);
    	return back();

    }

} 
