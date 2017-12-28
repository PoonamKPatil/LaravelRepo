<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'info';

    public function scopeFemaleUsers($query)
    {

    	return $query->where('gender','female');
    }
}
