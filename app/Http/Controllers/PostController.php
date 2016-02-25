<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function show() 
    {
    	$posts = Post::orderBy('created_at', 'desc')->take(5)->get();

    	return view('index', ['posts' => $posts]);
    }

    public function showAll() 
    {
    	$posts = Post::orderBy('created_at', 'desc')->paginate(20);

    	return view('admin.posts.index', ['posts' => $posts]);
    }

    public function create() 
    {
    	return view('admin.posts.create');
    }

    public function store(Request $request) 
    {
    	$title = $request->input('title');
    	$content = $request->input('content');

   		if ( empty($title) || empty($content) ) {
   			abort(500, 'Error with passing the model data from the form.');
   		}

   		$newPost = new Post;
   		$newPost->title = $title;
   		$newPost->content = $content;

   		$newPost->save();

   		return redirect()->action('PostController@showAll');
    }

    public function delete($id) 
    {
    	Post::destroy($id);

    	return redirect()->action('PostController@showAll');
    }

    public function get($id) 
    {
    	return view('post', ['post' => Post::find($id)]);
    }
}
