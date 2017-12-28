<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'info';

    public static function getFemaleUsers()
    {
    	return static::where('gender','female')->get();
    }
}
