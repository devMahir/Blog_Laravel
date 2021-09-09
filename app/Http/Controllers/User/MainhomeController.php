<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user\Post;

class MainhomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 1)->simplePaginate(2);
        return view('user.blog', compact('posts'));
    }
}
