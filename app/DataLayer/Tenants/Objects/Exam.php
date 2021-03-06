<?php

namespace App\DataLayer\Tenants\Objects;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function courses()
    {
    	return $this->belongsTo('Course');
    }

    public function results()
    {
    	return $this->hasMany('Result');
    }
}
