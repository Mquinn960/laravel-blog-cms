<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function getIndex(){
        $posts = Post::orderBy('id','desc')->paginate(5);

        // return a view and pass in the above variable
        return view('pages.home')->withPosts($posts);
    }

    public function getArchive(){
        $posts = POST::paginate(10);
        return view('posts.archive')->withPosts($posts);
    }

    public function getSingle($slug){
        // fetch from database based on slug
        $post = Post::where('slug', '=', $slug)->first();

        // return the view and pass in the post object
        return view('posts.post')->withPost($post);
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.post')->withPost($post);
    }
}
