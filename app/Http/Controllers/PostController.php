<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        $posts = Post::latest()
            ->filter(request(['month','year']))
            ->get();
    	/*$posts = Post::latest();

        $year = request('year');

        $month = Carbon::parse(request('month'))->month;

        if($month && $year )
        {
            $posts = Post::whereMonth('created_at','=',$month)
                           ->whereYear('created_at','=', $year);
        }

        $posts = $posts->get();*/
        
        $archives = Post::selectRaw('year(created_at) year,
            monthname(created_at) month,
            count(*) publishedPosts')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get();

    	return view('posts.index',compact('posts','archives'));
    }

    public function show(Post $post)
    {
    	return view('posts.show',compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(),[
        	'title' => 'required',
        	'body' =>'required'
        	]);

    	POST::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()

            ]);

    	return redirect('/');
    }
}
