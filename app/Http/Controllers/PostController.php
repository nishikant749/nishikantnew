<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    { 
    	$posts = Post::all();
    	return view('welcome',compact('posts'));
    }

    public function create()
    {
    	return view('createtask');
    }

    public function show(Post $post) //
    {
    	return view('show',compact('post'));
    }

    public function store()
    {
    	//dd(request()->all());
    	//create post

    	$this->validate(request(),[
    		'title' => 'required|max:20',
    		'body' => 'required'
    	]);

    	$post = new Post;
    	$post->title = request('title');
    	$post->body = request('body');


    	//store in database
    	$post->save();


    	//return view
    	return redirect('/');
    }
}
