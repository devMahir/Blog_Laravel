<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user\Post;
use App\Models\user\Tag;
use App\Models\user\Category;

class MainhomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 1)->simplePaginate(3);
        return view('user.blog', compact('posts'));
    }

    public function tag (Tag $tag)
    {
        $posts = $tag->posts();
        return view('user.blog', compact('posts'));
    }

    public function category (Category $category)
    {
        $posts = $category->posts();
        return view('user.blog', compact('posts'));
    }
}
