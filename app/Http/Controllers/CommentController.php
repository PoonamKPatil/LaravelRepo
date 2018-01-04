<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

use App\Post;

class CommentController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Post $post)
    {
    	$this->validate(request(),[
        	'comment' =>'required'
        	]);


    	$post->addcomment(request('comment'));

    	return back();
    }
}
