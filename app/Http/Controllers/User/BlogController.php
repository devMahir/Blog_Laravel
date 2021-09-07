<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\user\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function post(Post $post)
    {
        return view('user.post', compact('post'));
    }
}
