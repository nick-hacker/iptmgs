<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    public function departments()
    {
    	return $this->hasMany(Department::class);
    }

    public function college()
    {
    	return $this->belongsTo(College::class);
    }
}
