<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function programs()
    {
    	return $this->hasMany(Program::class);
    }

    public function department()
    {
    	return $this->belongsTo(Department::class);
    }
}
