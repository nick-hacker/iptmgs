<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    public function schools()
    {
    	return $this->hasMany(School::class);
    }

    public function institution()
    {
    	return $this->belongsTo(Institution::class);
    }
}
