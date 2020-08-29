<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query();
        $posts = $posts->searchable()
                       ->paginate(2)
                       ->appends($posts->getAppendableParameters())
        ;

        return view('blog.index', ['posts' => $posts]);
    }
}
