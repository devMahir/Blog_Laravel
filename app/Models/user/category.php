<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public function posts() 
    {
        return $this -> belongsToMany(Post::class, 'category_posts')->orderBy('created_at','DESC')->simplePaginate(3);
    }

    /* public function category ($slug)
    {
        return $category = category::where('slug', $slug)->get();
        
    } */

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
