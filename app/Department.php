<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    public function programs()
    {
    	return $this->hasMany(Program::class);
    }

    public function courses()
    {
    	return $this->hasMany(Course::class);
    }

    public function school()
    {
    	return $this->belongsTo(School::class);
    }

    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }
}
