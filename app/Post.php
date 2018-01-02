<?php

namespace App;


class Post extends Model
{
   public function comments()
   {
       return Post::hasMany(Comment::class);
   }
}
