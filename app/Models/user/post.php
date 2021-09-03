<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    public function tags() 
    {
        return $this -> belongsToMany(Tag::class, 'post_tag');
    }
}
