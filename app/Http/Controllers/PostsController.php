<?php

namespace App\Http\Controllers;

class PostsController extends Controller {

    public function getPosts() {
        return view('pages.posts');
    }

}
