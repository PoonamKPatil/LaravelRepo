<?php

namespace App;

use App\User;
use Carbon\Carbon;

class Post extends Model
{
   public function comments()
   {
       return $this->hasMany(Comment::class);
   }

   public function addComment($body)
   {
   	    $this->comments()->create(['body'=>$body,'user_id'=>auth()->id()]);

   		/*Comment::create([

    			"body" => $body,
    			"post_id" => $this->id,
    			"user_id" => 1

    		]);*/
   }

   public function user()
   {
        return $this->belongsTo(User::class);
   }

   public function scopeFilter($query, $filters)
   {
        $year = $filters['year'];

        $month = Carbon::parse($filters['month'])->month;

        if($month && $year )
        {
            $query->whereMonth('created_at','=',$month)
                  ->whereYear('created_at','=', $year);
        }
        
   }

   public static function archives()
   {
        return static::selectRaw('year(created_at) year,
            monthname(created_at) month,
            count(*) publishedPosts')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get();
   }
}
