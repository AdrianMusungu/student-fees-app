<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    //Fees payments belong to students
    public function student()
    {
    	return $this->belongsTo('App\Student');
    }
}
