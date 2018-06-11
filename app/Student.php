<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //A student owns many fees payments
    public function fees()
    {
    	return $this->hasMany('App\Fees');
    }
}
